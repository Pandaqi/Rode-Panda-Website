---
title: "PQ Words"
translationKey: "pqwords"
date: 2023-02-25
ongoing: true

thumb: pq_words.webp
color: 'beige'

official: "https://github.com/pandaqi/pq-words"

categories: ["schrijven", "ontwerpen", "programmeren"]
tags: ["website"]
---

_Pandaqi Words_ (of _PQ Words_) is een open source woordenboek for gebruik in taalspelletjes (of andere praktische taalprojecten).

## Het probleem

Ik had namelijk veel ideeën liggen voor taalspellen. Maar toen ik online rondkeek, vond ik geen woordenboeken of woordenlijsten die ik echt kon gebruiken.

Ze waren ...

* Té groot (met bijvoorbeeld _alle_ zelfstandig naamwoorden uit het Engels)
* Té klein (slechts één categorie of één perspectief)
* Niet gecategoriseerd 
* In een onbruikbaar of gelimiteerd formaat

## De oplossing

Daarom besloot ik uiteindelijk maar mijn eigen oplossing te ontwerpen. Ik had namelijk simpele, praktische, bruikbare woorden nodig.

Het gemiddelde taalspel werkt alleen als iedereen de woorden kent die ze moeten uitbeelden / communiceren / gebruiken. Op dezelfde manier hebben spellen thema's, waardoor ze alleen maar "voedsel" woorden willen, of alleen maar "werkwoorden". En zelfs dan wilde ik mijn spelers de _keuze_ geven welke woorden ze wilden gebruiken.

Zo maakte ik dus dit project. De woorden zijn gecategoriseerd op _type_, _moeilijkheidsgraad_ en _categorie_ (en soms _subcategorie_).

Gaandeweg realiseerde ik dat het natuurlijk ook als woordenboek werkte. Zo heb ik enkele Scrabble-achtige spellen gemaakt, zoals de [Keebble Games](https://pandaqi.com/keebble-games/). En dat soort spellen hebben de neiging om tot discussies te leiden over "is dat wel een bestaand woord?!"

Door een [dictionary tool](https://pandaqi.com/tools/dictionary/) toe te voegen, los je dat op.

## Dus ...

Wat is PQ WORDS nou precies?

* Een hiërarchie van folders en bestanden
* Dat zijn simpele tekstbestanden met één woord per regel
* Een script (geschreven in JavaScript) om deze te laden, combineren, een willekeurige eruit te trekken, etcetera
* Een stukje software (geschreven in Rust) om makkelijk het hele project te beheren (sorteren op alfabetische volgorde, opschonen, nieuwe categorieën aanmaken)

Dit project is "nog steeds bezig" in de zin dat ik nieuwe woorden toevoeg zodra ik ze nodig heb. Dus met elk volgende "taalspel" wordt er wel iets veranderd of uitgebreid. (Het is niet alsof ik elke dag actief urenlang het internet afspeur voor dat ene woord dat ik mis :p)