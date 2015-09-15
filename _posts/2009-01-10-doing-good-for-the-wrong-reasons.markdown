---
author: admin
comments: true
date: 2009-01-10 17:42:05+02:00
layout: post
slug: doing-good-for-the-wrong-reasons
title: Trying to do good for the wrong reasons
wordpress_id: 43

tags:
- coder
- design patterns
---

Many programmers with at least some education computer science code by a few principles:



	
  * _Encapsulate database access, using Data Access Objects so we're not tied to one or another database_

	
  * _Use Model View Controller pattern, so we can change the view logic easily without having to change the entire software._

	
  * _Use Facade beans and Remote Beans so we can separate our application server in a frontend-server and business-logic server._

	
  * _Know the book of [GoF](http://clk.tradedoubler.com/click?a=1601421&p=67859&g=17297702&epi=1001004004976354) by heart and use their [patterns](http://en.wikipedia.org/wiki/Design_Patterns), so our code is good._


However that's all wrong! The principles are good, when applied correctly. However the reasons are all wrong resulting mediocre software. If in any project changing database is from for example from MySQL to Oracle or changing view-layer from JSF to GWT is a possibility, then that software-project is very bad managed. The ability to change a product shouldn't be the reason. And if people think they can have their software be more robust are perform better by setting up an extra business-logic server, they'll be disappointed.

Because people often use the wrong reasons, a lot of code is overly complicated, badly performing and highly unmaintainable. You known something is wrong if you have to wade to a lot of interfaces, Impl classes, XML-configuration files just to known what a piece of code is doing

Naturally the principles are good, however, the goal is totally different.  The reason for all of the principles should be: _program correctly functioning code that can be adapted easily now or in the future._
**Design patterns isn't a bible**


Known that any book on design patters shouldn't be used as a bible. Wrongly applied design patterns produce [terrible code](http://blog.thinkrelevance.com/2007/5/17/design-patterns-are-code-smells). The book of GoF was a great book because they (Gamma et al.) introduced the concept of design patterns and gave a list of good design patterns for C++ and Smalltalk. Many of the design patterns are relevant, but many are also not.
[![Design Patterns](http://www.bol.com/intershoproot/thumb/BOOKCOVER/FC/1/4/0/5/8/1405837306.gif)
Design Patterns
Erich Gamma & Craig Larman
](http://clk.tradedoubler.com/click?a=1601917&p=67859&g=17297702&epi=1001004004976354)

Most important contribution of the book, is the notion of design patterns. They introduces common words, a name, like Data Access Object, Visitor, Singleton to programming constructs. Because they gave name to certain programmings patterns, people can talk about them and understand each others code. Similar like architects use various patterns to design houses, office buildings, public buildings or monuments. The origin of design patterns was a book about architecture:

[![The Timeless Way of Building](http://www.bol.com/intershoproot/thumb/BOOKCOVER/FC/0/1/9/5/0/0195024028.gif)
The Timeless Way of Building
Christopher Alexander
](http://clk.tradedoubler.com/click?a=1601917&p=67859&g=17297702&epi=1001004000020130)

There are endless design patterns besides the one listed in [Design Patterns: Elements of Reusable design](http://en.wikipedia.org/wiki/Design_Patterns). Every programming language, framework and software project and application has its own patterns. Recognize patterns, give them a name if they haven't got one. Make sure the patterns and the naming are known within the company, organization or all of the users of a framework. That way, the code will be easily to grasp for anyone who has modify or extend the software, because of common naming and usage.

**Great coder**

Read who a  [great hacker](http://www.paulgraham.com/gh.html) is, how to become [better programmer](http://www.flipcode.com/archives/Being_A_Better_Programmer.shtml) read what you can do to be a [better coder](http://www.codinghorror.com/blog/archives/001138.html). The greatest cause why software development is so expensive and costly, is because there's enough emphasis within many organisations on writing good code.
