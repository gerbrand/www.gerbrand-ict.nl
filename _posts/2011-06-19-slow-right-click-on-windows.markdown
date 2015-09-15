---
author: admin
comments: true
date: 2011-06-19 07:12:44+02:00
layout: post
slug: slow-right-click-on-windows
title: Slow right click on Windows
wordpress_id: 544

tags:
- utils
---

Besides by Mac laptop I have a Windows desktop at home. Windows 7 is all in all quite a nice OS. However, after using Windows for a while, Windows seems to start degrading. Of course one solution is to reinstall Windows, but that's not exactly a clean solution. I wanted to know the source why Windows seems so slow. Better investigation seems the only problem is the File Explorer, especially when using the context menu/right clicking on a file.
This led me to think some third shell extension for the explorer might be the cause.
After some google'ing I found this nice article: [slow right click](http://windowsxp.mvps.org/slowrightclick.htm). In the article a tool is listed: [ShellExView](http://www.nirsoft.net/utils/shexview.html). Using this tool you can disable any shell extension that's hooked in the explorer. I disabled all software not coming from Microsoft, and my Windows starting working smoothly again! Of course any overlay icons from for example [TortoiseSVN](http://tortoisesvn.tigris.org/) don't work anymore, but that's the whole idea of  these shell extensions. Now I just have to shell extensions one by one to find out what's the actual cause of the slowness, but that's better then reinstalling windows.
