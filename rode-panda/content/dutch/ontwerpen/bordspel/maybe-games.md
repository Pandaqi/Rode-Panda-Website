---
title: "Maybe Games"
translationKey: "maybe-games"
date: 2025-04-26

thumb: maybe_games.webp
color: 'green'

official: "https://pandaqi.com/maybe-games/"
devlog: https://pandaqi.com/blog/boardgames/maybe-games/

resize: 2

categories: ["ontwerpen", "programmeren"]
tags: ["bordspel", "website"]
---

_Maybe Games_ is een verzameling van simpele familiespellen rondom hetzelfde kernmechanisme. Iets dat ik de "Maybe Mechanic" noem: elke beurt _stemt_ iedereen tegelijkertijd (YES/NO) op een bepaald voorstel, en afhankelijk van of deze stemming lukt of niet, worden spelers gestraft of beloond. Extreem simpel en intuïtief, met snelle beurten dankzij het gelijktijdige stemming. Ondanks de simpliciteit was ik toch in staat om veel verschillende spelervaringen rondom deze kern te bedenken.

Deze collectie bevat 3 spellen (en zal waarschijnlijk nog één of twee erbij krijgen):

* [Maybe Movies](https://pandaqi.com/maybe-games/vote/maybe-movies/): doe voorstellen voor unieke filmscripts en zorg dat anderen deze willen financiëren, maar dat jij er het meeste van profiteert!
* [Maybe Missions](https://pandaqi.com/maybe-games/vote/maybe-missions/): stel risicovolle spionnemissies voor en hoop dat anderen loyaal zijn en meehelpen, of onderga de gevolgen als het misgaat!
* [Maybe Minister](https://pandaqi.com/maybe-games/vote/maybe-minister/): doe voorstellen voor nieuwe wetten en veranderingen aan je land. Zorg dat de meerderheid ermee instemt, maar dat jouw politieke factie de meeste grondstoffen en stemmers eraan overhoudt op de lange termijn!

Bezoek de officiële projectpagina voor meer informatie en updates.

## Bijzonderheden

Voor dit project probeerde ik een nieuwe aanpak die ik "probeer alle permutaties" noem. Het betekent dat ik de grote onderdelen van mijn kernmechanisme identificeer, en dan elke _combinatie_ van deze onderdelen probeer voor een nieuw spel.

Bijvoorbeeld, dit spel heeft twee soorten materiaal: Votes (klein; JA/NEE) en Cards (groter; uniek per spel). Dit materiaal zou je _in je hand_ kunnen hebben of _open op tafel_. Dit materiaal zou je kunnen gebruiken _tijdens het spelen_ of _tijdens het scoren_ (aan het einde).

Dit geeft al meteen vele verschillende permutaties (of "combinaties" van deze elementen).

* Votes + Cards in je hand; Votes + Cards gebruikt voor spelen.
* Votes in je hand, Cards op de tafel; Votes + Cards gebruikt voor spelen.
* Votes in je hand, Cards op de tafel; Votes gebruikt voor spelen, Cards gebruikt voor scoren.
* Enzovoort ...

Ik schreef ze allemaal op en probeerde ze allemaal te laten werken.

Sommige _werkten niet_. Bijvoorbeeld, Votes + Cards in je handen is een enorme rotzooi. Twee soorten materiaal? Met verschillend groottes? Tegelijkertijd in je hand houden? Het is simpelweg te onpraktisch.

Degene die _wel werkten_ kwamen uiteindelijk in deze collectie terecht.

Ik vond dit ongelofelijk nuttig. Het geeft _restricties_ die helpen om keuzes te maken en meer creatief te zijn, terwijl het ook garandeert dat elk spel echt _uniek_ is (omdat je bent begonnen met een unieke permutatie van de mogelijkheden). Na het maken van deze Maybe Games heb ik deze techniek al bij vele andere "spelverzamelingen" gebruikt.

Daarnaast,

* Ook deze keer heb ik de spellen _gesimuleerd_ ( = de computer gevraagd om 100,000 rondes te spelen en de resultaten daarvan te geven). Dit hielp met het balanceren en finetunen van regels, nog voordat ik het spel één keer met anderen had getest.
* De spellen zijn weer een stap voorwaarts in de grafische kant en de afwerking, vind ik.
* Keer en keer leer ik hoe nuttig het is om _gelijktijdige beurten_ te hebben rondom een simpel _kernmechanisme_. Het maakt spellen enorm _snel_, niemand zit ooit niks te doen, en ik kan meer complexe regels aan die kern _toevoegen_ zonder dat het ingewikkeld wordt.