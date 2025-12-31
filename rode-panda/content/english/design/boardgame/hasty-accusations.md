---
title: "Hasty Accusations"
translationKey: "hasty_accusations"
date: 2025-01-12

thumb: hasty_accusations.webp
color: 'black'

official: "https://pandaqi.com/hasty-accusations/"
devlog: https://pandaqi.com/blog/boardgames/hasty-accusations/

categories: ["design", "programming"]
tags: ["boardgame", "website"]
---

_Hasty Accusations_ is a board game about keeping your secret suspects alive and secretly killing off the others.

On your turn, all you do is play a card _facedown_ in front of any suspect. 

Whenever the spyglass resets, however, the _biggest_ pile is reviewed. You reveal the cards and check them one by one, and if the dreaded Murder card is among them ...

Try to save your suspects and kill others at the right time. But do so secretly, because once people realize who your secret suspects are, there's no saving them ...

## What's special?

This game had a journey that was both extremely wobbly and extremely simple.

The core idea popped into my head almost fully-formed. (Secretly play cards, once in a while the biggest pile "triggers" and might lead to a suspect being murdered, until only one remains.)

At the same time, this core idea had _one_ little change that threw me off: it was a "hidden traitor" game at first. Only _one_ of the players actually had a secret suspect they tried to protect. The other players were all---unknowingly---in the same team and working to unmask the traitor.

This seemed like a good idea at first. But after trying to make it work 10 versions in a row, I just ... removed the whole traitor thing and the game suddenly worked.

Besides that, this game prompted me to improve my codebase even further. (It has complicated elements on the cards, such as rotated photographs and stylized text, which required me to support all of that.)

