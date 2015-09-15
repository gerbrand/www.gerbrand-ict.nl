---
author: admin
comments: true
date: 2012-05-08 15:48:54+00:00
layout: post
slug: filesystem-notifications-in-java
title: Filesystem notifications in Java
wordpress_id: 591
categories:
- Technology
---

Inspired by an OS that went in oblivion some years ago (BeOS) operating systems as Windows, Linux and MacOS all have ways to monitor directories for changes built into the filesystem: meaning if a directory is changed because a file or directory is added, removed or changed you can get an event. There's need for running a program that periodically monitors the directory (nor does the OS do that, it's build into the filesystem). Software like Dropbox and other filesyncing products use this, so whenever you change or update a file it's immediately updated to the 'cloud'.
The name of the API's for the listed OS's are:



	
  * On Windows, the [ReadDirectoryChangesW](http://msdn.microsoft.com/en-us/library/aa365465%28v=vs.85%29.aspx) function as part of the filesystem API.

	
  * On Linux, the [inotify](http://en.wikipedia.org/wiki/Inotify) can be used.

	
  * On MacOS, there's [FSEvent ](http://arstechnica.com/apple/reviews/2007/10/mac-os-x-10-5.ars/7)api (source [arstechnica](http://arstechnica.com/apple/reviews/2007/10/mac-os-x-10-5.ars/7)).


There are a number of open source libraries that allow you to use that API in Java, not all cross-platform. Fortunately, since Java 7 watching directories is now part of the default[ java.nio.file](http://docs.oracle.com/javase/7/docs/api/java/nio/file/package-summary.html) API.
