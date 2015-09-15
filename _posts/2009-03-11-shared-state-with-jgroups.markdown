---
author: admin
comments: true
date: 2009-03-11 08:59:48+00:00
layout: post
slug: shared-state-with-jgroups
title: Distributed software with JGroups
wordpress_id: 85
categories:
- Technology
tags:
- java
- jboss
---




# JGroups


A distributed application, where nodes of the application communicate with each other over a LAN using UDP. Each nodes discovers other nodes automatically, when a node crashes or shuts down, all nodes give notice automatically. And this is all possible without any application server, complicated configuration or what-ever-else with JGroups!

There are quite some tutorials, so I just list the basic steps to get started, most notably the maven dependencies.


## Download JGroups


First download JGroups. You can get the latest version from the website [JGroups](http://www.jgroups.org/). Alternatively, you can use Maven. First set up a maven-project, which is beyond the scope of this tutorial.

Add the JBoss repository, by adding 	the following entry to the repositories section of the maven project 	file (pom.xml):

    
    <repository>
    
    <id>maven.jboss.org</id>
    
    <name>JBoss Maven Repository</name>
    
    <url>http://repository.jboss.com/maven2</url>
    
    </repository>


After that add the following dependencies to the 	Maven for the jgroups artifact (I use the current latest 	versions):

    
    <dependency>
    
    <groupId>jgroups</groupId>
    
    <artifactId>jgroups</artifactId>
    
    <version>2.7.0.GA</version>
    </dependency>
    <dependency>
    
    <groupId>log4j</groupId>
    
    <artifactId>log4j</artifactId>
    
    <version>1.2.15</version>
    
    </dependency>




## Setting up a channel


To start using JGroups, no configuration or application server is necessary. In this posting very briefly a class will be that uses JGroups to transmit messages over nodes:

First import the necessary classes:

    
    import org.jgroups.*;


Now set up a channel:

    
    JChannel ch = new JChannel();


The code below you can put in a constructor of your class, so the JChannel is initalized only once. That's all there is! When you run the application multiple times inside the network (or on your own machine, for testing), JGroups will automatically detect other nodes.

Now you can add a receiver to channel, to start receiving messages and being updated of new nodes.

This is possible by implementing the Receiver interface, as demonstrated below:

    
    public class JGroupStart implements Receiver {
    
    	private final static String CLUSTERNAME = "JGroups tutorial cluster";
    
    	public JGroupStart() throws Exception {
    
    		JChannel ch = new JChannel();
    		ch.setReceiver(this);
    
    		ch.connect(CLUSTERNAME);
    
            System.out.println("JGroups cluster is gestart");
    
            Thread.sleep(10000);
    
            Message m = new Message();
    		m.setObject(new String("Hello world from node "+ch.getLocalAddressAsString()));
            ch.send(m);
    	}
    
    	public byte[] getState() {
            return null;
    	}
    
    	public void receive(Message message) {
    		System.out.println("Messsage received: " + message.getObject());
    	}
    
    	public void setState(byte[] state) {
    
    	}
    
    	public void block() {
    	}
    
    	public void suspect(Address address) {
    	}
    
    	public void viewAccepted(View view) {
    		System.out.println("A node has appeared or disappeared, got a new view: " + view);
    		for (Address a : view.getMembers()) {
    			System.out.println("Member address " + a);
    		}
    	}
    
    	public static void main(String [] args) throws Exception {
    		JGroupStart app=new JGroupStart();
    	}
    }


The class contains a main method so we can start it. After starting, a JGroups server - a node - in our network:

    
    -------------------------------------------------------
    GMS: address is 172.168.11.109:1999
    -------------------------------------------------------
    A node has appeared or disappeared, got a new view: [172.168.11.109:1999|0] [172.168.11.109:1999]
    Member address 172.168.11.109:1999
    JGroups cluster is gestart


To send a message over a channel, you can use the following code:

    
    Message m = new Message();
    		m.setObject("Hello world");
    ch.send(m);


The setObject method accepts any Serializable class, in this case I just sent a simple String. All other nodes will receive this message:

_Messsage received: Hello world_

Allthough simple as that seems, the concept is powerful. As said, nodes discover eachother automatically. When a node crashes or disappears, other nodes are notified automatically. Naturally there are much more advanced examples then what I listed above. On the JGroups site there's a article how to set up [A simple clustered task distribution system](http://www.jgroups.org/taskdistribution.html).
Furthermore, [JBoss](http://www.jboss.org/projects) 5.0GA contains a Cache: [JBoss Cache](http://www.jboss.org/jbosscache). The distributed cache is built on top of JGroups. Using the JBoss Cache, JBoss can run distributed on multiple servers - this means if one server crashes or goes down for maintaince, another server takes over. Users or visitors of your site won't even notice - except that the whole site might be a bit slower.
Of course the cache can be used outsite JBoss too. JBoss cache can be used [standalone](http://www.jboss.org/jbosscache), allowing any Java application - standalone or not - to take advantage of this nice powerful open source technology.



* * *





