---
author: admin
comments: true
date: 2014-02-27 14:41:46+02:00
layout: post
slug: sql-performance
title: SQL Performance
wordpress_id: 620
categories:
- Technology
tags:
- oracle
- sql
---

If you have to access persisted data, of course, you do not have to necessarely use SQL. But in case you do, knowing something about SQL-performance helps.
I just did a this [3-minute test](http://use-the-index-luke.com/3-minute-test) on SQL performance (for Oracle), with [4/5 score](http://use-the-index-luke.com/3-minute-test/oracle?quizkey=25f289f14109a401df2199aa2ce582fc). Pretty fine.

The answer I failed was [about multi-colomn indices](http://use-the-index-luke.com/sql/where-clause/the-equals-operator/concatenated-keys). When you have a index containing multiple columns, if you use one of those columns in a where clause, the index is used. However, the index can only be used efficient if you use at first column.
