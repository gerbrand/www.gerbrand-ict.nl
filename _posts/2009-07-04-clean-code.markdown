---
author: admin
comments: true
date: 2009-07-04 22:20:45+02:00
layout: post
slug: clean-code
title: Clean code
wordpress_id: 303

tags:
- book
- coder
---

Recently I read the book [Clean Code](http://www.amazon.com/gp/product/B001GSTOAM?ie=UTF8&tag=geonic-20&linkCode=as2&camp=1789&creative=9325&creativeASIN=B001GSTOAM)![](http://www.assoc-amazon.com/e/ir?t=geonic-20&l=as2&o=1&a=B001GSTOAM) by Robert C. Martin. I was very pleasently surprised by the book. The book was well written, for me it was a page-turner. The book starts with explaining why you (or the people you manage) should write clean code: writing good, well-written, consise - in short clean - code, is essential to agile software development. Writing clean code makes certain both yourself and any future developers can easily extend and maintain your software.


[![](/wp-content/uploads/2009/07/41Obj6pdGtL._SL160_.jpg)](http://www.amazon.com/gp/product/B001GSTOAM?ie=UTF8&tag=geonic-20&linkCode=as2&camp=1789&creative=9325&creativeASIN=B001GSTOAM)![](http://www.assoc-amazon.com/e/ir?t=geonic-20&l=as2&o=1&a=B001GSTOAM)



Every chapter goes on specific part of programming, amongst others: using meaning full names, how to write good, consise and easy-to-understand functions, writing good comments, writing good unit tests, and having a good class design. A lot of content I already knew or was at least aware of, either intuitively through experience or from other sources. However, that didn't made reading it any less usuful, the book does very well on explaining why and offering good arguments, just to convince other people. The book also questions a lot of common practices, I did not think of before.
  

I'll pick some chapters to explain more in detail the content. First chapter goes into importance of good naming. Amongst others, variable should have meaning full names, and one letter variables like `j` or `h` should be used only for simple loop iteration. Class names should correspond to domain words like `Customer`, `WikiPage `or `AddressParser`. Postfixes like `Info `(`AccountInfo`) or prefixes like I (`ICustomer`) just clutter up and don't add anything. Same goes for prefixed variable names like `m_dsc `or `int_ordernum`. Function names should be verbs like `addAccount `or `deletePage`.
Another chapter goes on a often mis-understood or underestimated subject: writing good comments. One point the auther made is to limit the amount of generated comments. IDE-generated comments containing lots of `@param, @return `tags, etc., just clutter up your code while not adding information: if you use clear names, you don't need to explain each parameter. Worse, they increase the change that of introducing 'lies': comments that do not corrrespond with the code the're commenting.

Allthough the title of the book suggests it's about programming in general, the book is slightly targeted to Java-programming. All code-samples are Java code, and some times the book refers to Java standards (like the Bean standard). C# developers could benefit from the book as well, as well as developers in similar languages, allthough some code samples could be harder to understand. Programmers in languages like Haskell, XSLT, Lisp would benifit less of the book.
  

I could go on, but I'd just recommend you to read the book if you're a programmer yourself or have to manage programmers directly!



* * *


<table width="100%" >
<tr >

<td align="left" >


</td>

<td align="right" border="1" valign="top" >

[
Bol.com  

![Clean Code](http://www.bol.com/imgbase0/thumb/BOOKCOVER/FC/0/1/3/2/3/0132350882.gif)  
Clean Code  
Robert C. Martin  
](http://clk.tradedoubler.com/click?a=1601917&p=67859&g=17297702&epi=1001004006133271)


</td>
</tr>
</table>

