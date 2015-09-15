---
author: admin
comments: true
date: 2010-07-29 15:33:18+00:00
layout: post
slug: database-upgrade-during-deployment
title: Database upgrade during deployment
wordpress_id: 446
categories:
- Technology
---

I  want to create an installation package of a Java application. Part of  the installation involves upgrading a SQL database (Oracle) - by running  a few SQL scripts. Creating the SQL scripts to do the update by itself  isn't the problem, however I need to find a way to easily run those  script.

Of  course Oracle has something like SQLPlus, but that would mean SQLPlus  has to be installed on the machine from where the package is installed.  Another problem with SQLPlus is that it's not so userfriendly.

Using  JDBC and some programming I can easily create something that would  check what current version of my application is installed, and then run  the needed SQL scripts to upgrade the database. However, even easy  things take some time and I'd think there are already some existing  solutions.

I  was about to ask a question on stackoverflow, but before I finished  typing my question stackoverflow already came up with a similar  question: [Update a backend database on software update with Java](http://stackoverflow.com/questions/109746/update-a-backend-database-on-software-update-with-java). I'll have to try out on of the suggested solutions, [Liquibase](http://www.liquibase.org/), [dbmigrate](http://code.google.com/p/dbmigrate/) and maybe [Autopatch](http://autopatch.sourceforge.net/).
