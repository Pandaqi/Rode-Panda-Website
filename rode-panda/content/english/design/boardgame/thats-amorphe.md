---
title: "That's Amorphe"
translationKey: "amorphe"
date: 2023-02-21

thumb: amorphe.webp
color: 'pink'

official: "https://pandaqi.com/thats-amorphe"
devlog: https://pandaqi.com/blog/boardgames/thats-amorphe

categories: ["design", "programming", "writing"]
tags: ["boardgame", "website"]
---

_That's Amorphe_ is an accessible, fun party game about language and association.

On your turn, you get two words and a secret percentage. You must find a word that describes what happens if you were to _morph_ one into the other by that percentage. All other players must then guess your secret number.

It's probably my first game that is truly a party game. The explanation above is already 90% of the rules, and I've tested the game successfully with groups of any size or gaming experience.

The devlog ("developer diary", see link above) explains how I designed this game and the different versions through which it went.

## What's special?

The material for the game is all _generated_ by the computer. This means that I wrote code to place the right elements, text, icons, etcetera on a page, and then combine it into one PDF.

Visitors can use this as well. From the game page, you can create your own "word cards", picking only the categories or word types you want.

Additionally, I had to build my own small "dictionary" for this game. I needed a list of easy and common English words for this game. (Any difficult or abstract words cannot work with these rules. They wouldn't be fun for a party game in any case.) 

This snowballed into a huge system for managing words, targeted at (word) games: [PQ_WORDS](https://rodepanda.com/en/writing/misc/pq-words).