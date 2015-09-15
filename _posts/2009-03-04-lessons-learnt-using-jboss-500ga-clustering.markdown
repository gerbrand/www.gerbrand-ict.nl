---
author: admin
comments: true
date: 2009-03-04 21:55:56+00:00
layout: post
slug: lessons-learnt-using-jboss-500ga-clustering
title: Lessons learnt using JBoss 5 clustering
wordpress_id: 91

tags:
- java
- jboss
---

Last week I spent some time getting clustering to work using JBoss 5.0.0 GA. I made a few mistakes and I thought I share them - even though they were rather obvious:



	
  1. In JBoss you have have a few standard configurations - 	limited, default, all . I tried to get clustering to work on the 	default configuration. I installed the pojocache, but then I had I 	had some problems getting @Replicated annotation to work (see also 	the posting below). After some [Google'ing 	jboss errors](http://www.jboss.org/index.html?module=bb&op=viewtopic&t=146826) something like AOP seemed have to be enabled.The 	Pojocache I got working, by downloading and adding the libraries 	myself. Then I found these libraries were already included in the 	all configuration.
Still, the @Replicateble tag didn't work. Just recently someone replied at my (slightly too frustrated) post [at JBoss forum](http://www.jboss.org/index.html?module=bb&op=viewtopic&p=4223159#4223159).
The following options still need to be added to the **run.sh** or** run.bat **in the bin directory:

    
    set JAVA_OPTS=-Dsun.rmi.dgc.server.gcInterval=3600000 -Dsun.lang.ClassLoader.allowArraySyntax=true -Djboss.platform.mbeanserver  -javaagent:%JBOSS_HOME%/server/all/deployers/jboss-aop-jboss5.deployer/pluggable-instrumentor.jar %JAVA_OPTS%


I haven't tried the above option yet - I used the Serializable interface, although that's a whole lot less powerful of course.
Note you can use [multiple java agents](http://javahowto.blogspot.com/2006/07/javaagent-option.html), so in case you use another agent like [javarebel](http://www.zeroturnaround.com/javarebel/), that shouldn't be a problem.

	
  2. A nice thing in JBoss seemed the PojoCache. To get it to 	work, you'll have to create a pojocache-service.xml (see [PojoCache 	manual](http://www.jboss.org/file-access/default/members/jbosscache/freezone/docs/2.0.0.GA/PojoCache/en/html/configuration.html)) and put the file in the serveralldeploy directory of 	your jboss-directory. After that you can reference the PojoCache 	using the following code:

    
    MBeanServer server = MBeanServerLocator.locateJBoss();
    
    ObjectName on = null;
    
    try {
    
    on = new ObjectName("jboss.cache:service=PojoCache");
    
    } catch (MalformedObjectNameException e) {
    
    throw new ContinuAansturingException("Cache service niet correct geconfigureerd.", e);
    
    }
    
    PojoCacheJmxWrapperMBean cacheWrapper = (PojoCacheJmxWrapperMBean)
    
    MBeanServerInvocationHandler.newProxyInstance(server, on,
    
    PojoCacheJmxWrapperMBean.class, false);
    
    PojoCache cache = cacheWrapper.getPojoCache();
    


	
  3. Clustering 	Session beans -I needed a share state, for the time the application 	was running (no need for persistence). Using a clustered cache 	seemed perfect for that. I decided to use the @Clustered annotation, 	that works out-of-the-box, I do not have to configure the 	pojocache. Due to my lack of EJB-knowledge and hindsight, I 	thought to annotate a Stateful bean - seemed reasonable to get a 	shared state. As people with slightly more EJB experience known - 	a Stateful bean isn't meant for that! The state is only kept inside 	a (user) transaction. As soon as the transaction is commit'ed or 	rolled back, the state is lost.
Cost my some time before I 	figured that out, after a few null references.

	
  4. Setting up the right node id and listening to right network interface - For nodes to discover each other, they have to listen to a network interface that connects them to eachother. By default JBoss will listen to localhost, so only nodes running on the same server will be detected. Naturally, you normally don't nodes to discover eachother. This is possible by adding the following command-line arguments:_ –b **10.0.0.53**_ (where you can replace** 10.0.0.53** with the correct network -address)
Furthermore, all nodes in the network have to have a unique nodeid. This can be set by the following command-line argument: _-Djboss.messaging.ServerPeerID=**2 **_where you can replace the 2 with any unique identifier.
As listed above, you need the 'all' configuration, or a copy there of. So an example of complete command to run jboss on windows would be:

    
    run -c all –b 10.0.0.53 -Djboss.messaging.ServerPeerID=2





All in all, having a good book sooner would have saved me quite some time before. I now have the very recently released [JBoss in Action](http://www.amazon.com/gp/product/1933988029?ie=UTF8&tag=geonic-20&linkCode=as2&camp=1789&creative=9325&creativeASIN=1933988029). The book helps a lot in understanding and using JBoss because the JBoss site is seriously lacking in good documentation. Maybe that's the price you pay for using open-source: the only way Redhat can make money on JBoss is on support.



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
