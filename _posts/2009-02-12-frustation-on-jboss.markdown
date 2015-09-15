---
author: admin
comments: true
date: 2009-02-12 20:41:07+00:00
layout: post
slug: frustation-on-jboss
title: Frustation on JBoss
wordpress_id: 82
categories:
- Reviews
tags:
- java
- jboss
---

For some application I need a notion of 'shared state' within a cluster of computers within a network. The software will have to run on JBoss. Yesterday I had successfully setup a JGroups using the default configuration. Using a fine tutorial I had set up a shared state. JGroups provided a lot functionality so that I not have to work with sockets, multicast, discovery, etc. myself. However, transactions, 2 phase commits, serialization wasn’t standard functionality, which I needed too. I didn’t want to reinvent the wheel, so I decided to use JBoss Cache, which is built on top on JGroups.

I could successfully instantiate a cache, using the default factory class. However, a more proper way would be to have JBoss instantiate and manage the cache, since the application has to run on top of JBoss.

In the [JBoss Cache documentation](http://www.jboss.org/file-access/default/members/jbosscache/freezone/docs/3.0.2.GA/userguide_en/html_single/index.html) I’ve found the following entry:

    
    CacheFactory factory = new DefaultCacheFactory();
    
    // Build but don't start the cache
    
    // (although it would work OK if we started it)
    
    Cache cache = factory.createCache("cache-configuration.xml");
    
    MBeanServer server = getMBeanServer(); // however you do it
    
    ObjectName on = new ObjectName("jboss.cache:service=Cache");
    
    JmxRegistrationManager jmxManager = new JmxRegistrationManager(server, cache, on);
    
    jmxManager.registerAllMBeans();
    
    ... use the cache
    
    ... on application shutdown
    
    jmxManager.unregisterAllMBeans();
    
    cache.stop();











Sounds great doesn’t it? Well, first of all, it’s an awful lot of code just to get access to the cache. Secondly, there’s a reference to a configuration file you first have to place somewhere, and thirdly there’s the line that’s commented with:


    
    // however you do it


Arg! Why can’t those people of JBoss just explain *how* I have to do that. You might say, a clustered cache is complicated stuff. Transactions, commits over network, multi casts. That’s all pretty complicated. However, this configuration crap has nothing to do with that. I *hate* configuration. I *hate* xml. I just want working stuff.



O well, most closed source software isn’t much better, if not much worse. Probably what the people behind JBoss wants users to do, is buy a support contract. Still a lot less expensive than software like Weblogic or Websphere.
