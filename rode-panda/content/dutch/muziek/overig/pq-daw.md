---
title: "PQ DAW"
translationKey: "pqdaw"

date: 2023-02-25
ongoing: true

thumb: pq_daw.webp
thumb_bg: '#FEFEFE'
resize: 2

color: 'blue'

official: "https://github.com/pandaqi/pq-daw"

layoutDir: 'vertical'

categories: ["muziek", "programmeren"]
tags: ["website"]
---

_Pandaqi DAW_ is een tool die ik schreef voor mijn educatieve tutorials website. Het imiteert een volledige "Digital Audio Workstation": software om professionele muziek mee op te nemen en te mixen. En dat volledig in je browser!

Zie het in actie in de cursus over [Music Mixing](https://pandaqi.com/tutorials/audio/music-mixing/)

De algemene functionaliteit is hetzelfde als dat van een DAW.

* **Tracks**: je kunt verschillende lagen laten zien, opnemen, verplaatsen en editen
* **Effecten**: je kunt allerlei effecten toepassen (zoals galm, ruis, delay, frequenties aanpassen met een equalizer, ...)
* **Controls**: je krijgt de standaard knoppen voor volume, panning, ...
* **Automation**: je kunt elke eigenschap animeren ("automaten") over tijd

Het gebruikt standaard web technologieën (Canvas, JavaScript en Web Audio API). Browsers zijn enorm krachtig dezer dagen. Daarnaast probeer ik klein en flexibel te blijven, zodat ik zoveel mogelijk browsers kan ondersteunen (met minimale laadtijd).

Dit project begon origineel als een simpele manier om de cursus meer interactief en praktisch te maken. Over tijd liep het een beetje uit de hand, totdat ik een systeem had dat één stap verwijderd is van professionele software.

(Toegegeven, het is een _grote_ stap verwijderd. Want het was nooit mijn bedoeling om volledige mix software te maken. Ik wilde een systeem om lezers meteen te laten _spelen_ met de dingen die ik uitleg, in hun browser, geen opzet nodig.)

Ik heb de tool _open source_ gemaakt. De kans dat anderen precies zo'n systeem nodig hebben is klein. (Want het is dus gemaakt voor mijn specifieke doeleinden.) Maar ik weet zeker dat de code erachter, zoals hoe je bepaalde effecten simuleert, interessant zal zijn voor iedereen die met dezelfde technologie werkt.