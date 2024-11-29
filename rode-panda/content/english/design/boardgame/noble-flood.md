---
title: "Noble Flood"
translationKey: "noble-flood"
date: 2025-05-26

thumb: noble_flood.webp
color: "pink"

official: "https://pandaqi.com/chiptales/bet/noble-flood/"
devlog: https://pandaqi.com/blog/boardgames/chiptales/noble-flood/

categories: ["design", "programming"]
tags: ["boardgame", "website"]
---

_Noble Flood_ is a card game about fulfilling "contracts" (such as "Three of a Kind") while playing cards to a shared map.

It can be played with a standard deck, if you already have one lying around. In that case, you only need to print the Contract Cards.

That was my first goal: try to make more games that reduce what people need to print/get/cut, because they already have the material.

My second goal was to solve a lot of issues I have with Poker and related games. By writing your goal on a contract card, which you pick yourself, I found I was able to make a really interesting card game that doesn't require people to bluff, get lucky, or remember all the poker hands.

## What's special?

As stated, this was the first game where I could say "if you already have a standard deck of cards, you can use that to play!"

Just like Pyrrameds (another recent game), this game started with _simulation_. I coded the logic for a round/game, then asked the computer to repeat that 10,000 times and track the statistics.

At first, many of the contracts I invented where either "way too easy" (you had a 99.99% of randomly completing it) or "way too hard" (you had only a 0.01% chance of completing it). For example, a round easily has 20 cards, so the chance of having "a pair of the same numbers" is nearly 100%.

I had expected this; it's why I started with simulation.

After tweaking the numbers, rewriting them, shifting some of the core rules, I was able to balance the game before doing the first playtest. Now you could _always_ try and score points, even if you get a "bad hand" or unlucky with what other players have, because of the smart contracts and rules.

Coding this was a huge challenge and taught me a lot. (How do you efficiently check, in a 2D grid of cards, for a "royal flush": 5 adjacent cards, with successive numbers, in the same suit, ending in the highest card in the game? And how do you do that for 10 different contracts with variations on the requirements?)

But because of this number-crunching and balancing (backed by thousands of games), the game turned out exactly as good as I'd hoped.