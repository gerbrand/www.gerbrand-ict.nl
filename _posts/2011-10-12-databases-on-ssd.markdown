---
author: admin
comments: true
date: 2011-10-12 18:34:47+02:00
layout: post
slug: databases-on-ssd
title: Databases on SSD
wordpress_id: 574

tags:
- database
- nosql
- sql
---

SSD disk are becoming increasingly popular. As they read faster, you might consider running databases such as Oracle DBMS, MySQL or non-sql databases. However, interestingly, originally databases are optimized for tradition hard drives with spinning disks: most importantly: data is read in small chunks, and sequential reads are faster than random reads. I can't remember everything anymore, but I do remember doing calculations on various reading/writing algorithms during my university days.
For SSD's this model doesn't hold anymore: this blog posting shortly explains why: [Why theory fails for SSDs](http://www.acunu.com/blogs/irit-katriel/theoretical-model-writes-ssds/) There's no difference, if I understand correctly between random reads and sequential reads. However writes are much slower. Also SSD's have to calculate the physical address for every different read or write access. Meaning if you read a different part of the disk continuously, this will be slower then reading in the same pattern again and again.

Of course the theory doesn't fail, but it just doesn't apply to SSD :-).
