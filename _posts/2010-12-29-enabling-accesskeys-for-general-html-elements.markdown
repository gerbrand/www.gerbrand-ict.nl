---
author: admin
comments: true
date: 2010-12-29 16:48:43+02:00
layout: post
slug: enabling-accesskeys-for-general-html-elements
title: Enabling accesskeys for javascript events
wordpress_id: 478
categories:
- Technology
redirect_from:
  - /2010/12/enabling-accesskey
  - /2010/12/enabling-accesskeys-for-general-html-elements
tags:
- html
- javascript
- wicket
---

Using the [accesskey](https://developer.mozilla.org/en/XUL/Attribute/accesskey) attribute, you can enable hotkeys for various html input elements. This allows one to get the focus to an input element by using the ALT-key + <CHARACTER> (on Windows) or CTRL-key + <CHARACTER> (on Mac). This way, your page is accessible by keyboards besides mouse.

Here's the example taken from the Mozilla DevCenter:


      <label value="Enter Name" accesskey="e" control="myName"/>
      <textbox id="myName"/>
      <button label="Cancel" accesskey="n"/>
      <button label="Ok" accesskey="O"/>


Both buttons as well as the input box can be accessed by ALT+E, ALT+N, ALT+O on Windows or CTRL+E, CTRL+N or CTRL+O on a Apple-Mac.

This is quite easy to program, and works for all popular browsers (including Internet Explorer, Safari or Firefox).
There might be cases where you want to execute some javascript when an accesskey is hit, for example to fire a java-event. Almost all webapplications use javascript one way or another. Fortunately, you don't not complitated key-event-handling javascript to do that, just use an empty link:


    <a href="#" accesskey="y" onclick="some javascript"> </a>


The javascript is executed when the acesskey is hit, this case an ALT+y on Windows. The link is not displayed, so you're free wetter or not to display a button, link or anything within your web-application.
