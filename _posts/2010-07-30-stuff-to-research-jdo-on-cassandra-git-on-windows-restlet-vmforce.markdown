---
author: admin
comments: true
date: 2010-07-30 22:15:13+02:00
layout: post
slug: stuff-to-research-jdo-on-cassandra-git-on-windows-restlet-vmforce
title: 'Stuff to research: JDO on Cassandra, GIT on Windows, Restlet, VMForce'
wordpress_id: 452
categories:
- Technology
tags:
- java
- nosql
---

Just had evening of just trying out stuff and not finishing anything on my Windows machine.

I wanted to try out a persistence API for [Cassandra](http://cassandra.apache.org/). There's a JPA implementation for Cassandra: [Kundera](http://anismiles.wordpress.com/2010/06/30/kundera-knight-in-the-shining-armor/), as well as JDO implementation, on top (or using) datanucleus: [datanucleus-cassandra](http://github.com/PedroGomes/datanucleus-cassandra).

<!-- more -->

Just to clarify why I would want such a thing: **nosql **solutions such as Cassandra are, in essence distributed key-value stores. I know, from following a few classes on databases and distributed databases when attending the university that's a whole lot more complicated to implement then it may seem.
Nevertheless, to do anything useful with that you need a layer on top of the key-value store. Basically all SQL databases like Oracle or MySQL have SQL layer around there key-value store. But the nice thing about stuff like Cassandra you can put something more convenient on top.

I wanted to try out both, starting with the JDO version, as that seemed  more like a natural fit, and I once started ORM with JDO 1.0 many years  ago.
I'd need a git client on Windows, and apparently there's already a [Tortoise Git client](http://code.google.com/p/tortoisegit/), based on the truly great [TortoiseSVN](http://tortoisesvn.tigris.org/), on of the tools I really miss on my Mac. The client version of git first had to be installed, but that was quite easy as well, just download and install [msysgit](http://code.google.com/p/msysgit/).
The tortoisegit client looks very well, and seems easy to use. At least I got the code of datanucleus-cassandra in a breeze. Well now it's kind of late, I'll try out later.

[![](/wp-content/uploads/2010/07/541px-Hector_Cassandra_Pomarici_Santomasi-270x300.jpg)](http://commons.wikimedia.org/wiki/File:Hector_Cassandra_Pomarici_Santomasi.jpg)

Other stuff I want to try out: creating a Rest service using [Restlet ](http://wiki.restlet.org/docs_2.0/13-restlet/21-restlet.html)on Google AppEngine. Just to find out how that works. But later.

Finally I saw a demo on [VMForce](http://www.vmforce.com/). Looks very promising, as I like Spring for development and that's what you'd use. Nothing is released however, now there's just articles and a demo.
