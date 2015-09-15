---
author: admin
comments: true
date: 2009-05-04 14:55:57+00:00
layout: post
slug: alternative-to-sql
title: Alternative to SQL
wordpress_id: 241

tags:
- java
- sql
---

Database alternative, for people just browsing and scanning, I'll write in staccato.



	
  * Relational model pretty good, but we need a better implementation of the relational model, SQL, at least the way it's used now, is just to primitive and cumbersome.

	
  * Lot's of new languages for the JVM, but we're still using SQL to retrieve data from databases. Many programmers may even think that is the only way to retrieve data!

	
  * ORM is worst of both world

	
    * Reinventing the wheel, caching, optimal data retrieval, query optimization

	
    * Relational model is more natural to retrieve data then object oriented model

	
    * Inheritence is not possible the way it's possible in OO, but same functionality is [still possible](http://fyi.oreilly.com/2009/02/the-relational-model-is-much-m.html).




	
  * Java Programmers are spending a LOT of time creating queries, doing optimization, thinking how to retrieve data. Java is improving, but SQL is just largely the same as it was 10 ago.

	
  * SQL / Database integration in Java is still poor. ORM frameworks just hide away the database - usually resulting in a lot of work for database administrators and programmer's just to tweak ill formed sql.


In short, where's a new language for the relation model and why isn't that language or technology emerging? What would be nice is:

	
  1. A better language to access a relation database, that doesn't involve lots of subqueries and joins to retrieve data.

	
  2. A database query langauge that is truly embedded in the programming language I daily work with (Java), and not hidden behind persistence managers, xml files,  application servers.  Or just as worse, SQL hidden in quoted string or text files.



	
  * For 1. After some searching, I found an [alternative to SQL](http://developers.slashdot.org/article.pl?sid=04/10/12/2159209&tid=221&tid=218), [Tutorial D](http://www.techworld.com/applications/features/index.cfm?featureid=910).  The language isn't main stream, but is interesting to [read about](http://tech.inhelsinki.nl/2007-01-27/). Especially if you think SQL and (relational) databases are the same.

	
  * Also I heard a while ago about[ .QL](http://en.wikipedia.org/wiki/.QL) on  the [25 year](http://25jaar.cs.uu.nl/) anniversary of my university, but that's far from mainstream either.

	
  * For .Net there's [LinQ](http://www.infoq.com/interviews/erik-meijer-linq), but that's little use for me as Java software developer.  At least Microsoft has a solution for 2.


