---
title: "Pietenpoker"
translationKey: "pietenpoker"
date: 2025-15-05

thumb: pietenpoker.webp
color: 'blue'

official: "https://pandaqi.com/chiptales/bet/pietenpoker/"
devlog: https://pandaqi.com/blog/boardgames/chiptales/pietenpoker/

categories: ["design", "programming"]
tags: ["boardgame", "website"]
---

_Pietenpoker_ ("Pete's Poker") is a heavily simplified version of poker that I developed for the Dutch national holiday of Saint Nicholas. Of course, it can be played any time you like, but it has built-in rules for typical rituals during this period _and_ a visual theme that matches. 

For that reason, I decided to make the game completely Dutch. Sorry about that! (In the future, my website will support multilingual games, but that feature is still in progress.)

The simplifications really boil down to a few realizations.

* We only need two "combinations" you can score: _same color_ or _same number_. (This already gives more than enough variation and possible scores, while it's very simple. And it has a clear ranking in case of a tie: more cards > fewer cards.)
* We can solve a lot of issues (that make poker slow, hard to understand, etcetera) by only going around the table _once_. (Instead of continuing bidding until everyone is equal.)
* If we give players a lot more cards in their hand, we can add a twist: those hand cards are _also_ used for bidding. (In other words, each round you have to ask yourself, "Do I want to keep this card to get a better combination at the end, or do I _use_ it to bid higher and put pressure on the others?")

In the end, this leads to a minimal amount of material (just a few pages) and rules (barely a page). While the essence of poker remains, this game actually adds a nice layer of strategy and decisions.

## What's special?

It's happened many times before that I experience another game and think: "That's a great rule/mechanic. What if I copy it, but _different_?"

This game, though, was probably the first time that I thought instead: "What if I copy it but _heavily simplify it_?"

Essentially, I wanted to _keep_ the essence of poker. The thing that most people know an denjoy. I didn't want to create a "spin-off" or "variant" that pushes it in an entirely new direction. No, I merely cared about (heavily) simplifying poker so it could be played with little children or large (impatient) groups.

Additionally, the game was originally meant as a "gift" to a family member of mine. (As my projects often are ...) It contains some subtle "inside jokes" or references to that person's life, but you'll really only find those if you know me personally. While development was only halfway, I already felt the game idea was too good to hide it from the world, so I developed it to be more general.