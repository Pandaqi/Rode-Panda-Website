# Font

**Headers = Rode Panda**

Er zijn een aantal kleine letters en grote letters die van *grootte* variëren. Het is niet echt storend, maar misschien toch iets om te fixen:

-   NOPRSTU => *ietsje* groter

-   O lager op baseline plaatsen (?)

-   Bovenkant R en P zijn *ietsje* te dik. (Na versmalling natuurlijk langer trekken.)

-   Kleine letters => maak lijst

De meeste *spacing* en *kerning* is geregeld. Maar als ik iets raars tegenkom, kan ik gewoon updaten.

-   "Be" te dicht bij elkaar

-   "st" te ver uit elkaar => is dit een algemeen probleem met de *s* of *t*?

Als laatste nog checken of er ligaturen nodig zijn.

**Body Font = Vollkorn.**

Alternatives:

-   Crete Round (nicely legible, but still soft ... but limited styles)

-   Domine (more traditional, but in a good and web-ready way)

-   FS ME Web (not free)

**Great article on the basic steps in creating a font:** <https://www.freecodecamp.org/news/designing-a-font-from-scratch-and-submitting-it-to-google-fonts-in-24-hours-152a30c57095/>

# Plaatjes workflow

-   Zet origineel in "originals" folder. (\<naam> = thumbnail, \<naam-header> = banner)

-   Zet om naar WebP met XnConvert. (Of online, als het GIF betreft) => Gebruik TinyPNG voor nog verder

-   Als alles omgezet, gooi het op avif.io => settings Effort = 100, compression = 70-80. (Gebruik hiervoor de originals.)

# Optional Improvements

-   Add a slight *background* pattern to the page. Or only the front page + search/terms pages. (Project pages are varied enough as it is, with their different colors and image and stuff.)

-   I've now wrapped all the grids in a *\<nav>* tag, and been a bit loose with \<article>/\<section> tags.

    -   Is this a better alternative?

    -   Make each grid item its own *section* and actually show some text?

-   Additionally, I'm not completely using the benefits of **microdata**

    -   For example, you can tag things as a game: <https://schema.org/Game>

    -   Even better, you can tag them as a creative work: <https://schema.org/CreativeWork>

    -   Or you can tag as a Blog Posting: <https://scottvinkle.me/blogs/work/how-html-microdata-helps-with-accessibility>

-   Create more different *backgrounds* for text / no-thumbnail tiles.

-   Use *two* colors on the thumbnail pattern (light-dark-light-dark, perhaps slight hue shifts)??

-   Keep the "welcome block" roughly centered in the grid (using grid-column: \<startrow> / span 3)??

-   Remind people that they can *translate* the page? Make the "switch language" button more visible on first sight?

-   What if the footer becomes very long (on mobile)? Feels like there should be *some* transition to the footer then, but it shouldn't be harsh or out-of-place.

-   Thumbnails aren't used on project pages themselves. Should they?

-   Even more precise control over (front) grid placement =>

    -   Now it just moves all "ongoing" projects a bit further up. Instead, I might add a parameter "highlight" with a number. The higher it is, the more it's moved upwards.

    -   Additionally, extend this code to all other grids as well?

    -   (Just make the whole thing a partial. Move custom parts, from other files, *out and above* that partial.)

Perch CMS seems cool. (Too bad its paid) => <https://grabaperch.com/about>

**Finish NDHU article:** the one about the font
