---
layout: post
title:  "Upgraded Jekyll to version 3"
date:   2016-08-25 11:04:38 +0200
categories: jekyll update
---
I hadn't updated my homepage for quite a long time, having the idea to write a homepage. As a start I've upgraded from Jekyll 2 to Jekyll 3. I regenerated the page and copied plugins, settings and posts.  Not much seems to be broken. Even plugins I used are working. Since it's just a blog, I'll leave it as is. The welcome page contains a highlighter. I've rewritten (probably broken) the sample ruby code to javascript

{% highlight javascript %}
const print_hi = function(name) {console.log('Hi,', name)}
print_hi('world')
//=> prints 'Hi world' to console.
{% endhighlight %}

Check out the [Jekyll docs][jekyll-docs] for more info on how to get the most out of Jekyll. File all bugs/feature requests at [Jekyll’s GitHub repo][jekyll-gh]. If you have questions, you can ask them on [Jekyll Talk][jekyll-talk].

[jekyll-docs]: http://jekyllrb.com/docs/home
[jekyll-gh]:   https://github.com/jekyll/jekyll
[jekyll-talk]: https://talk.jekyllrb.com/
