---
title: "Creature Quellector"
translationKey: "creature_quellector"
date: 2024-02-25

thumb: creature_quellector.webp
color: 'green'

official: "https://pandaqi.com/creature-quellector"

resize: 2

categories: ["design", "programming"]
tags: ["boardgame", "website"]
---

_Creature Quellector_ is a card game about trying to collect the best squad of creatures.

Creatures have a main type (such as water) that always counters something else (like water beats fire). On your turn, you pick an opponent to battle and you both play cards from your hand. Any powers that the _main types_ counter are removed---whatever is left is counted and the highest score determines the winner!

And now comes the zinger: win or lose, you _trade squads_. The only difference is that the winner picks one card that they're allowed to keep.

Once you think your hand is the best and can't be improved, you say you're done. May the best creature collector win!

Visit my blog to read [the developer diary](https://pandaqi.com/blog/boardgames/creature-quellector/) explaining how I designed this game.

## What's special?

I intentionally talked around this in my introduction, because there is a **lot** special about this game.

This is the first game that is clearly inspired by some other popular style / franchise. It's not hard to see the likeness to Pokémon and such, although I tried to keep the project geared at _inspiration_ instead of _imitation_.

It's my first **waitless game** (or **queuing game**). This game can be played with ...

* A very small deck of random cards.
* ... that's it!

You don't need a table and chairs. There is no discard pile, no other pieces, no long setup. You could play this game _while standing in a queue_ or _waiting for something_. Hence the genre "waitless" games.

This is the first one. Another game ([Kingseat](/en/design/boardgame/kingseat)) was supposed to be the first, but as things go when you're inventing new genres, it turned out more complicated and not really playable in a queue.

It's a mixture of my own art and AI art. The AI can sometimes do beautiful things, but there's a large set of designs and skills at which it absolutely sucks. I have added my own paintings and edits to many creatures and backgrounds, and did all the other work (iconography, general design) completely manually.

Finally, this game has the most complicated card design (behind the scenes) of all games so far. This prompted me to invest time into building a more robust and flexible _system_ behind the scenes for generating my games. I might have spent more time on that (quite complicated) system than this particular game ...

But the point is, of course, that this system now allows me to make more games, more quickly, with more ease. If this system ever evolves into something generally applicable and stable, I might release it as a proper tool for "creating layouts/designs on the web".