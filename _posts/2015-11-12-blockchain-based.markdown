---
layout: post
title:  "Blockchain based"
date:   2015-11-12 12:00:00
---

Bitcoin's only some weird digital money, interesting to [cypherpunks](https://en.wikipedia.org/wiki/Cypherpunk) only? With nearly all financial institutions [investigating or investing](http://www.ibtimes.co.uk/codename-citicoin-banking-giant-built-three-internal-blockchains-test-bitcoin-technology-1508759) in Bitcoin-related technologies I guess the answer is [obvious](http://www.forbes.com/sites/mikemontgomery/2015/09/15/bitcoin-is-only-the-beginning-for-blockchain-technology/). But does Bitcoin have any value to you, if you're not into the banking? Certainly: a lot of innovative products work on top of Bitcoin or use the blockchain in another way. In this article I'll list some recognizable problems, from Bicycle-renting to digitally signing documents to selling the electricity your windmill has generated to your neighbor, and solutions on the blockchain.

<p aligh="center"><a href="{{site.baseurl}}/2015/11/blockchain-based"><img src="{{site.baseurl}}/assets/Built-on-bc.png" align="center" title="Built on Blockchain
Commons Attribution ShareAlike 4.0 license, original file:: Built-on-bc.odg" alt="Built on Blockchain"></a></p>
<!-- Source-file: http://www.gerbrand-ict.nl/assets/Built-on-bc.odg -->

<!-- more -->

# Stock-exchange
Do you want to create your own coin? Issue shares or other kind of securities for your company, association, trust, foundation, e.g.? Or do you want to buy something like a 3d-printer with multiple people, sharing the costs? Then you'll at least need a registry of who ones what share for what valuation. Organizations trust their accountant or treasurer to maintain something like an Excel-document with the overview of shares, but that's pretty expensive and/or cumbersome. Also you'll have to trust that person in maintaining your registry properly.
Can we do better? Try
[Counterparty](http://counterparty.io/why-counterparty/)! Counterparty works on top of the Bitcoin-network, and extends its functionality.
<img src="{{site.baseurl}}/assets/counterparty.io-stage-home.png" width="350px">

You can issue any security, bond, coin, coupon using Counterparty to replace your shared Excel. So you'll have all the power of a stock-exchange, but with very low costs.

# Rent-a-thing
Let me start with an Dutch phenomenon to explain: in the Netherlands you can bikes at train stations via [OV-fiets](http://www.ov-fiets.nl). Using an electronic card you can unlock a box to rent a single bike. When you're done cycling you can return the bike again. Large stations usually have a few people repairing the bicycles which will swipe the card for you, but during nights of smaller stations run completely autonomous. At the end of each month you'll be billed for amount of hours you've rent a bike.g into much details: if you'd compare Bitcoin with a giant shared Excel, Ethereum would be giant shared Visual basic program, allowing functionality that goes far beyond assets and transactions.
The essence of Slock.it is their electronic locks, which someone can operate via a mobile phone.
<p><img src="{{site.baseurl}}/assets/slock-powr-switch.png" width="180px"></p>
The locks can be attached to anything you'd want to rent, or which contains the thing you'd want to rent, closet, barn, garage, room. Like companies listed here, Slock.it is just starting. They expect to be able to start selling [their product in 2016](http://www.ibtimes.co.uk/ethereum-based-slock-reveals-first-ever-lock-opened-money-1527014).

# Proof on the internet
If you want to legally proof the existence of any document at a certain moment, like a contract or an story or just an email with a simple notice, numerous services exist to digitally sign your document, like [Silanis' E-Signature](https://www.silanis.com/),  [Adobo's eSign services](https://acrobat.adobe.com/us/en/documents/esignatures.html) or lesser known Dutch companies like [RPost](http://www.rpost.nl/digitale-handtekening/) or [Xolphin's Digitale Handtekeningen](https://www.digitalehandtekeningen.nl/).

Their main disadvantage: you'll have to trust a company to properly create and maintain your digital signature. Bitcoin was originally created to transfer and store currency over the internet without relying on a central bank. [Proof of Existence allows](https://www.proofofexistence.com/) you to directly digitally sign a document on Bitcoin's network, like this person who [registered his daughters birth on the blockchain](http://www.coindesk.com/meet-the-dad-who-registered-his-daughters-birth-on-the-blockchain/) without needing a notary or a civil register.  The actual document can be stored anywhere, like your own homepage or on a disk stored in a save. On the Bitcoin only a hash *digital signature* is stored, proving to anyone the document isn't altered *and* existed since a certain moment. There's no third party to trust. As long as enough people still use (and value) Bitcoin, which could as well be only you and the persons for which your document has value, your signature exists.

# Register of things
I assume you know the value of a cadaster like the [Dutch Kadaster](https://www.kadaster.nl), a registry of companies like the [Dutch KvK](http://www.kvk.nl/) or [British Chambers of Commerce](http://www.britishchambers.org.uk/) or a registry of cars like [RDW](https://www.rdw.nl). Their primary function is proving that a certain document existed at a certain moment, which in turn proofs ownership of something. Although reliable in at least the Netherlands, these institutions are quite costly, even for just accessing their data. Can we use the blockchain for that, or even Bitcoin? As shown above, you can use Bitcoin to proof existence of documents, which might as well be description of a parcel of land, a founding document or vehicle registration.
 <a href="http://bitcoinist.net/factoids-tokens-drive-factom-protocol"><img src="http://bitcoinist.net/wp-content/uploads/2015/03/Factoids_article_1_Bitcoinist-300x163.png" align="right" hspace="20px" title="Factom, by Bitcoinist"></a>
Unfortunately, Bitcoin is not suited for signing dozens, let alone thousands of documents per second. Enter [Factom](http://factom.org/). Factom stores a checksum of the document on a *side-blockchain*, [that's synced with Bitcoin](http://www.factom.com/faqs/). This allows Factom to be easier to use and much faster.
Factom offers an API as well as professional services. They're raising money while I'm writing this article. I haven't invested money yet, but I've noticed [reached their target](https://bnktothefuture.com/pitches/2087/_factom-inc-bringing-the-blockchain-to-business.html) and I've no doubt the on million Euro money is better spent than over [**three hundred million Euro** ](http://www.mondi.nl/landendossier/griekenland/onduidelijkheid-rond-grieks-kadaster/page18__297.php) Greece has spent to set up their [cadastre](https://e-justice.europa.eu/content_land_registers_in_member_states-109-el-nl.do).

# Peer to peer electricity
<p>More and more homes have solar panels on their rooftops so they can use the sun to generate extra electricity.<a href="https://en.wikipedia.org/wiki/Photovoltaic_system"> <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/8e/Solar_panels_on_house_roof.jpg/1024px-Solar_panels_on_house_roof.jpg" height="150" align="left" hspace="20px"></a></p>
Windmills not only have to be placed at the country side or at <a href="http://www.tki-windopzee.nl">sea</a> but may <a href="http://www.eazwind.com">appear on rooftops in your neighbourhood</a> too.

<p>If you can use that energy directly that'll save you quite some money on your electricity bill, but what if you can't use that energy? In many countries you'll get a minor fee from your electricity utility company for feeding electricity back into the grid, but that fee is <a href="http://www.germanenergyblog.de/?page_id=16379">rapidly declining</a>. What if you could just sell or buy your energy to someone else directly? Or could you combine the solar panels of the whole neighborhood of like-minded people into <a href="https://www.linkedin.com/pulse/ethereum-enabled-community-energy-market-sharing-economy-john-lilic">one giant pv-powerplant</a>?</p>

[Vandebron](http://www.vandebron.nl) was the first Dutch company to give you the possibility to buy directly from producers, but already appears old-fashioned. Companies like [Mosaic](https://joinmosaic.com/), [Piclo](https://www.openutility.com/piclo/) are one of the many upcoming companies that allow you to sell or buy energy directly from other producing consumers ['''prosumers'''](http://blog.abundanceinvestment.com/2013/01/the-revolutionary-rise-of-the-energy-prosumer/).
But could you trade electricity and have a stable grid *without* any overseeing company? Although in very early stages, as [regulators have to catch up](http://www.cityam.com/228153/uber-electricity-could-be-just-around-corner-if-regulators-get-out-way), some systems to have a self-mananged grid are in development, like [Consensys'](https://consensys.net) [TransActiveGrid](http://transactivegrid.org) and [Farmshare](https://consensys.net/static/Farm.pdf).
In countries like the Netherlands, were gas and coal power is abundant these kind of self-regulating grids seem rather superfluous. In other  countries, including developed countries like Belgium or parts of the US, the grid is already up to its max. Gigantic capital investments would be needed to keep the grid stable if being used in the traditional way. It's in these places an advanced, self-regulating and -managing grid could be great cost savers as well enabler for transformation of the energy-market.

Big changes are to be expected!
