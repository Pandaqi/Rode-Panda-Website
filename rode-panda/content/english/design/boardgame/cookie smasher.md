---
title: "Cookie Smasher"
translationKey: "cookie_smasher"
date: 2024-07-25

thumb: cookie_smasher.webp
color: 'white'

official: "https://pandaqi.com/cookie-smasher"
devlog: https://pandaqi.com/blog/boardgames/cookie-smasher/

resize: 1

categories: ["design", "programming"]
tags: ["boardgame", "website"]
---

_Cookie Smasher_ is another fast (party) card game. 

It wasn't my intention to almost exclusively release games in that genre for a year, but they just happened to be finished at the same time. (Also, they're slightly faster to make, iterate and playtest.)

The game is a combination of the thoughts "what if Cookie Clicker were a board game?" and "what if I could improve upon the basic idea of the game Halli Galli?"

Every round,

* Players simultaneously play a card
* Then try to find the one card that is "poisoned"
* And be the first to smash that card!

Of course, all cards have special powers or "rules" that modify what the poisoned food is. Depending on the other cards played, _any_ food might be the poisoned one this time ...

## What's special?

I designed this game hand in hand with a **computer simulation**. In other words, I taught the computer how to play this game (and how each card works), then asked it to simulate a million random rounds. This way, I could ...

* Make any change
* Run the simulation again (takes only a few seconds)
* And see if the change was good or bad. 
* (For example, one time I changed the power of the "Bread" card, and suddenly it was NEVER the poisoned food after 10,000 rounds. That's not balanced!)

With this method, I was able to make all cards roughly equally probable. The _best_ card is only twice as likely to be poisoned than the _worst_ card. It even showed me a few ways to simplify existing powers or make them better.

Something I could've never done by hand, because this game has _fifty_ different card types! You obviously don't play with all of them. They are put into small "sets", ranked by difficulty, so you can slowly play more and more advanced games.

I never made a game with this much card variety before. I also never had to create "sets" before, but I've now learned how useful that is.

And lastly, this is the most "advanced" card layout I've generated so far. It has icons inline with text. It has parts of the card randomly generated. It is mirrored (the text appears twice, once upside-down, so you can understand the card from any angle).

I really wanted to expand my systems to support this, because I have a few games planned with even more advanced layouts ...