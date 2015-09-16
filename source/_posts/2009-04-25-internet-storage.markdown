---
author: admin
comments: true
date: 2009-04-25 13:53:25+02:00
layout: post
slug: internet-storage
title: Internet storage review
wordpress_id: 202
categories:
- Reviews
tags:
- cloud
---

A non-profit organization that's just starting up needed someway to share files and backup files. Mailing files and taking with them USB sticks and using the dvd-writer is a solution, but I guessed there should be an easier way: internet accessible storage. There are lots of companies providing that service, so that shouldn't be to hard.


My requirements were:



    
  * Easy access, including a windows client that automatically [synchronizes ](http://www.joelonsoftware.com/backIssues-2008-05.html)folders (directories) and files. Basically a 'network-drive', just as you would get when using a fileserver, using the same concepts of directories and files.
On the other hand, the service shouldn't be limited to Windows - in case someone wants to use a [Mac](http://www.apple.com/nl/mac/).

    
  * Reliable and secure access, all communication should be encrypted properly.

    
  * Ability to administer access rights, to limit access to directories and files.

    
  * Business-work-oriented  - 'music', 'video' and 'sharing pictures with your family' nor online backup should be the primary goal of the service.

    
  * Being fast and efficient - I don't like software that wastes time of the user by slowing down the computer and taking up resources.

    
  * Nice to have: Automatic versioning - just to be sure no files and modification get lost when two people work on a file at the same time. Of course the need for this functionally also depends on the synchronization mechanism of the internet drive.


Using a [search engine](http://www.google.nl) I found a few sites that offer online storage. I also found a few comparison/review articles, like [this site](http://danga.blogsome.com/category/online-storage/) and [this one](http://www.frankwatching.com/archive/2006/05/08/web-20-online-storage/).  Many of the services that have been reviewed as very promising a few years ago, are now offline.






    
  1. [ZumoDrive](http://zumodrive.com), I heard of [just recently](http://tomuse.com/zumodrive-free-web-storage-files-syncing-solutions/). Unlike most other services, ZumoDrive doesn't synchronise selected directories but rather provides (in Windows) a virtual drive that behaves mostly the same as a normal drive: you can even access the drive from the commandline. Conceptually this works quite easy. Files and directories can be shared as well to other ZumoDrive users via a smart synchronisation process, or as via a http link, to webusers. ZumoDrive supports versioning as well, previous versions of files are kept.
Zumodrive is still beta however. I had some rare occasions a file, including history got lost after a crash. There a frequent updates, so this problem might not occur anymore. Also, a disadvantage is that you have to start the zumodrive application to access your files, although you don't have to be online.  

[![zumodrivelogo](/wp-content/uploads/2009/04/zumodrivelogo.png)](http://zumodrive.com/)

    
  2. [Dropbox](https://www.getdropbox.com/): Very comparable to ZumoDrive, with a few exceptions. First, unlike ZumoDrive, in Windows you won't get an extra driveletter. Rather Dropbox [synchronizes a directory](http://paulstefanort.com/2009/02/17/dropbox-and-zumodrive-%E2%80%94-two-approaches-to-web-storage/), so when you've stored files on Dropbox, they won't be available to other computers immediately. Advantage of not having using a drive letter is, you're files will still be available even if you quite the dropbox application.  
More detailed comparison can be found on [Hacker News](http://news.ycombinator.com/item?id=438410) and [Newsome.Org](http://www.newsome.org/2009/02/zumodrive-vs-dropbox.shtml).
[![](https://www.getdropbox.com/static/images/dropbox_logo_home.png)](http://www.getdropbox.com)

    
  3. [Diino](http://www.diino.com): requested a trial. Lots of online space. The Java Client was very easy to install, using webstart. After that, setting up a backup job was very easy.  
Minor disadvantage, Diino doesn't have a free account.  

[![](http://www.diino.com/images/skins/default/logo.jpg?1242208000)](http://www.diino.com/)

    
  4. [IDrive](http://www.idrive.com/): This service integrates nicely in the windows explorer, so most of my requirements are fulfilled. Free account for up to 2GB. I noticed however, my computer got kind of slow when IDrive was integrated in windows. Apart from that, the backup service, works pretty good. You select directories you want to backup, and they'll be synchronized automatically.
[![](https://www.idrive.com/images/ide_logo.gif)](http://www.idrive.com/)

    
  5. [DriveHQ](http://www.drivehq.com): just like IDrive, the software provides a lot of features for backups. DriveHQ also provides a nice client to automatically synchronize folders. I've used the product for a while and my computer is still performing nicely even though I've 'shared' (scheduled for synchronization) a large directory. Minor disadvantage: the free edition shows a popup box every 50 mb, information that you won't have this dialog box when you have paid account.
DriveHQ doesn't seem to support versioning. However, if one (or two) users modify a file simultaneously at two different computers, a driveHQ will present a dialog box. Also, another disadvantage is the poor integration with Explorer: right mouse click won't give you the status of a file.
[![](http://www.drivehq.com/images/Logo/Common_logo.gif)](http://www.drivehq.com)

    
  6. [Egnyte](http://www.egnyte.com): very promising from what I read at the website. Egnyte supports everything I want, and they also have promising (and buzz word compliant) feature 'local cloud' . Although 'cloud' sounds advanced, it's basically software that sychronizes a folder on your local disk with the Egnyte shared storage, and also unlike other internet storage you can synchronize only one directly.A feature that does make Egnyte slightly better than average is the Webdav folder access. Webdav is a protocol for storing and loading documents, used amongst others by [MS-Sharepoint](http://www.microsoft.com/Sharepoint/default.mspx). That feature might allow egnyte to be a Sharepoint replacement, for at least part of the features.
Egnyte is little bit expensive maybe, but all good things have a price.
[![](http://www.egnyte.com/images/default/logo/logo_head.gif)](http://www.egnyte.com/)

    
  7. On [Skydrive ](http://skydrive.live.com/)of Microsoft, I found positive review (including interesting comments). As far from what I read, skydrive doesn't support versioning. I guess Microsoft wants business-users to use [Sharepoint](http://office.microsoft.com/nl-nl/sharepointserver/default.aspx) for that, allong with a old-fashioned fileserver.
[![windows-live-logo](/wp-content/uploads/2009/04/windows-live-logo.jpg)](http://skydrive.live.com/). Since I have a hotmail account, I could get a skydrive with little effort. I can upload files via a webbrowser, but I couldn't find how to synchronize files with a local folder/directory.

    
  8. [Box.net](http://www.box.net): cool-looking website, and it's a featured app on [linkedin](http://www.linkedin.com). However, box.net only provided webbased access.
[![](http://e3.boxcdn.net/img/sales/box_logo.gif)](http://www.box.net/)


[FilesAnywhere](http://www.filesanywhere.com/) I've tried too, or at least tried to try. Features look very nice. Unfortunately, the FilesAnywhere Desktop Client won't start. When I start I get consistently a Windows Application Error. Maybe a virusscanner I have, or a conflict with some other piece of software. Also the name **Omnidrive **rings a bell, so at least the product or company most be popular. However, at the moment, the website seems down. [Wikipedia clarifies](http://en.wikipedia.org/wiki/Omnidrive), apparently the company disappeared over night. Hopefully nobody relied on the service for a backup when the site went down.
**Conclusion**
Internet storage can be divided as follows: simple synchronization of directories for backup purposes and true internet storage that you can share with others and use as an alternative for a fileserver. At least ZumoDrive and TheDropbox are advantage enough to fall in the latter category.  

TheDropbox has a more advantage synchronization service with a better integration with Windows and supports versioning.
For a true internet drive, that you can share with others, I found **ZumoDrive **by the most advantaged. Only disadvantage, ZumoDrive is still in beta and slightly unstable. So for sharing files, Dropbox would be a good choice.  

If you want backup, there are countless synchronization services like IDrive and Dinno, and you're lokal internet provider like [KPN](http://zakelijk.kpn.com/business/meer-diensten/softwareonline/alle-software-online/op-kantoor-backup-online.htm) might have a good plan too.

