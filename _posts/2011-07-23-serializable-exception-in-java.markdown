---
author: admin
comments: true
date: 2011-07-23 20:07:21+02:00
layout: post
slug: serializable-exception-in-java
title: Serializable Exception in Java
wordpress_id: 563
categories:
- Reviews
tags:
- java
- wicket
---

When  you use Wicket as webfrontend framework to build your application, sooner or later you'll encounter the NotSerializableException. This is because Wicket will want to serialize any state you have into a HTTPSession. In Wicket, the first three pages are usually in memory too, so you could ignore the exception for a while, but of course this will fail immediately in case use want to use your webapplication in a clustered configuration. Not to mention you should never ignore Exceptions anyway.

The problem in solving such a Serializable exception is finding the field that is not Serializable. The stacktrace of java doesn't help much. Fortunatelly, after some searching I've found the [solution, in the comment of blog posting](http://blog.crazybob.org/2007/02/debugging-serialization.html): add the option _-Dsun.io.serialization.extendedDebugInfo=true_ to the JVM startup parameters.
Now the stacktrace gives you the exact fieldname or expression that is causing the problems, as you can see in the example below:

    
    2011-07-23 21:44:50,362 ERROR [http-8080-1] [] org.apache.wicket.util.lang.Objects - Error serializing object class nl.gerbrandict.forum.AdminPage [object=[Page class = nl.gerbrandict.forum.AdminPage, id = 2, version = 0]]
    java.io.NotSerializableException: org.springframework.beans.factory.support.DefaultListableBeanFactory
    - field (class "org.springframework.orm.hibernate3.HibernateTransactionManager", name: "beanFactory", type: "interface org.springframework.beans.factory.BeanFactory")
    - object (class "org.springframework.orm.hibernate3.HibernateTransactionManager", org.springframework.orm.hibernate3.HibernateTransactionManager@10fd8ce3)
    - custom writeObject data (class "org.springframework.transaction.interceptor.TransactionInterceptor")
    - object (class "org.springframework.transaction.interceptor.TransactionInterceptor", org.springframework.transaction.interceptor.TransactionInterceptor@2c96cb51)
    - field (class "org.springframework.transaction.interceptor.TransactionAttributeSourceAdvisor", name: "transactionInterceptor", type: "class org.springframework.transaction.interceptor.TransactionInterceptor")
    ..
            - field (class "nl.gerbrandict.forum.AdminModel", name: "person", type: "class nl.gerbrandict.forum.Person")


(note: not publishing the entire stack trace and using some sample dummy field/classnames).
Although I haven't tried, enabling this option in production is most likely a bad idea, because Serialization is already a pretty inefficient process without any debugging information enabled. In my case, I was using a [PropertyModel](http://wicket.apache.org/apidocs/1.4/org/apache/wicket/model/PropertyModel.html) somewhere, using non model as target object.
