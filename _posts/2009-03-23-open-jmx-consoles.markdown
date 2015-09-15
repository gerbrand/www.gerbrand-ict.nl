---
author: admin
comments: true
date: 2009-03-23 13:24:21+02:00
layout: post
slug: open-jmx-consoles
title: Open JMX consoles
wordpress_id: 151

tags:
- jboss
---

If you search on google on [DummyResourceAdapter](http://www.google.nl/search?q=DummyResourceAdapter), you'll find (at least currently) a lot of open administration consoles of JBoss, the JMX-console. These consoles should not be available to the open internet, but I guess someone forgot the close them.

Take for example the console of the website called [www.ccidgroup.net](http://www.ccidgroup.net): what would happen when you hit destroy button on the [MBean Inspector of the ROOT.war](http://www.ccidgroup.net/jmx-console/HtmlAdaptor?action=inspectMBean&name=jboss.management.local%3AJ2EEApplication%3Djbossweb-tomcat55.sar%2CJ2EEServer%3DLocal%2Cj2eeType%3DWebModule%2Cname%3DROOT.war) ?
<table border="0" >
<tbody >
<tr >

<td >![JBoss](/wp-content/uploads/2009/03/logo.gif)
</td>

<td valign="middle" >


# JMX MBean View



</td>
</tr>
</tbody></table>
<table border="0" >
<tbody >
<tr >

<td >MBean Name:
</td>

<td >**Domain Name:**
</td>

<td >jboss.management.local
</td>
</tr>
<tr >

<td >
</td>

<td >**name: **
</td>

<td >ROOT.war
</td>
</tr>
<tr >

<td >
</td>

<td >**J2EEServer: **
</td>

<td >Local
</td>
</tr>
<tr >

<td >
</td>

<td >**J2EEApplication: **
</td>

<td >jbossweb-tomcat55.sar
</td>
</tr>
<tr >

<td >
</td>

<td >**j2eeType: **
</td>

<td >WebModule
</td>
</tr>
<tr >

<td >MBean Java Class:
</td>

<td colspan="3" >org.jboss.management.j2ee.WebModule
</td>
</tr>
</tbody></table>
...

![destroy](/wp-content/uploads/2009/03/destroy.jpg)

I haven't tried and I've sent a mail to webmaster@domain - but I'm slightly curious.
