---
layout: post
title:  "Static website using Jekyll"
date:   2015-09-15 12:41:04
---

In my daily work I frequently use build-tools such as [Maven](http://maven.apache.org), [Sbt](http://www.scala-sbt.org/), [Meteor](https://www.meteor.com) (sigh) and version-control software such as Git.  Blogging on Wordpress always feels like a step back. My content is in a database with its own versioning control and can only be maintained and added by the Wordpress software itself. Wordpress and plugins are hard to maintain, the only way to update reasonable easy is by using the Wordpress software itself and let PHP overwrite files.

So today I moved my homepage to git, and I started using a static website generator. I didn't want to spent to much time on choosing the best static website generator. After all, using static files should give me more flexibility to change later on. I did want to import all my Wordpress-posts and pages. On [this website](https://www.staticgen.com/) I found a nice overview of static generators. Tried Hexo first as this one runs on Node and was in the top 4. Hexo works pretty nice. Wordpress import works reasonable well. However Hexo seems a bit Asian oriented, when using an unrecognized language such as Dutch, it switches to Chinese, specifically [Taiwan](https://en.wikipedia.org/wiki/Zh-TW). Not hard to fix - either add translations myself or update the default locale in the configuration, but still I decided to switch to the most popular static website-generator: [jekyll](http://jekyllrb.com)
<!-- more -->
I exported my original Wordpress site using Wordpress' export functionality. Fixed the export-xml by making links relative. After that I could convert the xml file to markdown files using [https://github.com/thomasf/exitwp](exitwp). To avoid a hassle, I just downloaded the complete wp-content/uploads dir as is so I didn't have to update any links to uploaded images or other files.

All imported pages got the catagory added to the url, and .html exension. This would make all urls different from my original wordpress-blog, which would probably result in a lot of 404s. Fortunately there's an easy fix, by adding the following in the `_config.yml` file.

``permalink: /:year/:month/:day/:title/``

Comments I had already hosted in [Disqus](https://www.disqus.com), so adding them was quite easy by adding the [universalcode](https://gerbrandsblog.disqus.com/admin/universalcode/) in the post.html template. The only minor change was a modification in the disqus_url to comments to load regardless of local domain:

``var disqus_url = 'https://www.functional-consulting.nl'+window.location.pathname;``

For more details, just look at my github repo.
