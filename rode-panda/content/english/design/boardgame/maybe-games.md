---
title: "Maybe Games"
translationKey: "maybe-games"
date: 2025-04-26

thumb: maybe_games.webp
color: 'green'

official: "https://pandaqi.com/maybe-games/"
devlog: https://pandaqi.com/blog/boardgames/maybe-games/

categories: ["design", "programming"]
tags: ["boardgame", "website"]
---

_Maybe Games_ is a collection of simple family games themed around the same core mechanic. Something I call the "Maybe Mechanic": each turn, everyone simultaneously votes (YES/NO) on a set of cards, and depending on whether the vote fails or succeeds, people are punished or rewarded. Extremely simple and inutitive, with fast turns thanks to simultaneous voting. But I was still able to invent many different rulesets around this core, leading to wildly different game experiences.

The project contains these 3 games (and will probably be extended by 1 or 2 more games):

* [Maybe Movies](https://pandaqi.com/maybe-games/vote/maybe-movies/): pitch movie ideas that others want to greenlight, but will profit you the most!
* [Maybe Missions](https://pandaqi.com/maybe-games/vote/maybe-missions/): propose risky spy missions and hope the others join in to make it happen, or suffer the consequences of getting caught!
* [Maybe Minister](https://pandaqi.com/maybe-games/vote/maybe-minister/): propose changes to your country that will pass through parliament (thanks to a majority vote), but will give your faction the most resources and voters in the long run! 

Visit the official project page for more information and any updates.

## What's special?

For this project, I tried an approach I elegantly call "try all the permutations". It means that I identify all the major parts of my core rules, and then try every _combination_ of them for a different game.

For example, these games have two types of material: Votes (small; yes/no) and Cards (bigger; depends on game). This material could be in your _hand_ or _on the table_. This material could be _used for playing_ or _used for scoring_.

This already gives many different permutations (or "combinations") of these elements.

* Votes + Cards in hand; Votes + Cards used for playing.
* Votes in hand, Cards on table; Votes + Cards used for playing.
* Votes in hand, Cards on table; Votes used for playing, Cards used for scoring.
* And so forth ...

I wrote down all of them and tried to make all of them work.

Some just _didn't work_. For example, Votes + Cards in hand is _really messy_. Two different types of material? With different card sizes? That's just too impractical.

The ones that _did work_ ended up being the collection of games you see now.

I found this incredibly useful. It gives _restrictions_ that help narrow down your ideas and be more creative, while ensuring each game is truly _unique_ (because the combination of rules at its core is expressly different from all the others). After making the Maybe Games, I already used this technique for other "collections" of related games.

Besides that,

* I _simulated_ all the games ( = ask the computer to play 100,000 rounds, give me the results), which helped balance and finetune the rules before even playing it once with others.
* The games are another step forward in terms of visuals and polish, I think.
* Again and again, I keep learning how useful it is to have _simultaneous turns_ around a very simple _core mechanic_. It makes games incredibly fast to play, nobody has any boring downtime, and I can add complexity/fun rules _on top_ of that core without overwhelming anyone.