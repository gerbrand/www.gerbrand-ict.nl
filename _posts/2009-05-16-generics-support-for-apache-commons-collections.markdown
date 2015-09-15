---
author: admin
comments: true
date: 2009-05-16 21:30:00+02:00
layout: post
slug: generics-support-for-apache-commons-collections
title: Generics support for Apache commons collections
wordpress_id: 281

tags:
- Add new tag
- java
---

In my day to day work program I use the [Apache Commons](http://commons.apache.org/) library quite a lot.  One of those libraries is the[ commons collections ](http://commons.apache.org/collections/)library, of which I use the [CollectionUtils](http://commons.apache.org/collections/api-release/org/apache/commons/collections/CollectionUtils.html) class and [ListUtils ](http://commons.apache.org/collections/api-release/org/apache/commons/collections/ListUtils.html)mostly. One great disadvantage of the commons collection library is lack of Java Generics support, added in Java 1.5.  This means if you call a function like [predicatedList](http://commons.apache.org/collections/api-release/org/apache/commons/collections/ListUtils.html#predicatedList(java.util.List,%20org.apache.commons.collections.Predicate)) with a typed list and predicate argument, the function will return an untyped list. The list has to be cast again, which clutters up the code and doesn't look very nice, like the following example:

    
    
    class Address {
        String firstName;
    }
    
    List <address> myAddresses ;
    ...
    List <address> onlyJohns = (List <address>) ListUtils.predicatedList(myAddresses,new Predicate() {
       public boolean evaluate(Object o) {
           Address a=(Address)o;
           return a.firstName.equals("John");
       }
    });
     


Quite a lot of casting as you can see in the above code. Less code would be needed if generics support would be added to the collection framework. Added generics support to the collections library should be too hard, and would improve my code.  

I'd think other people would have that idea, and I quickly found the following posting on [devx](http://www.devx.com/Java/Article/36183). Turns out there's a sourceforge project that has modified the collections library to have generics support: [Commons Collections with generics](http://sourceforge.net/projects/collections).
The project is even added to the central maven repository, so to use the new collection library adding the following dependency is enough:

    
    
    <groupid>net.sourceforge.collections</groupid>
    <artifactid>collections-generic</artifactid>
    <version>4.01</version>
    



The new code now becomes (excluding the Address class, which is the same):

    
    
    List <address> onlyJohns = ListUtils.predicatedList(myAddresses,new Predicate<address>() {
            @Override
       public boolean evaluate(Address a) {
           return a.firstName.equals("John");
       }
    });
    


The code looks quite better! A lot less code would be needed if [closures ](http://www.javac.info/)would be added to Java too, but that'll have to wait until JDK 1.8 or something is released.
