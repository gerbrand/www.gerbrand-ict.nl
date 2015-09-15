---
author: admin
comments: true
date: 2009-01-17 16:49:48+02:00
layout: post
slug: pattern-in-ria
title: Pattern in RIA
wordpress_id: 60
categories:
- Methodology
tags:
- jfall
- ria
---

The Flex framework is getting more and  more populair, and other similar RIA-frameworks as JavaFX and Sliverlight get a lot of attention. Some people see Flex as a alternative for webframeworks as Widget, JSF, Struts or GWT. However, there's something fundementelly different. When program in Flex, you actually build a client-application. That application runs entirely on the client's computers. The client connects to the server only when the client need information from the server. The client retrieves information via (web)services.

The pattern (as you can call it) is very unlike webframeworks, where the software runs mostly on the server. When a user accesses a webapplication, the webframework will generate html, javascript and xml and send that to the client's webbrowser. The webframework also needs to create a (HTTP-)session along with a sessionid that is stored at the client-computer.
When a client performs some interaction, like pressing a button, a relatively complicated process is started: a javascript event or browser submit is emitted. The webframework will retrieve that event on the server using generated javascript- and html-code. Using the sessionid, the right user-session, containing client-data is loaded after which more automagic processes are performed.
You might wonder, what about Ajax ? The answer, with Ajax, or JQuery or other framework, the only advantage is, in case o a UI-event not the entire browserpage has to be reloaded and shown on the user, but only a part.

Not so long ago most enterprise software was developed as client-server: a client application would run on an users computer, while the server would consist of a database server. The client would make a connection to the database. The (business) logic of the software was contained in the application, while the database contained the data.
This development-model was quite easy for developers. I don't have hard data, but I think the productivy was much higher back then. My guess is that, for many simple CRUD-like requirements, a average Visual Basic, Delphy, Clipper developer was a lot faster.
Of course one of the mayor problems back then, were the installation and maintance of the client computers. Webapplications pretty much solved that, as the only client software you had was the browser.  Another problem is security: usually the client was connected with the server via a direct connection to the database. That means, if an unauthorized user would gain access to the client software he could do a lot of harm.
In webapplications, a user can only access the software by logging in the the webapplication. Without a username/passsword or other means of authentication, getting access to the server is very hard.

In modern RIA frameworks these problems are mostly solved. The software runs in a standardized plugin like the flash-player or java-player. That software is a lot easier to maintain then custom client software. A RIA-application accesses the server via a webservice. Fine-grained security can  added accessed to the webservice, preventing unauthorized access. That way, access to the server/backend can be controlled.

All in all, modern RIA bring back productivity to the developer **and **the user. Developers finally don't have to waste time learning yet another greatest framework (Struts, SpringMVC, JSF, ADF, GWT), and solving problems inherently part of webdevelopment (http-sessions, javascript debugging, html hell, generated code) . Users finally don't have to wast time waiting for browser refreshes, loading times and timewasting slow operations.

For an overview on different RIA-frameworks, and more on this subject see: [Rich Internet Applications: State of the Union](http://flexblog.faratasystems.com/?p=163) . The term design pattern for RIA I got from the following presentation of a Adobe Evangelist on [J-Fall '08](http://www.bachelor-ict.nl/duane-nickull).
