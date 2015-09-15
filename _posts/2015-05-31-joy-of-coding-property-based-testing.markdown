---
author: admin
comments: true
date: 2015-05-31 18:49:26+00:00
layout: post
slug: joy-of-coding-property-based-testing
title: Joy of coding, property-based testing
wordpress_id: 706
tags:
- haskell
- joyofcoding
- testing
---

Afgelopen vrijdag heb ik [Joy of Coding](http://joyofcoding.org/) bezocht, een conferentie voor programmeurs. Ik wilde met name John Hughes horen, onder meer bekend van de paper '[Why functional programming matters](http://www.cse.chalmers.se/~rjmh/Papers/whyfp.html)' (uit 1984 !). In dit artikel een verslag van zijn sessie over property-based testing, **[Joy of Testing](/2015/05/joy-of-coding-property-based-testing/)**.
<!-- more -->
Bij Rotterdam cs was niet moeilijk om de juiste bus naar de conferentie te vinden, andere conferentiebezoekers waren makkelijk bij een bushalte te herkennen.

Plaats van conferentie, de [Van Nelle Fabriek](http://www.vannellefabriek.com/), staat op de lijst van monumenten van Unesco. Het terrein ziet van buitenkant indrukwekkend uit en van binnen geven de vele ramen en hoge wanden hetzelfde ruimtelijke gevoel dat het arbeiders begin 20e eeuw moest geven.
's Ochtends ging ik naar [Joy of Testing](http://joyofcoding.org/#joy-of-testing) toe van [John Hughes](http://www.cse.chalmers.se/~rjmh/). De spreker introduceerde property-based testing in een [paper](http://www.cse.chalmers.se/~rjmh/QuickCheck/), met de bijbehorende software [QuickCheck](https://wiki.haskell.org/Introduction_to_QuickCheck1).
Property-based testing begint met schrijven van een specificatie van verwacht gedrag van software. Aan de hand van de specificatie worden vervolgens software uitgevoerd met zoveel mogelijk varianten van input-data. Ofwel, in plaats van met enkele testgevallen te testen wordt de software getest met miljoenen of miljarden willekeurige testgevallen. Dat lijkt misschien onvoorstelbaar, maar computers van nu snel genoeg om al die testgevallen te genereren.
Aan de hand van een, op eerste gezicht correcte implementatie van een queue in C, demonstreerde hij hoe via property-based testing fouten in die implementatie gevonden konden worden. Hij gebruikte hiervoor [Quviq](http://quviq.com/), een commerciële variant van QuickCheck die wat makkelijker samen met C te gebruiken is.
Verder vertelde hij hoe propery-based testing werd gebruikt om software te testen, die embedded zou worden in nieuwe auto's van Volvo. Aan de hand van specificaties werd ook software die door een _derde partij__en_ geschreven was getest. Een voorbeeld was een fout die gevonden werd in de software die de communicatie tussen verschillende onderdelen van de auto moest verdelen, een soort centrale messagebus. Door een obscure fout konden soms berichten met een lage prioriteit een hoge prioriteit krijgen. Wat zou kunnen veroorzaken dat een signaal naar de airbag tijdens een botsing minder prioriteit zou krijgen dan een signaal van de volumeknop.
Dat was ook het opmerkelijkste wat ik hoorde: dat property-based testing werd gebruikt werd voor wat vaak _integratie- __of acceptatietesten_ wordt genoemd. Ik stel me voor dat je in plaats van met [JBehave](http://jbehave.org/), [FitNesse](http://www.fitnesse.org/) of soortgelijke tools testspecificaties combineert met enkele tabellen aan testdata, voer je je testen uit met miljoenen datapoints. De property-testing library, [QuickCheck](https://wiki.haskell.org/Introduction_to_QuickCheck) of de vele clones en ports zoals [ScalaCheck](https://www.scalacheck.org/) of [junit-quickcheck](https://github.com/pholser/junit-quickcheck) filteren vervolgens de testgevallen eruit die ervoor zorgen dat je software niet werkt zoals gespecificeerd.

's Middags was er ook een workshop met property based testing. Deze heb ik niet bezocht omdat ik een andere parallelle sessie heb bezocht. De source-code van de workshop [online](https://github.com/qwaneu/property-based-tutorial), dankzij [fpcomplete](https://www.fpcomplete.com/ide?git=https://github.com/qwaneu/property-based-tutorial.git) hoef ik niet eens een ide te installeren, maar zonder opgaven heb je daar toch niet zo veel aan.

Binnenkort vervolg van dit artikel, met verslag van andere interessante sessies die ik heb bezocht, zoals [The joy of debugging ourselves](http://joyofcoding.org/#the-joy-of-debugging-ourselves), van Laurent Bossavit en de buitengewoon leerzame [Excercises in programming style](http://joyofcoding.org/#exercises-in-programming-style) van Crista Lopes.
