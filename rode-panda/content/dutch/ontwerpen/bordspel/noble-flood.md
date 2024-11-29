---
title: "Noble Flood"
translationKey: "noble-flood"
date: 2025-05-26

thumb: noble_flood.webp
color: "pink"

official: "https://pandaqi.com/chiptales/bet/noble-flood/"
devlog: https://pandaqi.com/blog/boardgames/chiptales/noble-flood/

categories: ["ontwerpen", "programmeren"]
tags: ["bordspel", "website"]
---

_Noble Flood_ is een kaartspel over het vervullen van poker-achtige "uitdagingen" (zoals "Three of a Kind" of een "Pair") terwijl je kaarten speelt naar een gedeeld bord.

Het kan worden gespeeld met een standaard deck, als je er al eentje hebt liggen. In dat geval hoef je alleen de paar "Contractkaarten" (met de uitdagingen) te printen.

Dat was mijn eerste doel: proberen meer spellen te maken waarbij mensen bestaand materiaal kunnen hergebruiken, zolang dat materiaal is dat de meeste mensen wel hebben liggen.

Mijn tweede doel was: veel probleempjes oplossen die ik vaak ervaarde bij poker-achtige spellen. Door je uitdaging op een kaart te zetten, die je zelf uitkiest, kon ik een heel interessant kaartspel maken waarbij mensen _niet_ hoeven te bluffen, of geluk te hebben met hun kaarten, of alle verschillende poker-combinaties te onthouden.

## Bijzonderheden

Dit was het eerste spel waarvan ik kon zeggen: "als je al een standaarddeck kaarten hebt liggen, gebruik dat om te spelen!"

Net zoals Pyrrameds (een ander recent spel) begon dit project met een _simulatie_. Ik programmeerde de logica voor een ronde/spel, en vroeg de computer toen om 10,000 potjes te spelen en statistieken bij te houden.

In eerste instantie waren de meeste contracten "veel te makkelijk" of "veel te moeilijk". Bijvoorbeeld, een ronde heeft al snel 20 gespeelde kaarten, wat de kans op "een paar van dezelfde getallen" praktisch 100% maakt.

Ik had dit verwacht; dat is waarom ik met die simulatie begon.

Na het aanpassen van getallen, herschrijven van wat regels, verplaatsen van wat ideeën ... was het spel gebalanceerd. (Voordat ik ooit de eerste playtest had gedaan!) Nu kon je _altijd_ proberen punten te scoren, zelfs als je een "slechte hand" had of een van de moeilijkere contracten moest kiezen.

Dit alles programmeren was een _enorme uitdaging_ en leerde mij veel.

Hoe check je (efficiënt), in een 2D grid van kaarten, of iemand een Royal Flush heeft gehaald? Vijf aangrenzende kaarten, met oplopende getallen, in dezelfde soort, die eindigt in de hoogste kaart in het spel? En hoe doe je dat voor 10 andere contracten met kleine aanpassingen op die vereisten?

Maar dankzij dit gegoochel met getallen, ondersteund door duizenden potjes, werd het spel precies zo goed als ik had verwacht.