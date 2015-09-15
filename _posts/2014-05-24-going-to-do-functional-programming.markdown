---
author: admin
comments: true
date: 2014-05-24 22:01:38+00:00
layout: post
slug: going-to-do-functional-programming
title: Going to do functional programming
wordpress_id: 656
tags:
- haskell
- java
- scala
---

I've learned about functional programming during my university years, with [Haskell](http://www.haskell.org/) as primary language. I considered functional programming as quite elegant, but also impractical. I felt I could get practical results more quickly when using Java or C# than using Haskell. Sometimes I used functional constructs like immutability, separating action from calculation or transforming and trying to limit the side-effects of functions. Usually this ended up in remarks from colleagues, ranging from 'just accept java isn't functional' to 'I don't understand this code'.

Older, and more experienced at, and sometimes wearied of,software development, I'm getting to change my mind about how practical functional programming, as well as the inpractactically of object-oriented programming.

Some insights:




  * Distributed software, SOA, services get much more understandable with functional patterns rather than with  [object-oriented](http://www.quora.com/Object-Oriented-Programming/Was-object-oriented-programming-a-failure/answer/Michael-O-Church?srid=ukQ4&share=1) patterns. What if you have to call multiple services, where each call depends on the result of another service? You don't want to block your software while doing a service-call? And how do you handle errors? What to do about [nullpointerexceptions](http://docs.oracle.com/javase/8/docs/api/java/util/Optional.html)? Using[ reactive programming](https://www.youtube.com/watch?v=kZpLmcgq82k) allows you to handle these problems a lot easier, and then you start doing[ functional programming](http://www.infoq.com/presentations/covariance-contravariance-joy-of-coding-2014) already .


  * Software-architects like to split up software in 'layers'. When using an object oriented language, this leads to translation of objects living in one layer to objects living in another layer, to avoid objects having behavior that belong in one layer ending up in another layer: like persistable domain objects ending up in the UI-layer or business-logic in a service-layer. I am quite fed up with yet another [Dozer](http://dozer.sourceforge.net/) implementation. And xslt almost looks like a[ functional programming](http://stackoverflow.com/questions/110031/is-xslt-a-functional-programming-language) language, with a very verbose syntax.
Instead of discussing what belongs in which layer and wetter or not a domain-object should be [anemic](http://www.martinfowler.com/bliki/AnemicDomainModel.html) or not: lets separate behavior, data and logic altogether. Functional programming languages allow that more naturally and readable.


  * Reusability is often desired. Lots of reusable components are created at many companies. Rarely they're used. Software that is reused most successfully consists mostly just of a set of functions, having little or no state.
I rather have a function [validIban](http://rosettacode.org/wiki/IBAN#Haskell) then a class BankAccount with some method [setIban](http://stackoverflow.com/questions/14256877/should-method-names-be-easy-to-remember) or worse that may throw a validation error and a whole lot of other methods I don't want.


  * When enterprise-system, software grows, so grows the complexity. Nowadays people try to handle the complexity by adding testers, architects, functional/business analysts, information analyst, requirement engineering, ESB, SOA, [middleware](http://www.slideshare.net/ewolff/java-application-servers-are-dead) etc. [All in vain](https://medium.com/message/81e5f33a24e1), bugs still occur and software becomes unmaintainable legacy quickly, adding the need to add yet another software system.
To truly handle software complexity, software must be of high quality and written in a [highly expressive language](http://redmonk.com/dberkholz/2013/03/25/programming-languages-ranked-by-expressiveness/).
Failed releases, software caused system-outages and software bug related security-flaws should not be considered a given we have to live by. [TDD](https://plus.google.com/events/ci2g23mk0lh9too9bgbp3rbut0k) or automatic tests (not the same), clean-code, continuous deployment and similar practices may help. In the end I think a functional, pure, language may be our only hope.


My goal will be for the coming year to both use and[ learn functional programming](http://learnyouahaskell.com/) (fp) a lot more, explain it to other people and hope to popularize fp or ride the wave when functional-programming becomes more popular.

More bold, or maybe foolish, I take up my personal challenge to create something practically useful in [Haskell](http://learnyouahaskell.com/).
