---
author: admin
comments: true
date: 2009-03-15 14:09:16+00:00
layout: post
slug: false-sense-of-security-in-https
title: False sense of security in https
wordpress_id: 121
categories:
- Various
tags:
- security
---

Like most Internet users, I use https a lot. Whenever I login to a, say, my bank, Firefox shows a nice picture of the bank and a message the communication is secured and authorized. Should for any reason the communication between my computer and the bank being intercepted, I should get a security warning. That way I should be assured, I am communication with the bank and not with a [phishing ](http://www.xs4all.nl/veiligheid/phishing/)site.
![https-example1](/wp-content/uploads/2009/03/https-example1.jpg)

Few people realize even when you make certain you don't ignore any security warnings there's still a chance the communication is compromised: when the computer you're using is itself compromised by, for example, a sophisticated virus.

A sophisticated computer virus or hacker could install software on the computer that changes both the DNS settings of the computer and changes the root-certificates of the browser.
DNS is used by your own computer to 'know' what particular ip-address and server it should communicate to.  The computer asks the DNS-server of your provider (like XS4all, AOL) to translate www.myexample.com to an address like 192.168.33.55. A popular metaphor for DNS is the 'yellow pages' or 'telephone directory'.
The address of the DNS server itself are usually set by you're provider, but a virus or hacker could change them. That way, you could be redirected to a physing site, even if webbrowsers should www.myexample.com.

Far fetched? A few months ago there was a virus that would [change dns-settings](http://www.f-secure.com/v-descs/dnschang.shtml) on the computer that it infected. The virus was infecting the computers in the students-flat I lived a few year ago. [Microsoft ](http://support.microsoft.com/kb/827315)has a page on the same subject too and I found a [few](http://forums.whatthetech.com/Hijack_Logs_Unable_change_DNS_servers_t97718.html) [forum ](http://www.technologyquestions.com/technology/889548-post4.html)postings.

If the DNS settings are changed only, you would still get a https warning when you login to site that's secured using https. However, what if a hacker of virus would also take over your browser and change the root-certicates? A bit harde, but certainly not impossible. That way, the webrowser will display no security warning, eventhough you're communicating with a con site.

Fortunately, all banks in the Netherlands still require an extern device while doing any money transfers, payments or other sensitive operations. [Rabobank ](http://www.rabobank.nl/particulieren/)uses requires a [Random Reader](http://www.rabobank.nl/particulieren/servicemenu/toegankelijkheid/moeite_met_zien/random_reader_comfort/) that generates a number you have to enter manually, [ING (formerly postbank)](http://www.ing.nl/particulier/) requires you to enter a number you receive at your [mobile phone](http://www.ing.nl/zakelijk/klantenservice/veelgestelde-vragen/internetbankieren/internetbankieren/tan-codes/algemeen/index.aspx?faquri=tcm:7-21922).
The random reader doesn't have any external interface (you have to enter the data manually) so hacking that device is virtually impossible. The only way would be breaking into someone's house and replacing it with your own random reader.
As said ING requires you to enter a number you receive via you're cell-phone. A modern cell-phone or mobile-phone is connected to the internet, and installing software is possible on many modern phones. That way, a mobile phone _could _be compromised. Using a sophisticated combination of a hacked computer and a hacked mobile phone, a hacker could get someone to transfer money to his own bank account. Hard, but not entirely impossible.

Final word, I mention two banks in the above example. My article however, is not limited to banking sites, but to any site that uses https or https in combination with sms-verification using a cell-phone.
