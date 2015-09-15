---
author: admin
comments: true
date: 2011-09-20 21:58:35+00:00
layout: post
slug: diginotar
title: Diginotar
wordpress_id: 572

---

I just updated my (virtual) server, on which this weblog is running too. The update log was rather interesting this time:

    
    Setting up tzdata-java (2011j-0ubuntu0.11.04) ...
    Setting up ca-certificates (20090814+nmu2ubuntu0.1) ...
    Updating certificates in /etc/ssl/certs... WARNING: Skipping duplicate certificate brasil.gov.br.pem
    0 added, 1 removed; done.
    Running hooks in /etc/ca-certificates/update.d....
    updating keystore /etc/ssl/certs/java/cacerts...
      does not exist: /etc/ssl/certs/DigiNotar_Root_CA.pem
    done.


For those living outside the Netherlands: DigiNotar was a issuer of ssl and pki certificates, similor to Verisign. Their main customer was the Dutch government. Turned out DigiNotar was hacked by Iranian hackers, but not only that, the hack happened a few months ago but they decided not to inform their clients. In the mean time, Dutch governmental communication wasn't as secure as you might hope.
Of course the Dutch government did perform audits on DigiNotar - sort of, they outsourced the audit to the great company [PwC](http://www.pwc.com/), who verified that all of their procedures were correctly written down in Word documents with proper headings and jargon that pleases business consultants (quote from the [DigiNotar](http://www.diginotar.nl/OverDigiNotar/Certificeringen/tabid/1259/Default.aspx) website: '_[Certificering ETSI](http://www.diginotar.nl/LinkClick.aspx?fileticket=ARFojxrOqKY%3d&tabid=1259) door PricewaterhouseCoopers  (november 2010 - november 2013) _') Of course they didn't look at the [actual software and IT security](http://www.computable.nl/artikel/ict_topics/overheid/4140101/1277202/om-stelt-onderzoek-in-naar-diginotar.html) - why would anyone care about such technical details?

For more information, I found the following [timeline](http://uscyberlabs.com/blog/2011/09/12/timeline-diginotar-ssl-hack/).
