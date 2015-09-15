---
author: admin
comments: true
date: 2014-03-24 13:29:52+02:00
layout: post
slug: demonstrating-gwt-requestfactory-and-spring
title: Demonstrating using GWT-RequestFactory and Spring togetter
wordpress_id: 634
categories:
- Technology
tags:
- gwt
- java
- spring
---

I present a [sample-project](https://github.com/gerbrand/gwt-dynatablerf-spring) that demonstrates using the GWT RequestFactory together with Spring.
<!-- more -->



GWT, the [Webapplication Toolkit](http://www.gwtproject.org/) formerly [owned/led](http://www.infoworld.com/d/application-development/google-hands-over-control-of-google-web-toolkit-steering-committee-196753) by Google allows you to write single-page, client-side webapplications fully in Java. Older versions of GWT only allowed communication with the client via [RPC](http://www.gwtproject.org/doc/latest/tutorial/RPC.html), which has quite a few drawbacks. Using RPC may lead to unresponsive design as it tries to hide that you're communicating over an unreliable (internet)connection. Also RPC can quickly result in ugly mixture of back- and frontend-code.

Since recent years in GWT you can also use the [RequestFactory (RF)](http://www.gwtproject.org/doc/latest/DevGuideRequestFactory.html) for client/server communication. RF allows for a better separation of the client/server code and enforces better design of client/server communication.  
The GWT-SDK ships with a sample project, [DynaTableRF](https://code.google.com/p/google-web-toolkit/source/browse/trunk/samples/dynatablerf/) which demonstrate how to use the RequestFactory. Integrating the RF back-end technologies such as JEE and [Spring](http://spring.io/) is not as straight-forward as the sample-project suggested. So I've extended the sample-project to use Spring. The sample-project [gwt-dynatablerf-spring](https://github.com/gerbrand/gwt-dynatablerf-spring) can be found at my Github-page.




I hope you find the sample-project useful. If you have any questions or remarks, feel free to [contact](/contact/) me.
