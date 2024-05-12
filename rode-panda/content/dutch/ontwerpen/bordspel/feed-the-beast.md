---
title: "Feed the Beast"
translationKey: "feed_the_beast"
date: 2025-08-26

thumb: feed_the_beast.webp
color: 'brown'

official: "https://pandaqi.com/feed-the-beast/"
devlog: https://pandaqi.com/blog/boardgames/feed-the-beast/

resize: 1

categories: ["ontwerpen", "programmeren"]
tags: ["bordspel", "website"]
---

_Feed the Beast_ is een simpel familiespel waarin je een mythisch monster cadeau's geeft om hem tevreden te houden.

De kernregels zijn erg simpel. Iedereen begint met een willekeurig hoopje _voedsel_, elke beurt moet je 1 fiche betalen aan het beest (die je daarvoor beloont/straft volgens diens Menu), en de eerste die _al diens voedsel_ weet te geven wint!

Maar het zou geen (Pandaqi) spel zijn, natuurlijk, zonder één of twee interessante twists.

* Elk beest heeft zijn eigen (grote) tegel met een prachtige illustratie, maar ook unieke krachten en voorkeuren. Dit betekent dat spelen met de "Yeti" een hele andere uitdaging is dan spelen met het "Loch Ness Monster", bijvoorbeeld.
* De Menu kaart (die laat zien wat het monster eet en wat je ervoor krijgt) verandert de hele tijd. Zowel van nature (door een simpel "reset" mechanisme voor het beest) en acties die spelers zelf bewust nemen.

Het resultaat is een spel dat je kan opzetten en leren in een minuut, maar elke keer compleet anders kan zijn. (Zeker als je bij de moeilijkste monsters komt, kan het spel langer duren en veel diepgang hebben. Of juist héél kort duren, als je het gezamenlijk flink verpest.)

## Bijzonderheden

Dit spel forceerde my om grote fouten te vinden en veel functionaliteit toe te voegen aan mijn Pandaqi systeem. Het heeft zulke gedetailleerde, gigantische illustraties ... dat het die in eerste instantie niet aankon. 

(Hoewel mijn oude, kapotte laptop daarin ook meespeelde. Maar zelfs dan zijn er altijd manieren om dingen slimmer te doen en te optimaliseren zodat het voor _iedereen_ zou moeten werken.)

Op diezelfde manier is het cruciaal dat de tekst op de beesten groot en leesbaar is, ongeacht wat het zegt. De tekst centreren zorgt dat het er mooi symmetrisch uitziet (duh), maar is veel lastiger te lezen dan de typische links uitgelijnde tekst. Dus ik moest een stukje toevoegen in mijn systeem die het _hele tekstblok_ uitrekende en centreerde, maar de tekst daar binnenin _anders uitgelijnd_ kon laten zijn.

Recepten kunnen ook erg simpel of erg complex zijn. Een recept kan "1 Appel -> BELONING" zijn, maar ook "1 Appel OF 2 Brood -> Beloning 1 OF Beloning 2", of elke andere combinatie. Dus ik moest meerdere kere code herschrijven om zeker te zijn dat al deze opties goed werden weergegeven, op de juiste grootte (zonder overlap or buiten diens gebied te tekenen), etcetera.

De lijst gaat maar door. Dit spel was zeker een grote stap als het gaat om de (visuele) design challenge.

De andere bijzonderheid komt van de unieke beesten. Ik maakte nooit eerder een spel waar de uitdaging in de kern het hele spel hetzelfde blijft, maar kan worden _gekozen_ (voor je begint) uit ~20 compleet andere opties. Al deze unieke regels, krachten en Menu's bedenken voor de beesten was een gigantische taak. Ergens overwoog ik in frustratie om het maar terug te brengen naar een handjevol beesten, maar ik ben blij dat ik dat niet echt heb gedaan.