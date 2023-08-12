---
title: "Rolling in the Sheepe"
translationKey: "sheepe"
date: 2022-01-07

thumb: sheepe.webp
color: 'green'
resize: 1
layoutDir: 'vertical'

official: "https://pandaqi.com/rolling-in-the-sheepe"

categories: ["programming", "design"]
tags: ["videogame"]
---

_Rolling in the Sheepe_ is local multiplayer game (for 1&ndash;6 players) about being the first to roll over the finish!

It started as a simple idea: create a track from left to right, all players can do is _roll_, and finish first. As always with me, I soon found obvious flaws with the idea, and saw many ways to improve it. 

(If you're only rolling left to right, it's really hard to show all players + the road ahead on a screen. And if someone is substantially in the lead, it's even worse, and very discouraging for the other players. Flaws like that.)

So the game became, well, a bigger game about rolling sheep. After taking a break to reassess if I wanted to finish this project that started small, I decided to do so, because it was just too fun already to leave behind.

Visit my blog to read a [devlog](https://pandaqi.com/blog/videogames/one-week-games/devlog-rolling-in-the-sheepe) about the development of this game.

## What's special?
This game uses _randomly generated routes_! Whenever you start a new game, it generates your path on the fly, creating new parts in front when needed, and destroying the oldest parts in the back.

Most of the development went into this algorithm. It needed to be _fast_, _flexible_ (so you don't get the exact same path each time, and it can react to what players are doing), _pretty_ to look at, and _correct_.

In the end it became so powerful, that I had another breakthrough: we could integrate the _tutorial_ (for learning the basic game and each specific powerup/obstacle you can encounter) with the map itself!

Whenever something new is going to appear, an image appears a few blocks before it to _explain_ what's coming and how that works. Because the route is randomly generated, and I have all this information, this was easy to implement!

At the same time, this means players do _not_ need to read or play a tutorial beforehand. The game can literally be picked up and played, no matter how complex the route to the finish gets. (Even if 10 different powerups appear, they are all explained just before you need them, and you'll certainly roll past that explanation.)

As you might notice, I'm quite proud of this idea and think it's a wonderful way to teach games. I'll surely use it in more games coming up.

**Remark**: There are many more special elements to talk about with this game. For such a simple idea, it became a project that taught me new stuff surprisingly often, or required me to think in new ways. Perhaps _because_ the core was so simple. But all of that can be found in that devlog!