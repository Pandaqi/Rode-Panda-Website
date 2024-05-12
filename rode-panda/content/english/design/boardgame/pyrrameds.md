---
title: "Pyrrameds"
translationKey: "pyrrameds"
date: 2025-05-26

thumb: pyrrameds.webp
color: "blue"

official: "https://pandaqi.com/pyrrameds/"
devlog: https://pandaqi.com/blog/boardgames/pyrrameds/

categories: ["design", "programming"]
tags: ["boardgame", "website"]
---

_Pyrrameds_ is a simple card game about giving your animal patients the medicine they need.

During the game, you play cards in a pyramid shape. To play _medicine_, its number needs to be lower or higher than all its neighbors. You can only play a _patient_, however, if there's a path through the pyramid that has exactly all the medicine they need!

A very simple and short game with remarkable depth.

## What's special?

This is the first game where I coded the _simulation_ before even doing my own paper prototype (or having designs for the cards). 

Why? I was really unsure about the _difficulty_ of the core mechanic of the game. How easy/hard would it be to create the perfect _path_ through the pyramid to be able to play patients?

By writing the game logic in code, and asking the computer to play 10,000 random games, I could answer all these questions. Much more easily than playing 10,000 games for real, with my own paper prototype ;)

After tweaking the numbers and rules to make sure it was _tough_ but _certainly not impossible_ to play your patients, the game itself was pretty much done. The simulation turned out to be _very_ good at predicting the real game, meaning it was already mostly balanced by the time we did the first playtest.

Needless to say, this increased the number of simulations I do for games _even more_.

Also, I struggled to combine the "medical / healthcare / hospital" theme with a more approachable and cute look. The game _is_ themed around medicine---you're helping sick pets---but if I leaned into that look completely, the game looked sterile and serious. 

The final choices for fonts, colors and layout were my best solution to blend the two tones. But I never struggled so much with that before making this game.