---
author: admin
comments: true
date: 2009-07-13 11:21:26+02:00
layout: post
slug: jboss-on-linux
title: JBoss on Linux
wordpress_id: 342

tags:
- java
- jboss
---

Lately I tried to run JBoss on my Linux-installation (KUBuntu 9). I got lots of  `java.lang.OutOfMemoryError: PermGen` space errors while starting JBoss 5. First I thought that had something to do with Linux. I google'd the error, and from what I read, permgen errors are caused by bugs in either JBoss or the JavaVM. So increasing memory won't help, besides, JBoss ran fine on my Windows installation.
Then I remembered JBoss had a separate package for Java JDK 1.5 and JDK 1.6. I used the JBoss- version for JDK 1.5, but I have JDK 1.6 installed on my Linux installation. After I switched to the JBoss 5.0 version for JDK 1.5, JBoss ran smoothly!
