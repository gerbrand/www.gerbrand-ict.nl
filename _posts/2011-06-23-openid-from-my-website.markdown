---
author: admin
comments: true
date: 2011-06-23 08:07:03+02:00
layout: post
slug: openid-from-my-website
title: OpenID from my website
wordpress_id: 558
categories:
- Technology
---

A lot of websites now provide a way to authenticate yourself via [OpenID](http://openid.net/). That way, you don't have to remember a separate username and password to login to such a website, while still being secure.
The only challenge in using openid is remembering your openid URL, because there are quite a few possible openid providers. I currently can choose from (amongst others) [Google](http://code.google.com/intl/nl/apis/accounts/docs/OpenID.html), [Yahoo](http://www.yahoo.com), [mijnopenid.nl](http://mijnopenid.nl/), [hyves.nl](/2009/04/hyves-now-also-openid-provider/) and quite a few others. Instead of remembering the username/password you have to remember which openid provider you've used for what account - which I think is the reason other authentication mechanism as [facebook's connect a](http://developers.facebook.com/blog/post/108/)re becoming more popular. I'll write about that later, in this page I just want to explain how I made my homepage, http://www.gerbrand-ict.nl an openid provider.
Very simple:



    
  * My homepage is running [Wordpress](http://wordpress.org/), a popular open source weblog.

    
  * There are a lot of plugins for Wordpress, of which one is the openid plugin. By going to the administration screen and then to the section plugins, you can install the openid plugin easily by entering openid in the search box.

    
  * After installation, setup a default account.

    
  * Now I can authenticate myself to any site that uses openid, by just entering http://www.gerbrand-ict.nl !


