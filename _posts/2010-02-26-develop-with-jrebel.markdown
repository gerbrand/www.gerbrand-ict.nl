---
author: admin
comments: true
date: 2010-02-26 23:23:58+00:00
layout: post
slug: develop-with-jrebel
title: Develop with faster with smarter tools
wordpress_id: 401

tags:
- coder
- java
---

I develop software for a living. This involves quite a lot of talking, coaching, attending meetings, drinking coffee, etc. but the actual work is done during programming - when the software is created. That programming involves repeated cycles of the following: modify or type some code, compile, deploy and then run the code and perform some tests to see if it works. How cumbersome that process was ranged from:



	
  * Hitting 'Run' and waiting a few seconds,

	
  * to hitting 'Run and deploy' in my IDE and waiting about 20-30 seconds,

	
  * to executing a ant script, restarting the application server and waiting 5 minutes

	
  * to compiling a class file, uploading the class and accompanied libraries using a cumbersome webinterface and then executing a PLSQL script to run that class, wasting in total time amount 15 minutes (_yes, that was a a very big and professional company)
_


In my opinion, the programmer is productive when he either codes, or when he tests his codes. Any time spent on waiting or performing some troublesome actions like accessing a web interface is pure waste. In short the above time ranging from a few seconds to 15 minutes is [dead time](http://www.oreillynet.com/onjava/blog/2006/03/dead_time_code_compile_wait_wa.html).

Of course all that time wasted not only frustrates developers, it'll cost quite some time and thus money. Now how can you limit that dead time, that is wasted by developers? One way is your have your developers write perfect code at once. Of course that's not very realistic. Recently I found a very nice tool to limit that dead time, when you develop Java software: [JRebel](http://www.zeroturnaround.com/jrebe). What does that mean for you as java-developer:
JRebel runs as a software agent within your virtual machine, that in turn runs your application server. What JRebel does, is taking over the class-loader.
You can specify the output directories of your IDE (target/classes, /bin, etc.). Now whenever you make a change in your code, IDE's like Eclipse can compile that code into a new class file in the output directory. JRebel will automatically detect the changed class file. Thus no waste! Since JRebel plugs into the VM, it'll work with virtually any application server.

[![](http://www.zeroturnaround.com/wp-content/uploads/2009/11/hotswap.png)](http://www.zeroturnaround.com/blog)
