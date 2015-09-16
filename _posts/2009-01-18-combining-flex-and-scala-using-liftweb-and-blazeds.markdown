---
author: admin
comments: true
date: 2009-01-18 17:05:03+02:00
layout: post
slug: combining-flex-and-scala-using-liftweb-and-blazeds
title: Combining Flex and Scala using Liftweb and BlazeDS
wordpress_id: 64
categories:
- Technology
tags:
- flex
- scala
---

I wanted to setup a sample project that uses Flex and Scala. I followed the excellent tutorial on FlexOnRails: [Integrating Flex, BlazeDS, and Scala/Lift](http://flexonrails.net/?p=103). The tutorial helps a lot explaining how to set up your sample project. Unfortunately the tutorial is a bit outdated with regard to latest versions. Fortunately I could solve all problems! I'll list the problems I had. Also, I'll post my project. I won't redo the tutorial, as I certainly couldn't to a better job then Derek Wischusen.



    
  * First problem I had, was getting my backend compiled. The liftweb has changed slightly, as a result the class Boot.scala didn't work anymore. I could solve it by downloading the latest **Liftweb framework, version 0.9**. I copied & pasted the Boot.scala from the sites/examples dir. After a few tweaks (removing code I didn't need), the project compiled successfully!

    
  * Then I wanted to setup the flex project. That was quite easy, using the latest version of **Flexbuilder (version 3.0.2.214193)**.
I setup flexbuilder to deploy in the backend/webapp directly, as is explained in the tutorial.

    
  * I ran the project by running the following maven commands in the backend subdir:
**mvn package**
**mvn jetty:run**

    
  * While running the example, I got a AbstractMethodError. I wasn't the first person to get that error, as I found on the [Liftmailinglist](http://markmail.org/message/sllcgvhebbp3nzbw#query:java.lang.AbstractMethodError%3A%20net.liftweb.http.SessionMaster%24.mailbox_%24eq(Lscala%2Factors%2FMessageQueue%3B)+page:1+mid:v5y2777ssl4mmqfq+state:results). I could fix the problem by using **Scala version 2.7.1** for my own project. All in all, when using bleeding-edge technologies, having the latest version isn't good always!

    
  * After that I ran the project  again. Now I get a NullPointerException, seems the line _val msgBroker = MessageBroker.getMessageBroker(null)_ returns Null.
Turned out I forgot to update the web.xml, the Flex servlet and other configuration has to be added.


I named the sample project Elegante. Download the source here: [elegante.zip](/wp-content/uploads/2009/01/elegante.zip). For explanation see the original tutorial.


* * *




