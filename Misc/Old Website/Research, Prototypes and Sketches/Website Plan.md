**To-do**

**Downloads voor ZZP-ers:** [**https://www.ikwordzzper.nl/downloads/**](https://www.ikwordzzper.nl/downloads/)

**How to design a WordPress theme from scratch: <https://www.taniarascia.com/developing-a-wordpress-theme-from-scratch/>**

**Link naar Database:** https://web0089.zxcs.nl/phpmyadmin

**Content (Schrijven en Tekenen)**

-   Maak tekeningen van de *workflow* voor projecten (logo's ontwerpen, feedback, revisies, etc.)

**Prototype**

-   Maak prototype (in Adobe Xd)

-   Zoek naar wat het fijnste eruitziet en het fijnste voelt.

-   (Leer ondertussen het programma gebruiken.)

**Finishing touches**

-   Check of alle teksten kloppen. (Sommige delen heb ik opengelaten omdat ik nog niet de juiste link/email adres/etc. had.)

    -   Er staat soms "HIER KOMT EEN LINK"

    -   In sommige gevallen moet ik nog extra content schrijven op NDHU.

-   Een mail sturen naar "White Goblin Games" dat ik hun website wel eens onderhanden wil nemen.

-   **\
    **

**Hiërarchie**

**[Homepage]{.underline}**

Op de homepage staat erg weinig. Er staat heel duidelijk de naam ("rode panda"), het logo (\<nog te bepalen>), en de opmaak/kleurenschema van de gehele website.

Er is een kort welkomstbericht dat meteen duidelijk maakt dat ik een freelancer ben, wat ik ongeveer doe, en waar ik voor sta.

Daaronder staan alle "hoofdcategorieën":

-   **Schrijven**

-   **Muziek**

-   **Ontwerpen**

-   **Programmeren**

Helemaal onderaan is een footer met de standaardinformatie (wie, wanneer, copyright) maar ook een heel duidelijk *menu*. (Dit menu staat namelijk niet bovenaan de pagina? Misschien handiger van wel?)

**[Hoofdcategorie pagina's]{.underline}**

Elke hoofdcategorie heeft een eigen pagina. De URL is:

> http://rodepanda.com/CATEGORIE/

Als eerste staan er "breadcrumbs", zodat mensen precies weten *waar ze zijn* en ook snel *terug kunnen*.

Daarna staat er een klein tekstje met uitleg. (Wat houdt deze categorie ongeveer in, en dat een verdere onderverdeling hieronder volgt.)

> *Voorbeeld (schrijven):* ik schrijf al van jongs af aan voor wild uiteenlopende projecten. Hieronder staan alle subcategorieën waarmee ik mij bezighoud. Klik op een categorie voor verdere informatie.

Daaronder staat een lijst met subcategorieën.

*Voorbeeld (schrijven):*

-   **Verhalen (fictie)**

-   **Zakelijke teksten (non-fictie)**

-   **Theater (toneelstuk/musical)**

-   **Prentenboeken**

**[Subcategorie pagina's]{.underline}**

Elke subcategorie krijgt weer een eigen pagina. De URL is:

> http://rodepanda.com/CATEGORIE/SUBCATEGORIE

Wederom vindt men als eerste "breadcrumbs"

Daarna is er weer een tekstje. Deze kan iets langer zijn, omdat de categorie specifieker is.

Elke subcategorie kent weer een onderverdeling. Dit is een vaste onderverdeling:

-   **Wat ik doe/huur mij in/mijn diensten/zoiets**

-   **Project #1**

-   **Project #2**

-   **Etc.**

(Het lijkt me handig als het "huur mij in"-item en "project"-item ook een andere achtergrondkleur hebben. Misschien ook elke "hoofdcategorie" en "subcategorie" eigen kleur geven, zodat de hiërarchie meteen duidelijk is.)

**[Huur-mij-in pagina's]{.underline}**

Op deze pagina's staat duidelijk wat ik wél doe, wat ik níet doe, hoe ik werk, en hoe je mij kunt bereiken.

De URL is:

> http://rodepanda.com/CATEGORIE/SUBCATEGORIE/HUUR-MIJ-IN
>
> http://rodepanda.com/CATEGORIE/SUBCATEGORIE/NAAM-VAN-PROJECT

\< TO DO: uitschrijven hoe ik precies werk enzo>

**[Projectpagina's]{.underline}**

Deze lijken me duidelijk. Ik beschrijf het project zo leuk en duidelijk mogelijk, voeg foto's toe, maak mensen geïnteresseerd, geef links, etc.

**[Over pagina ("about me")]{.underline}**

Deze pagina bevat een korte biografie en korte uitleg van mijn werk/vaardigheden. Ook vertel ik wat in het algemeen mijn werkwijze is (geen uurloon, flexibel, warm, etc.)

Daarna komen er al meteen links naar de rest van de website, want alle specifieke informatie (en portfolio) zit daarin.

**[Database structuur]{.underline}**

CATEGORIE DATABASE

-   ID

-   Name

-   Content

SUBCATEGORIE DATABASE

-   ID

-   Parent (category)

-   Name

-   Content

PROJECT DATABASE

-   ID

-   Name

-   Content

-   Type (project=0, opdracht=1, huur mij in=2)

CATEGORY LINKS

-   Project_id

-   Subcategory_id

Deze tabel linkt een project aan alle subcategorieën waar het bij hoort. Dit doen we door één rij toe te voegen per subcategorie.

Bijvoorbeeld: "pandaqi" (ID=3) hoort onder "non-fictie schrijven" (ID=5) en "website ontwerpen" (ID=12). Dan komen er twee rijen in de tabel: (3,5) en (3,12).

**[Algemene opmerkingen]{.underline}**

In het algemeen geldt het volgende voor de hele website:

-   Er zijn géén comment secties of deelknoppen voor social media.

-   Alles is lekker duidelijk, groot en simpel. Ik heb geen sidebar vol tekst, of header vol tekst, wat dan ook.

-   Op alle pagina's is het thema (bomen, bladeren, panda/dieren, etc.) duidelijk en consistent aanwezig. (Wél kan ik dingen laten verplaatsen of veranderen om ruimte te maken én beweging te impliceren. Zoals de panda die steeds verder omhoog/omlaag klimt.)

VRAAG: Moet ik een paginasysteem maken? Of verwacht ik niet dat een pagina ooit zó lang wordt dat het niet meer te doen is? IK DENK NIET DAT HET NODIG IS.

**[Complete hiërarchie]{.underline}**

Hoofdpagina

-   Schrijven

    -   Persoonlijk blog (Niet Dat Het Uitmaakt)

        -   Vluchtige Verhalen

        -   Bordspellen

        -   Cartoons

        -   Zinderende Simulaties

        -   Genezende Gedichten

        -   Recensies

    -   Zakelijke teksten (non-fictie)

        -   *Huur mij in*

        -   Project: Marie Louise Nijsing Photography

        -   Project: Learn Godot in 24 Hours

        -   Project (eigen): Pandaqi (Tutorials)

    -   Verhalen (fictie)

        -   *Huur mij in*

        -   Vluchtige verhalen

        -   **\<schrijf een kort verhaal ofzo>**

        -   **??**

    -   Theater (musical/toneel)

        -   *Huur mij in*

        -   "Kapers van de Eenzame Kust"

        -   "De Laatste Trein"

    -   Prentenboeken

        -   *Huur mij in*

        -   De Kat van Sinterklaas

    -   Overig

-   Muziek

    -   Singer-songwriter

        -   *Huur mij in*

        -   Demo's

        -   Covers

    -   Instrumentaal

        -   *Huur mij in*

        -   Composition in F Minor

        -   Dusk

        -   Dawn

    -   Musical

        -   *Huur mij in*

        -   Kapers van de Eenzame Kust

    -   Overig (film, spellen, etc.)

-   Ontwerpen

    -   Tekenen (prentenboeken, cartoons, spel assets, etc.)

        -   *Huur mij in*

        -   Project (eigen): De Kat van Sinterklaas (Prentenboek)

        -   Project (eigen): Tower of Freedom (Computerspel)

        -   Project (eigen): Cartoons (Henk de Tijdreiziger, Freds Wilde Wereld, overig)

        -   De Dierenbandiet

        -   Naïvigatie

    -   Bordspellen

        -   *Huur mij in*

        -   De Dierenbandiet

        -   Naïvigatie

    -   Website (digitaal)

        -   *Huur mij in*

        -   Rode Panda

        -   NDHU

        -   Pandaqi

        -   Chiara

    -   Editorial (print media => tijdschrift, spelregels, etc.)

        -   *Huur mij in*

        -   Prentenboek

        -   De Dierenbandiet (spelregels)

        -   Naïvigatie (spelregels)

        -   **??**

    -   Huisstijl (Logo)

        -   *Huur mij in*

        -   Rode Panda

        -   Pandaqi

        -   **\<hiervoor moet ik wel echt nog een beter project hebben? Misschien dat ik de huisstijl doe voor een "fictief bedrijf" en daar iets over schrijf>**

            -   Dat idee met dat aquarium

            -   Mwah, dan heb ik wéér een niet-serieuze website!

        -   **??**

    -   Overig (typografie, etc.)

-   Programmeren

    -   Websites

        -   *Huur mij in*

        -   Rode Panda

        -   NHDU

        -   Pandaqi

        -   Chiara

    -   Computerspellen

        -   *Huur mij in*

        -   Tower of Freedom

        -   Trampolinedraak

        -   Worlds We Used to Own

        -   All the Stars in the Universe

        -   Bester

    -   Overig (programma's/tools, simulaties, etc.)

-   Over mij

    -   Contact

    -   Mijn werkwijze

    -   Mijn filosofie

    -   *Algemene voorwaarden (deel van de layout klopt niet)*

    -   Zoeken

**\
**

**MIJN FILOSOFIE:**

\<p>Op deze pagina wil ik vertellen hoe ik naar de wereld, het leven en mijn eigen werk kijk. De titel "mijn filosofie" is op zich een goede samenvatting, hoewel het stuk hieronder natuurlijk een zeer korte en incomplete beschrijving is.\</p>

\<p>Ik heb ook een stuk over mijzelf en mijn filosofie op mijn blog geschreven: \<a href=" <http://nietdathetuitmaakt.nl/over/>"> Over mij\</a>. Die pagina vertelt hierover vanuit een iets andere hoek. Er zit namelijk een verschil tussen mensen die mijn blog bezoeken en mensen die mijn portfolio bezoeken.\</p>

**\<h2>Wat wil ik?\</h2>**

\<p>Ik vraag mezelf -- net zoals iedereen waarschijnlijk -- regelmatig af: wat wil ik eigenlijk in het leven? Wat wil ik doen en waarom?\</p>

\<p>Het antwoord is altijd geweest: ik wil de wereld een beetje beter achterlaten dan ik hem heb gevonden. Dat is een goed begin, maar verder nog erg vaag.\</>

\<p>Hoe kan iemand de wereld verbeteren? Door de \<em>*huidige problemen op te lossen\</em>* en \<em>*toekomstige problemen te voorkomen\</em>*.\</p>

**\<h2>Wetenschapper of kunstenaar?\</h2>**

\<p>Vroeger dacht ik altijd dat ik het aan de wereld verplicht was om wetenschapper te worden. Die lossen tenminste problemen op! Die gaan het medicijn tegen kanker ontdekken en de planeet redden voordat zij te heet wordt!\</p>

\<p>Ik heb het lang geprobeerd, door bijvoorbeeld aan de technische universiteit te studeren, maar uiteindelijk is het dat niet geworden. Er zijn veel mensen die veel beter zijn in wetenschap dan ik en ook meer passie ervoor voelen. Steeds meer merkte ik dat mijn bijdrage aan de wetenschap gering was.\</p>

\<p>Ik voelde me meer aangetrokken tot de andere kant: de kunsten. Ik kan dan misschien niet het klimaatprobleem oplossen, maar ik kan wél andere mensen erover aan het denken zetten. Ik kan een boek schrijven dat de informatie op een leuke en grappige manier overbrengt. Ik kan een nummer schrijven dat mensen meer liefde voor de natuur bijbrengt. Ik kan een bord- of computerspel bouwen waarin je het klimaatprobleem naspeelt.\</p>

**\<h2>Praktisch nut\</h2>**

\<p>Dat is waarvoor ik de kunsten wil gebruiken: problemen oplossen en mensen "verbeteren". (Dat klinkt heel pretentieus of arrogant, maar dat zal ik dadelijk verder toelichten.)\</p>

\<p>Alles wat ik doe moet praktisch nut hebben. Het liefst wil ik dat mijn werk tegelijkertijd mensen \<em>*plezier oplevert\</em>*, \<em>*aan het denken zet\</em>*, en \<em>*ergens mee helpt\</em>*. \</p>

\<p>Ik ga niet doen alsof ik de wijsheid in pacht heb en iedereen kan vertellen hoe ze een "goed" mens zijn. (Als iemand dat ooit beweert, moet u hem ook niet geloven!) Je ziet mij nooit een verhaal schrijven met een overduidelijke "goeierik" en "slechterik". Nee, de wereld is veel meer een grijs gebied, en daar kom je pas achter als je er zelf over nadenkt.\</p>

\<p>Als zoveel mogelijk mensen hun best doen om de *huidige problemen* op te lossen én om een zo goed mogelijk mens te zijn, worden *toekomstige problemen* ook verzacht of verholpen.\</p>

**\<h2>Aandachtsgebieden\</h2>**

\<p>Ik heb een paar specifieke gebieden waar ik veel "verbeterpunten" zie:\</p>

\<ul>\<li>Onderwijs\</li>\<li>Opvoeding\</li>\<li>Gezondheid\</li>\<li>Liefde\</li>\</ul>

\<p>Het huidige onderwijssysteem vind ik belachelijk slecht, net als de manier waarop veel mensen (niet alleen ouders) tegen opvoeding aankijken. Terwijl dit misschien wel de belangrijkste factoren zijn voor iemands ontwikkeling en levensverloop.\</p>

\<p>Daarnaast onderschatten veel mensen hun gezondheid. Ik kan het weten. Doordat ik op de middelbare school steeds hoorde "school gaat voor! school staat op de eerste plek!", besteedde ik geen aandacht aan een klein gezondheidsprobleem, waardoor het kon uitgroeien tot een gigantisch gezondheidsprobleem. Ik wil mensen leren hoe je gezond leeft -- en waarom dat ongelofelijk belangrijk is -- zonder dat je daarvoor je ziel hoeft te verkopen aan de duivel.\</p>

\<p>En als laatste, hoe cliché het ook klinkt, hou ik van lieve mensen. Mensen hebben mij wel eens beschuldigd van het feit dat ik "te hoge eisen stel" en "verwacht dat anderen perfect zijn". Dat is niet zo. Je kunt de meeste imperfecte persoon op aarde zijn, zolang je \<em>*je best doet om zo lief mogelijk te zijn\</em>*, ben je mijn vriend. (Daarentegen kun je hartstikke leuk, aardig, slim, knap, goddelijk zijn, maar als je van binnen een klootzak bent die geen moeite wil doen, ben je niet mijn vriend.)\</p>

\<p>Ik probeer altijd iets liefs te doen met mijn werk. Het is mijn valkuil, maar ook mijn kracht.\</p>

"10 branding elements and what they mean": <http://www.brandanew.co/10-branding-elements-and-what-they-mean/>

"6 stages of creative brand design": <https://tubikstudio.com/6-creative-stages-of-branding-design-step-by-step-guide/>

**HANDIGE LINKS:**

<https://css-tricks.com/snippets/css/complete-guide-grid/>

<https://en.99designs.nl/blog/tips/responsive-web-design-key-tips-and-approaches/>

<https://www.smashingmagazine.com/2016/02/design-workflow/> (!!)

<https://blog.hubspot.com/marketing/examples-brand-style-guides>

<https://www.canva.com/learn/your-brand-needs-a-visual-style-guide/>

**Interesting stuff about Golden Ratio**: <https://www.youtube.com/watch?v=NXKYUpWfCjA>

**"How to Draw Everything":** <https://www.youtube.com/watch?v=8e9xeind7lU>

**"5 tips for logo design":**

-   Tip 1: Flip and reflect logo designs

    -   Easier to spot mistakes and makes logo identifiable when reflected

-   Tip 2: Exaggerate negative space

    -   Logo may be smaller than what you see on your screen so compensate the negative space

    -   Nintendo Switch logo example: one circle (the negative space one) is slightly larger than the other, to compensate.

-   Tip 3: Always use Geometric shapes

    -   Easier and more accurate than using the pen tool.

    -   Shape builder!?

-   Tip 4: Force yourself to create multiple renditions/ideas of your logo

    -   Within an hour! (No time to procrastinate, no time to become attached to certain ideas, only rough sketches, etc.)

-   Tip 5: Change your location

    -   Helps you create more diverse ideas and helps clear your brain\... You may be surprised what you might think of in a new environment﻿

**THE 7 HABITS OF HIGHLY EFFECTIVE ARTISTS:**

1\) Daily work

2\) Volume, not perfection

3\) Steal (well)

4\) Conscious learning

5\) Rest

6\) Feedback

7\) Create what you love﻿

**"5 tips for minimal logo design":** <https://www.youtube.com/watch?v=gc0DyihWb2E>

-   Use a clever icon/shape. (Represent multiple things at once, all related to your brand.)

-   Avoid gradients if possible. => Always make sure your logo works in grayscale. Start in black & white.

-   Typography => The font you choose (and how you edit/use it) must match the logo and brand feeling.

-   Levels of simplicity => draw any idea in multiple (3 or 5) levels of simplicity to find the one that suits your needs.

-   Negative space => there's not much room in logos, so use negative space!

<http://colormind.io/bootstrap/>

**List of cartooning tutorials:** <https://conceptartempire.com/best-cartooning-books/>

**In-depth logo (Illustrator) tutorial of 1.5 hour:** <https://www.youtube.com/watch?v=YycxaAK2MZ4>

**Logo classifications (??):** Logo, Symbol, Monogram, Emblem, Other graphic device (Logotype/Wordmark??)

**Logo Rules from Chris Do (The Futur)**:

-   Logos need to be legible from 6 feet away. (Rule of thumb: 0.5" on computer screen, normal viewing distance.)

-   Design your logo to be legible in black & white.

    -   "Squint test": it helps to squint your eyes, so that you really see shapes (and weight of forms), instead of what you *think* you see.

-   It needs to be versatile. It's used in a lot of different places (favicon, needs to look good in a circle and a square, etc.)

    -   You can have multiple different logos (maybe even recommended), but they still need to match styles (and look/feel like the same logo).

    -   Can it translate to other mediums?

-   When drawing something, think first in terms of *shape/form* instead of *line*. Make sure your lines have the appropriate thickness, curve, tone, etc.

-   Avoid jumping on trends. Logos must be timeless.

    -   That's why a "mainly typographical" logo is nice. (Just a typeface with a little embellishment/symbol.)

-   *Does your logo have an idea?* The whole is greater than the sum of the parts. There must be an idea behind the parts. Together they must create a whole new meaning.

    -   FedEx logo (with the arrow in the negative space between "E" and "x")

    -   Amazon logo (the smile, and the arrow goes from A to Z (because the amazon contains the largest variety of species, and the shop also sells EVERYTHING))

80% of the challenge (for wordmarks) is finding the right typeface (that conveys the right feeling), and finding the right spacing to make it all fit together nice and packed.
