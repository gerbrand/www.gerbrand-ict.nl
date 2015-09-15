---
author: admin
comments: true
date: 2010-06-21 23:00:19+00:00
layout: post
slug: proxying-authentication-using-jboss
title: Proxying authentication using JBoss
wordpress_id: 264
categories:
- Technology
tags:
- java
- jboss
- security
- sql
---

Wouldn't it be nice if the connection to the database is done using the same username as the username used to login to a (JEE) application? Oracle has a solution for that: [proxy authentication](http://download.oracle.com/docs/cd/B28359_01/java.111/b31224/proxya.htm).  When using proxy authentication, every application user is also a database user: meaning when someone logins to your JEE webapplication using username john, he'll also access the database as user john. This way all actions of the user are logged at the database-level: an administrator or auditer can see exactly what data a certain user modified or accessed during a JEE session.

<!-- more -->

Also, this allows for fine-grained security at database level: [Virtual Private Database](http://www.oracle.com/technology/deploy/security/database-security-10g/virtual-private-database/index.html).

[caption id="attachment_297" align="alignnone" width="456" caption="(c) Oracle"][![Virtual private database](/wp-content/uploads/2009/06/virtual-private-database1.gif)](http://www.oracle.com/technology/deploy/security/database-security-10g/virtual-private-database/index.html)[/caption]

As described in the above image and referenced article, the user identified by userid 106 (let's say that's user john) will access the database using a private database connection. The user can only access rows that have that userid as primary or foreign key.  John can't see the passwords, orders, credit card data or anything of other users even if he would somehow hack the webapplication. How to set up this finegrained securiy is beyond this article, but I hope the above example explains what the purpose VPD is.

If you develop your JEE software using Oracle software  proxy authentication requires only a bit of configuration, for example, see the following article how to setup proxy authentication using [JHeadstart](http://blogs.oracle.com/jheadstart/2008/01/28/).

However, what if you're JEE applicication consists of non-oracle software? Can you still use proxy authentication when you use software like JBoss, Hibernate, IBatis, MyFaces, Wicket etc? Yes you can! I'll explain below how to set up proxy authentication using JBoss in such a way you don't have to modify any of the code that uses JDBC, directly or indirectly.



	
  * First a way is needed to set a username for each (JDBC) database connection retrieved. [It-eye weblog](http://www.it-eye.nl/weblog/2005/09/12/oracle-proxy-users-by-example/) explains how to open a connection to a database using java, and then switch to another username.

	
  * Secondly, in your application users should authenticate them self using the default mechanism of J2EE 1.4 (and higher) application, using [JAAS](http://java.sun.com/javase/technologies/security/). Usually creating a security policy inside your web.xml or inside your ear is enough. Here's the information how to do this under JBoss: [Secure a webapplication](http://www.jboss.org/community/wiki/SecureAWebApplicationUsingACustomForm).
Since we're using a database, the best option would be to use database based authentication, meaning user information comes out of a database table. There's a lot of documentation on the web how to do add security, so I won't repeat that here.

	
  * Database connection in JBoss are retrieved using connection pooling, as is custom in any JEE server.  You can create a custom connection pool, that changes the switches to the user name that is currently logged in at the webapplication. That way, every action on the database is done under a database user that is currently logged in.Do to be able to do that, first, you'll need a custom connection factory that extends the default connection factory. Our connection factory will return a customized datasource that modifies code.Here's a code listing:

    
    package nl.gerbrandict.dbconnaudit;
    
    import java.sql.SQLException;
    import javax.resource.ResourceException;
    import javax.resource.spi.ConnectionManager;
    
    import org.apache.log4j.Logger;
    import org.apache.commons.lang.StringUtils;
    import org.jboss.resource.adapter.jdbc.local.LocalManagedConnectionFactory;
    
    /**
     * An extended connection factory, that uses the Oracle feature to change the username of an existing connection
     *
    
     * When a user authenticated on the application server, the database connection will switch to that username.
     * This allows for better auditing and potentially for improved security.
     *
     * Properties (get'ers and set'ters) can be set via the configuration section of the -ds file
     * @author gvdieijen
     */
    public class DBConnAuditConnectionFactory extends LocalManagedConnectionFactory {
    
        private String defaultProxyUser;
    
        public DBConnAuditConnectionFactory() throws SQLException {
            super();
    
        }
    
        @Override
        public Object createConnectionFactory(ConnectionManager cm) throws ResourceException {
            return new OracleWrapperDataSource(this, cm);
        }
    
        public void setEnableProxySession(Boolean enableProxySession) {
            this.enableDbConnAudit = enableProxySession;
        }
    
        public void setDefaultProxyUser(final String defaultProxyUser) {
            if (StringUtils.isEmpty(defaultProxyUser)) {
                this.defaultProxyUser=null;
            } else {
                 this.defaultProxyUser = defaultProxyUser;
            }
        }
    
        /**
         * Default db user to open proxy session for, when no authenticated user is active
         * @return
         */
        public String getDefaultProxyUser() {
        	return this.defaultProxyUser;
        }
    }


As you can see, the file returns a OracleWrapperDatasource. That's custom class, that extends the default WrapperDatasource of JBoss, and changes the user of jdbc connection just before the connection is handed of to the application. To speak in terms of the fine book

	
  * Now, How can you use that new class? They have to be packed into a rar file. Functionally, that's a Resource Adapter, a module that allows a J2EE application to use resources. Technically (and practically), it's just a jar-archive similar to a war, with a different extension. Maven can create these files automatically for you, if you set the packaging type to rar instead of jar (which is the default).

	
  * When you download JBoss, you'll get a sample connection pool for a in-memory database: default-ds.xml, located in the server/default/deploy directory of jboss. To use the custom classses, copy the file into (for example) myoracleproxy-ds.xml and create a minor modification so a custom connection factory is used - update the managedconnectionfactory property, that a custom connectionfactory is used, that returns the proxied connections:

    
    <managedconnectionfactory-class>nl.gerbrandict.dbconnaudit.DBConnAuditConnectionFactory</managedconnectionfactory-class>





All in all, after some tweaking, all queries and updates to your Oracle database are done under the J2EE username. This means when user Joe logs in, all his database access will be logged under user Joe as well. This can improve auditing as well as security.
