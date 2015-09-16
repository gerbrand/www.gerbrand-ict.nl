---
author: admin
comments: true
date: 2009-04-14 15:14:46+02:00
layout: post
slug: threads-alternative-in-jee-using-the-timerservice
title: 'Threads-alternative in JEE: using the timerservice'
wordpress_id: 171
categories:
- Technology
redirect_from:
  - /2009/04/threads-alternative-in-jee-using-the-timerservice
	- /2009/04/threads-alternative-in-jee-using-the-timerservice/147522
tags:
- java
- jboss
- jee
---

A common problem in in developing Java Enterprise (JEE or J2EE) application is working with threads, or more generally executing code asynchronously. Starting and instantiating threads in the old-fashioned java way is not allowed.
The reason: within JEE you work with EJB's: Java Beans with managed resources. Databaseconnections, transactions, sessions, all of these resources are managed by the application server. Usually resources such as databaseconnections are not thread-safe. The application server will take of any issues related to thread-safefety, as long as you don't instantiate threads yourself. That being said, _**what is the JEE-alternative to using threads**_?

There are several possible answers to that question:




  * Using a JMS, Java Messing Service. How to setup is beyond the scope of this weblog posting.


  * Use of the Timerservice. The timerservice is part of JEE-spec (since 1.4). Using a few annotations you can have the same functionality as you would have when using threads - but compliant with the JEE-spec. I'll explain how to use the TimerService, so you can stop worrying about not being JEE compliant (with regard to threads)!


The [TimerService ](http://java.sun.com/javaee/5/docs/api/javax/ejb/TimerService.html)can only be used within a stateless EJB bean. So to start you'll have to define one, by adding the right annotations:


    ..

    @Stateless
    public class MyTimerExampleBean implements MyTimerExample {

    }
    ...
    public interface MyTimerExample {
    }


Within the bean you can inject the timerservice using the Resource annotation. As soon as the bean is deployed within an application server like JBoss, the bean is instantiated and the resources are injected and available for use.


        @Resource
        private TimerService timerService;


Now we'll use our timerservice. We define a method called _startMe _and a method _runMe_. The startMe method will define a timer. The timer will then execute the runMe method after a predefined time.

When the _runMe _method is to be executed, the bean is newly instantiated. This means, if you set any local variables within your bean, those values will be lost. For that reason, we use the _**myInfo **_class to transfer parameters, in this case a delay and the message we want to print to the screen.


    class HelloWorldInfo implements Serializable {
       String message;
       long delay;
       int counter;
    }
    public void startMe() {
        long waitTime =60*1000; //60 seconds, 1 minute
        HelloWorldInfo taskInformation=new HelloWorldInfo();
       taskInformation.message="Hello world";
       taskInformation.delay=12*1000; //12 seconds
       taskInformation.counter=0;

       Timer timer = timerService.createTimer(waitTime, taskInformation);

    }
        @Timeout
        public synchronized void runMe(Timer timer) {

          final HelloWorldInfo myInfo = (HelloWorldInfo ) timer.getInfo();

          System.out.println("Going to do something important");
          Thread.wait(5000);
          System.out.println(myInfo.delay);
          System.out.println(myInfo.message);
      }


That's all there is! Using the above code, will allow you to run code asynchronously in a similar fashion when using Thread and Runnable classes. You could for example call a remote webservice, or run a batch job on the database. The method runMe will run within a separate transaction - in case an error is thrown within the the runMe method, the transaction is rolled back. Since the bean is instantiated using the JEE-container, any resources associated with the bean will be discarded.

If you want want to execute the run method again, the easiest way is to call the startMe method again:


       public synchronized void runMe(Timer timer) {
         ...

       myInfo.counter++;
       myInfo.message="Doing hello world again for the "+myInfo.counter;
       myInfo.delay=6*1000; //now after 6 seconds

       Timer timer = timerService.createTimer(waitTime , myInfo
    );
      }


The myInfo is modified and passed again to the timerserver. So next time the bean is instantiated and the run method is executed, it'll display 'Doing hello world again 1', and will do so with an incrementing number until the application server is shut down. You can pass any information on, as long as the the class containing the information is serializable.


* * *


<table width="100%" ><tr >
<td >


</td>

<td align="right" border="1" >**Bol.com**  

[![Jboss in Action](http://www.bol.com/imgbase0/thumb/BOOKCOVER/FC/1/9/3/3/9/1933988029.gif)  
Jboss in Action  
Javid Jamae & Peter Johnson  
](http://clk.tradedoubler.com/click?a=1601917&p=67859&g=17297702&epi=1001004005604637)

</td></tr></table>
