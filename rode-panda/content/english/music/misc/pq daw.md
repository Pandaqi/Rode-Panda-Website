---
title: "PQ DAW"
translationKey: "pqdaw"

date: 2023-02-25
ongoing: true

thumb: pq_daw.webp
thumb_bg: '#FEFEFE'
resize: 2

color: 'blue'

official: "https://github.com/pandaqi/pq-daw"

layoutDir: 'vertical'

categories: ["music", "programming"]
tags: ["website"]
---

_Pandaqi DAW_ is a tool I wrote for my tutorials website. It basically emulates a full _audio editing and mixing software_ right inside your browser.

To see it in action, visit the [Music Mixing](https://pandaqi.com/tutorials/audio/music-mixing/) course.

Its main features are common ones found in any DAW ( = Digital Audio Workstation).

* **Tracks**: Allow displaying, recording, moving, editing audio files on separate tracks
* **Effects**: Add all sorts of effects to those tracks (reverb, compressor, delay, noise, distortion, ...)
* **Controls**: Change the basic controls of music mixing (volume, mute, panning, ...)
* **Automation**: Automate (or "animate") any control or effect on a track

It uses basic web technologies (Canvas, JavaScript, Web Audio API). Browsers are very powerful these days. Additionally, I like to stay lean and simple, to support as many systems as possible.

Originally, it started as a way to make the tutorial more _interactive_ and _practical_. Over time it ballooned into a huge project that's one step away from allowing you to create professional music.

(Admittedly, it's a _big_ step away. Because it was never meant for that: it was meant to let my readers immediately _play_ with the ideas I explain, right inside their browser, no setup needed.)

As usual, I open sourced the tool and tried to make it easy for others to use it as well.