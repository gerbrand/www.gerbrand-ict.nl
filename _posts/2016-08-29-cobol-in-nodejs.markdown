---
layout: "post"
title: "Cobol in nodejs"
date: "2016-08-29 10:35"
---
Cobol can be compiled into Javascript and you can call Javascript from Cobol, as I read in [http://arstechnica.com/information-technology/2015/08/calling-1959-from-your-web-code-a-cobol-bridge-for-node-js/](this article on arstechnica). Will this finally be the way out for all legacy Cobol code?
```
// Dependencies
var Cobol = require("cobol");
```

When .Net came out early 2000s, a Cobol compiler was offered too. There a also numerous way for interoperability from Cobol to Java as well. Both didn't succeed in cornering and replacing Cobol as far as I know. Maybe [https://github.com/IonicaBizau/node-cobol/](Cobol in Nodejs) will.

Some things that could help:
* Javascript is not plagued too much by enterprise architecture and requirements engineering thinking, bringing SOA, star diagrams, layers, foundations and all sort of [antropomorphism](http://www.cs.utexas.edu/~EWD/transcriptions/EWD09xx/EWD936.html)
  This can avoid a huge amount of waste in, where organizations could spend a year building up a SOA-bus instead of doing anything - resulting in the legacy Cobol system still to the heavy lifting.
* The hackish nature of Javascript can be troublesome, but also introduced a practical approach to dealing with legacy code. Not just rewriting everything, but just copy&paste what you need, and add functionality when it's useful.
* In both .Net and even more in the Java / JVM world there's a belief that eventually everything has to run in the Virtual Machine, as bytecode, or as .Net intermediate code. Both environments have excellent ways to interoperate with 'native' libraries written in C, but that's less popular. In the Node.js world this quite a common way of working.
