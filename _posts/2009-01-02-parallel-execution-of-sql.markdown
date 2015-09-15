---
author: admin
comments: true
date: 2009-01-02 18:10:45+02:00
layout: post
slug: parallel-execution-of-sql
title: Parallel execution of SQL
wordpress_id: 14
categories:
- Technology
tags:
- database
- parallel
---

**The end of increasing clockspeeds**

The clock-speed for processors doesn't increase anymore due to physical limits. The only way for processor-makers like Intel and AMD to increase the speed of a processor is to add extra cores. Making software scale near-lineair in relation to the number of cores (meaning: doubling the number of cores should result in a doubling of the performance of a program) is quite hard with the current way of programming done by most programmers/architects.

**Parallel execution**
Fortunately there's one language which is very well design to be executed in parallel querying databases using [SQL](http://www.tar.hu/sqlbible/sqlbible0014.html).  Running queries in parallel means the query is split up in subqeuries. Each of those queries is run in parallel and then combined.
For parallelism to have to have advantage, there has to be either a database server having multiple cores or CPU's or the database has to run distributed on multiple nodes (servers/computers). In the latter case, when running on multiple nodes, there's has to be a very fast network connecting these nodes. Also the database-server software has to support running queries in parallel. Well-known database-software such as Oracle can do this out-of-the-box.

When you have an application that is used by a lot of users doing much of the same at the same time - more than the number of nodes and cores-per server - then running queries in parallel doesn't have any advantage.  However, when a small number (or just one) users are running heavy queries - less than the number of nodes and cores-per-server - running queries in parallel can have great advantages.

A SQL statement like _SELECT * FROM customer_, and especially aggregation functions like _SELECT avg(grade) FROM students_ or SELECT max(count(*)) FROM student GROUP BY class. Inserts can run parallel too, although that'll only have a slight advantage when inserting a lot of data at the same time.

Modern DBMS (Database Management Software, usually called database-software or simply _databases_) can run queries parallel on multi-core systems out-of-the box, like the well known DBMS of Oracle. Running queries on multiple-nodes with software such as [Oracle RAC](http://en.wikipedia.org/wiki/Oracle_RAC). For a detailed explanation on parallel execution in Oracle see the whitepaper [Oracle SQL Parallel Execution](http://www.oracle.com/technology/products/bi/db/11g/pdf/twp_bidw_parallel_execution_11gr1.pdf) , or a posting of  [Don Burleson](http://www.dba-oracle.com/t_opq_parallel_query.htm) for a short explanation.

In short, a modern DBMS can do a lot more then you may imagine. Smart SQL can solve quite some problems in concurent programming and optimazing software for multi-core or multi-node environments.
