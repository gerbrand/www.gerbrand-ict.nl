---
author: admin
comments: true
date: 2011-02-19 16:19:01+00:00
layout: post
slug: wicket-exception-when-using-wrong-order-in-addcomponent
title: Wicket Exception when using wrong order in addComponent
wordpress_id: 467

tags:
- java
- wicket
---

Today I working on a application that uses the [Wicket framework](http://wicket.apache.org/). I was plagued with the following Exception:


    WicketMessage: org.apache.wicket.WicketRuntimeException: component myForm:myTable:editor not found on page nl.gerbrand-ict.gui.HomePage[id = 4], listener interface = [RequestListenerInterface name=IActivePageBehaviorListener, method=public abstract void org.apache.wicket.behavior.IBehaviorListener.onRequest()]

    Root cause:

    ...


In place of the ... there was a full stacktrace, which information that's not not relevant for this posting.

Turned out the solution was pretty simple, but the cause isn't that easy to find and is quite a good example how some design decisions in Wicket aren't considered as clean.

<!-- more -->

I'm using Ajax-features of Wicket extensively.
I was creating a table, which contained editable fields (AjaxEdiableLabel). This would allow the user to click on a field in the table, to edit the content.
Somewhere I had the following code:


    target.addComponent(item);
    if .. needed .. {
    target.addComponent(myTable.this);
    ... make item invisible
    }
    super.onSubmit(target);


The super.onSubmit belonged, in this case, to AjaxEditableLabel. I found out the super.onSubmit() would call _target.addComponent(this);_ to update the editable label itself. As you could see, in my code I'm telling wicket to update the component that's the parent of the editable label also.

In this case, the code caused wicket to first update the parent-panel, which in this case makes the child-component invisible. Then the wicket tries to redraw the child-component, which is then invisible. That will trigger the above error.
Unfortunately, solving this error isn't quite easy in all cases. Especially when you'd use a AjaxSelfUpdatingBehaviour you can have little control on the redrawing order.

Fortunately I found [a good tip on the wicket mailing list](http://apache-wicket.1842946.n4.nabble.com/WicketRuntimeException-component-not-found-on-page-td3055902.html) to get rid of the exception. Add the following code your Wicketapplication class (the class that extends org.apache.wicket.protocol.http.WebApplication):


        @Override
        protected IRequestCycleProcessor newRequestCycleProcessor() {
        	//Tip from http://apache-wicket.1842946.n4.nabble.com/WicketRuntimeException-component-not-found-on-page-td3055902.html
        	return new WebRequestCycleProcessor(){
        		public IRequestTarget resolve(final RequestCycle requestCycle,
        				final RequestParameters requestParameters) {
        	        try {
        	            return super.resolve(requestCycle, requestParameters);
        	        } catch (InvalidUrlException e) {
        	            if (requestCycle.getRequest().getURL().contains("LinkListener") || requestCycle.getRequest().getURL().contains("BehaviorListener")) {
        	            	log.warn("Couldn't process event, is ignored because of: "+e.getMessage());
                            //ignore exception
        	                return new PageRequestTarget(requestCycle.getRequest().getPage());
        	            } else {
                            //normal operation
        	            	throw e;
        	            }
        	        }
        	    }

        	};
        }


The above code will ignore all of the exception that occur when wicket tries to do something with an component that's no longer available because of an ajax-update. Of course this fix isn't very nice, hopefully later versions of Wicket fix the error all-together when Ajax-support is improved. For now, this seems the best solution.
