---
title: "Trampoline Dragon"
translationKey: "trampolinedragon"
slug: "trampoline-dragon"
date: 2018-11-07

thumb: trampolinedraak.webp
color: 'grayscale'

official: "https://trampolinedraak.herokuapp.com/"

type: 'hobby'
unfinished: true

categories: ["programming"]
tags: ["videogame", "website"]
---

_Trampoline Dragon_ was my training ground for the world of "smartphone multiplayer games"

These are games that you _run_ on your computer (either a program or a website), but _play_ on your smartphone. They usually support _many_ players &mdash; without the need to buy controllers for everyone &mdash; which is great for large groups and parties!

## What is it?
In this case, I made a drawing game. (Heavily inspired by the Jackbox Drawful 2 game, which is also the thumbnail for this project.) 

Everyone must draw something on their smartphone screen. Once done, drawings are displayed one by one, and everyone must guess what the drawing represents. (Again by typing something on their phone.) Points are awarded for right answers ... or by fooling other players with your wrong answer. The drawings are hilarious; the wrong answers even better.

## What I learned from the project
You can read my (sort-of) "devlog" about the creation on my blog (only in Dutch): [Trampolinedraak Devlog](https://nietdathetuitmaakt.nl/gewoon-een-gedachte/trampolinedraak-een-partyspel/)

This project mainly taught me that there is a _better_ way to do this:
* Using the WebRTC framework, I can connect devices much more easily. In fact, it's so fast, that you can play _realtime_ games with this technique.
* Using a website for the game is asking for trouble. It's just not as fast _and_ unreliable. For later projects, I made an actual game executable instead.

I saw no reason to continue the project once I realized this. Instead, I started [The Peerful Project](https://pandaqi.com/the-peerful-project), which actually has finished games.

