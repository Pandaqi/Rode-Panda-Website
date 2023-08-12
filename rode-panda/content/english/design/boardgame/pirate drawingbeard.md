---
title: "Pirate Drawingbeard"
translationKey: "piratedrawingbeard"
date: 2022-07-25

thumb: pirate_drawingbeard.webp
thumb_bg: "#deb256"
color: 'orange'

resize: 1

official: "https://pandaqi.com/pirate-drawingbeard"

categories: ["design", "programming", "writing"]
tags: ["boardgame", "website", "editorial"]
---


_Pirate Drawingbeard_ is a [One Paper Game](/en/design/boardgame/one-paper-games) in which you try to find the treasure before the others.

Each player receives one or multiple _hints_ on where the treasure could be located. By taking smart actions and asking smart questions, you must try to figure out the hints the _other players_ are holding, so you can pinpoint that one single square containing the treasure.

It's an alternatieve version of [_Pirate Riddlebeard_](/en/design/boardgame/pirate-riddlebeard). The biggest difference is that the game is now completely language independent! It uses _images_ as clues, not _text_.

## Why this project?
When I created _Pirate Riddlebeard_, I learned a lot about how you could make this simple idea even better, and what the main challenges were. One of those was the fact that you need a reasonable command of English to understand the text hints.

As such, I decided to create an improved version that only uses _images_ as hints. A version with even shorter/simpler rules and maps. One that could be played by children. One with a proper computer opponent in case you want to play with 1&ndash;2 players.

## What's special?
This game obviously has all the same special bits as the original: randomly generated maps, puzzles and playing material.

But these elements become _better_ with each game that uses them. If you look at the code for this game, you'll see it's quite clean and efficient, which isn't necessarily the case for the original ... 

The algorithm for generating the puzzles was also refined, to ensure you get maps/hints that are more fun, better-looking, and fair.