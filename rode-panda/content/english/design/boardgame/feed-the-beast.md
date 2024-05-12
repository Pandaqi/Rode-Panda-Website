---
title: "Feed the Beast"
translationKey: "feed_the_beast"
date: 2025-08-26

thumb: feed_the_beast.webp
color: 'brown'

official: "https://pandaqi.com/feed-the-beast/"
devlog: https://pandaqi.com/blog/boardgames/feed-the-beast/

resize: 1

categories: ["design", "programming"]
tags: ["boardgame", "website"]
---

_Feed the Beast_ is a simple family game about gifting food to a mythical monster to keep them happy.

The core mechanic is incredibly simple. Everyone starts with a random set of _food_ tokens, you must pay 1 to the beast every turn (which gets a certain reward/penalty), and the first to get rid of _all_ their food wins!

It wouldn't be a (Pandaqi) game, of course, without one or two wrinkles.

* Each beast has their own (huge) tile showing a beautiful illustration, but also their unique powers and preferences. This means playing the "Yeti" is an entirely different challenge than playing the "Loch Ness Monster", for example.
* The Menu card (showing what the monster eats and what you get in return) changes all the time, both with a simple "reset" mechanic and actions that players can consciously take.

The result is a game you can setup and learn in a minute, but is different each time and has immense depth (especially once you get to the harder monsters).

## What's special?

Just because of this game, I discovered some bugs in my Pandaqi website and had to add functionality left and right. It has such detailed, huge illustrations ... that it couldn't handle the load (of loading, parsing and then dynamically drawing the beasts) at first. 

Similarly, it's crucial that the text on beasts is big and readable, no matter what it says. Centering the text makes it look nicely _centered_ (duh), but is far more annoying to read than typical left-aligned text. So I had to add a toggle in my system that would allow me to calculate the text box dimensions first, then center _the entire box_, but keep text inside left-aligned. 

Recipes can be very simple or very complex. It could be "1 Apple -> REWARD", or it could be "1 Apple OR 2 Bread -> REWARD 1 OR REWARD 2", or any other combination. I had to rewrite code several times to ensure all these options would be drawn properly, at the right size (without overlap or extending the available space), etcetera.

The list goes on. This game was truly a step up in terms of (visual) design challenge from earlier games.

The other specialty comes form the unique beasts. I've never made a game before where the main component or challenge stays the same the entire game, but can be chosen (at the start) from ~20 truly unique options. Inventing diverse rulesets, powers and food menus for all beasts was a momentous task. I even considered cutting it down to just a handful of unique beasts at some point, but I'm glad I did not.