---
author: admin
comments: true
date: 2009-01-14 23:36:47+02:00
layout: post
slug: scala-release
title: Scala release
wordpress_id: 53
categories:
- Technology
tags:
- scala
---

The final release of Scala **2.7.3** is out! You can download the release from the [scala-download](http://www.scala-lang.org/downloads) page.

Some background: Scala is a elegant language that runs on the JavaVM. Unlike languages like Ruby and Groovy, Scala is statically typed. One of the reasons a lot of people like dynamic languages more than Java, is because Java is very verbose. That verbosity is, amongst others, because of its type-system.
However, unlike Java the typing-system is much more elegant and flexible. Because Scala can infer types, you'll have to define types only when necessary. Look for example at the following code (taken from the [Scala website](http://www.scala-lang.org/node/220)):

    
    <span style="font-weight: bold;">object</span> Maps {
      <span style="font-weight: bold;">val</span> colors = Map(<span style="color: red;">"red"</span> -> 0xFF0000,
                       <span style="color: red;">"turquoise"</span> -> 0x00FFFF,
                       <span style="color: red;">"black"</span> -> 0xFFFFFF,
                       <span style="color: red;">"orange"</span> -> 0xFF8040,
                       <span style="color: red;">"brown"</span> -> 0x804000)
    
      <span style="font-weight: bold;">def</span> main(args: Array[String]) {
        <span style="font-weight: bold;">for</span> (name <- args) println(
          colors.get(name) <span style="font-weight: bold;">match</span> {
            <span style="font-weight: bold;">case</span> Some(code) <span style="font-weight: bold;">=></span>
              name + <span style="color: red;">" has code: "</span> + code
            <span style="font-weight: bold;">case</span> None <span style="font-weight: bold;">=></span>
              <span style="color: red;">"Unknown color: "</span> + name
          }
        )
      }
    }


There are no explicit type definitions, eventhough every defined value is statically typed. The scala compiler can infer that the **val colors** should have type scala.collection.immutable.Map[java.lang.String,Int]. Compare that to Java, where you'd  have to use Map<String,Integer> several times.
Minor sidenote: there are languages that have an even more advanced typing system, see, [this nice article](http://www.codecommit.com/blog/scala/is-scala-not-functional-enough).

Furthermore, another what's very much to like about new dynamic languages is it's extendibily. You can extent a language like Ruby or Groovy, and create a new internal language.  Eventhough Scala is statically typed, in Scala this is possible as well.
Let's say you want a sort method for the general Array type. This can be accomplished with the following code:

    
    <span style="color: green;">/* Defines a new method 'sort' for array objects */</span>
    <span style="font-weight: bold;">object</span> implicits <span style="font-weight: bold;">extends</span> Application {
      <span style="font-weight: bold;">implicit</span> <span style="font-weight: bold;">def</span> arrayWrapper[A](x: Array[A]) =
        <span style="font-weight: bold;">new</span> {
          <span style="font-weight: bold;">def</span> sort(p: (A, A) <span style="font-weight: bold;">=></span> Boolean) = {
            util.Sorting.stableSort(x, p); x
          }
        }
      <span style="font-weight: bold;">val</span> x = Array(2, 3, 1, 4)
      println(<span style="color: red;">"x = "</span>+ x.sort((x: Int, y: Int) <span style="font-weight: bold;">=></span> x < y))
    }


There's a lot more exciting, as a last example, I put a code-snippet that demonstrates how XML is integrated in Scala:

    
      <span style="font-weight: bold;" class="kw">val</span> header =
        <span style="color: blue;" class="tag"><head></span>
          <span style="color: blue;" class="tag"><title></span>
            { <span style="color: red;" class="str">"My Address Book"</span> }
          <span style="color: blue;" class="tag"></title></span>
        <span style="color: blue;" class="tag"></head></span>;
    
      <span style="font-weight: bold;" class="kw">val</span> people = <span style="font-weight: bold;" class="kw">new</span> AddressBook(
        Person(<span style="color: red;" class="str">"Tom"</span>, 20),
        Person(<span style="color: red;" class="str">"Bob"</span>, 22),
        Person(<span style="color: red;" class="str">"James"</span>, 19));
    
      <span style="font-weight: bold;" class="kw">val</span> page =
        <span style="color: blue;" class="tag"><html></span>
          { header }
          <span style="color: blue;" class="tag"><body></span>
           { people.toXHTML }
          <span style="color: blue;" class="tag"></body></span>
        <span style="color: blue;" class="tag"></html></span>;


Finally, an example of a quicksort taken from this [sample website](http://en.literateprograms.org/Quicksort_(Scala)). Impressive, but I am to much unexperienced in Scala to grasp that code immediately:

    
      <strong>def</strong> <span style="color: #2040a0;">sort</span><span style="color: #e8132c;">[</span><span style="color: #2040a0;">A</span> <span style="color: #e8132c;"><%</span> <span style="color: #2040a0;">Ordered</span><span style="color: #e8132c;">[</span><span style="color: #2040a0;">A</span><span style="color: #e8132c;">]</span><span style="color: #e8132c;">]</span><span style="color: #4444ff;"><strong>(</strong></span><span style="color: #2040a0;">xs</span><strong>:</strong> <span style="color: #2040a0;">List</span><span style="color: #e8132c;">[</span><span style="color: #2040a0;">A</span><span style="color: #e8132c;">]</span><span style="color: #4444ff;"><strong>)</strong></span><strong>:</strong> <span style="color: #2040a0;">List</span><span style="color: #e8132c;">[</span><span style="color: #2040a0;">A</span><span style="color: #e8132c;">]</span> <strong>=</strong> <span style="color: #4444ff;"><strong>{</strong></span>
        <span style="color: #2040a0;">xs</span> <strong>match</strong> <span style="color: #4444ff;"><strong>{</strong></span>
            <strong>case</strong> <span style="color: #2040a0;">List</span><span style="color: #4444ff;"><strong>(</strong></span><span style="color: #4444ff;"><strong>)</strong></span> <strong>=></strong> <span style="color: #2040a0;">xs</span>
            <strong>case</strong> <strong>_</strong> <strong>=></strong>  <span style="color: #2040a0;">sort</span><span style="color: #4444ff;"><strong>(</strong></span><strong>for</strong><span style="color: #4444ff;"><strong>(</strong></span><span style="color: #2040a0;">item</span> <strong><-</strong> <span style="color: #2040a0;">xs</span>.<span style="color: #2040a0;">tail</span> <strong>if</strong> <span style="color: #2040a0;">item</span> < <span style="color: #2040a0;">xs</span>.<span style="color: #2040a0;">head</span><span style="color: #4444ff;"><strong>)</strong></span> <strong>yield</strong> <span style="color: #2040a0;">item</span><span style="color: #4444ff;"><strong>)</strong></span> ::: <span style="color: #2040a0;">List</span><span style="color: #4444ff;"><strong>(</strong></span><span style="color: #2040a0;">xs</span>.<span style="color: #2040a0;">head</span><span style="color: #4444ff;"><strong>)</strong></span> ::: <span style="color: #2040a0;">sort</span><span style="color: #4444ff;"><strong>(</strong></span><strong>for</strong><span style="color: #4444ff;"><strong>(</strong></span><span style="color: #2040a0;">item</span> <strong><-</strong> <span style="color: #2040a0;">xs</span>.<span style="color: #2040a0;">tail</span> <strong>if</strong> <span style="color: #2040a0;">item</span> >= <span style="color: #2040a0;">xs</span>.<span style="color: #2040a0;">head</span><span style="color: #4444ff;"><strong>)</strong></span> <strong>yield</strong> <span style="color: #2040a0;">item</span><span style="color: #4444ff;"><strong>)</strong></span>
        <span style="color: #4444ff;"><strong>}</strong></span>
      <span style="color: #4444ff;"><strong>}</strong></span>





* * *


Below a book about Scala I recently read


