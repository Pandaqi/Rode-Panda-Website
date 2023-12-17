---
title: "Rolling in the Sheepe"
translationKey: "sheepe"
date: 2022-01-07

thumb: sheepe.webp
color: 'green'
resize: 1
layoutDir: 'vertical'

official: "https://pandaqi.com/rolling-in-the-sheepe"
devlog: https://pandaqi.com/blog/videogames/one-week-games/devlog-rolling-in-the-sheepe

categories: ["programmeren", "ontwerpen"]
tags: ["computerspel"]
---

_Rolling in the Sheepe_ is een lokaal multiplayer spel (voor 1&ndash;6 spelers) waarin je probeert als eerste over de finish te rollen!

Het begon als een simpel idee: maak een route van links naar rechts, spelers kunnen alleen _rollen_, probeer als eerste te finishen! Maar zoals altijd bij mij, vond ik al snel overduidelijke problemen hiermee, en leuke manieren om het te verbeteren.

(Als je alleen van links naar rechts rolt, is het haast onmogelijk om alle spelers + de weg die gaat komen te laten zien op één scherm. En als iemand een flinke voorsprong heeft, is het nog erger, en heel demotiverend voor de spelers die achteraan hobbelen. Dat soort fouten.)

Dus het spel werd, tja, een _groter_ spel over schapen naar de finish rollen. Na een korte break van een maand om te kijken of ik zo'n simpel project wel zo groot wilde maken, besloot ik het tóch te doen, aangezien het al vrij ver was en nu al leuk was om te spelen.

## Bijzonderheden
Dit spel gebruikt _willekeurig gegenereerde routes_! Als je een nieuw spel start, bedenkt het jouw pad ter plekke. Het maakt nieuwe stukjes voorin als nodig, en vernietigt de oudste delen van het pad als iedereen daar voorbij is.

De meeste tijd ging dan ook in dit algoritme/systeem zitten. Het moest _snel_ zijn, _flexibel_ (zodat je niet elke keer toch exact hetzelfde pad krijgt, en het kan reageren op wat spelers doen), _mooi_ om te zien, en bovenal _correct_. (Geen doodlopende eindes, plekken waar je nooit uit kunt komen, etcetera.)

Het algoritme werd uiteindelijk zo sterk, dat ik een doorbraak had: we kunnen de _uitleg_ van het spel (zowel de basisregels als alle unieke powerups/obstakels) in de route zelf inbouwen!

Wanneer iets nieuws gaat verschijnen, plaats ik eventjes daarvoor alvast een plaatje om dit _uit te leggen_. Omdat ik de route ter plekke genereer, heb ik al deze informatie, en kan ik dus rekening houden met het feit dat de uitleg 10 seconden voor de toepassing moet komen! (En dat spelers er sowieso langs moeten rollen.)

Dit betekent dat je dus letterlijk dit spel kunt oppakken en spelen, ongeacht je ervaring met spelen, ongeacht of je überhaupt weet waarover het gaat. Want zelfs als een route 10 bijzondere powerups erin plaatst, worden die netjes uitgespreid en precies op het juiste moment uitgelegd.

Zoals je misschien merkt: ik ben trots op dit idee en vind het een geweldige manier om spellen uit te leggen aan nieuwe spelers. Ik ga het sowieso in mijn volgende spellen gebruiken.

**Opmerking**: Er zijn nog veel meer bijzonderheden aan dit spel. Voor zo'n simpel idee, werd het verrassend genoeg een spel dat mij constant nieuwe dingen leerde, misschien _juist_ omdat de basis zo simpel was. Maar dat staat allemaal in dat dagboek!