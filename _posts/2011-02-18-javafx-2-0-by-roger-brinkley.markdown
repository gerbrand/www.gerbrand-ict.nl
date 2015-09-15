---
author: admin
comments: true
date: 2011-02-18 22:01:27+00:00
layout: post
slug: javafx-2-0-by-roger-brinkley
title: JavaFX 2.0
wordpress_id: 495

tags:
- java
- ria
---

Yesterday I attended a [NLJug ](http://www.nljug.org/)meeting at Oracle at De Meern on [JavaFX](http://javafx.com/), called '[JavaFX 2.0 EA](http://www.nljug.org/pages/events/content/university_20110217/)'. The meeting was presented by Roger Brinkley, who's a called 'Community leader', of Mobile and Embedded. That he was formally part of Sun wasn't hard to see based on his clothing and style.

Roger gave an overview of the new JavaFX 2.0, the[ road-map](http://javafx.com/roadmap/) and the planned features. The software seems to be developed in an agile manner: the dead line is fixed, as is policy at Oracle (not meeting a dead line means exit for the responsible executive), but the final set of features is not.
The preview is available now for a limited audience, in May the first public beta will be released and in November the final will be available.

<!-- more -->The most important news I heard:



	
  * JavaFX 2.0 will be a **library **(jfx.jar), rather than a separate scripting language _JavaFX_. The language works in the language Java of course, but you can use the language [Scala](http://www.scala-lang.org/), [JRuby](http://jruby.org/), [Jython](http://www.jython.org/) or other languages available on the JVM. JavaFX script is end-of-life. Fortunately, the syntax of the library calls is quite similar, and there's a program to translate JavaFX script into equivalent Javacode. Curiously, the translator, _FX Translator_, is written in [Scala](http://www.scala-lang.org/).
_**Update 2011-06-15**: I only heard about the fx translator at the here mentioned presentation. I could find little references to the translator: a back-reference to [this postin](http://forums.oracle.com/forums/thread.jspa?threadID=2232556&tstart=45)g (sigh) and the fxtranslator mentioned shortly in this posting on [DrDobbs](http://drdobbs.com/blogs/java/229400781)._
_If you want to use the FXtranslator, you'll have to contact Oracle for now. I guess Oracle will release the automatic translation tool in some time too._

	
  * The **Swing**-controls can be used from JavaFX 2.0. The 'traditional Swing' is now in maintenance mode, Oracle won't create an new features for the original Swing library. Meaning, if you want to develop Swing applications, or more generally, desktop applications in Java now, you can best get the beta or coming GA of JavaFX.

	
  * JavaFX 2.0 will be available on **neither the Mobiles nor Televisions**! Oracle has accepted (Sun's) loss, and will only focus on the desktop for the time being.
JavaFX seems practical on tablet-devices. However, since most tablet devices are enlarged mobiles (running a mobile os) ratter than flattened laptops (running a full desktop os), you can't use JavaFX on any of those devices for the time being.

	
  * The JavaFX is supported on the **MS-Windows **platform only for the coming time, (but) it will run on Mac, Linux or other platforms unsupported. This means, you might miss the hardware acceleration when not using Windows. Mind you: Roger was using a Mac while doing his presentation and demonstration the code-samples so the MS-Windows-only support might not look as dramatic as it seems at first glance.

	
  * Of course JavaFX runs on the JVM 6 or higher. If all goes well, JavaFX will be part of JDK 8. Before that JavaFX can be downloaded as a plugin before from [java.com](http://www.java.com), which will be not to painful for users, especially if they already have some version of the Java-plugin installed.


The JavaFX SDK contains a set of sample application called 'Ensemble'. Roger presented a few impressive programs, and showed the source code. The audience, including the Oracle employee hosting the event was very tech oriented so everyone was eager to see the code of all the nice examples.

Furthermore, Roger frequently mentioned [Podcasts](http://blogs.sun.com/javaspotlight). I have yet to listen to them, but maybe if I have some time left. Should find a way to broadcast audio while doing the dishes.
All in all a nice event. Oracle may turn JavaFX in something that might be practical and usable on a limited number of platforms, ratter then trying to take over the world (or more specifically taking on Android, Flex, Apple IOS).

As you might notice, I've got no code examples or screen-shots. I hope to get access to the beta release of JavaFX 2.0, I'm quite interested in trying out all those nifty things, and expect some nice blog postings on JavaFX soon!

Update 2011-06-01: The public beta of JavaFX is out! I've published on [JavaFX on the Xebia-blog](http://blog.xebia.com/2011/05/javafx-2-0-beta/).
