---
title: "PQ Words"
translationKey: "pqwords"
date: 2023-02-25
ongoing: true

thumb: pq_words.webp
color: 'beige'
resize: 2

official: "https://github.com/pandaqi/pq-words"

categories: ["writing", "design", "programming"]
tags: ["website"]
---

_Pandaqi Words_ (or _PQ Words_) is an open source dictionary aimed for use in word games (or other practical language projects).

## The problem

Once upon a time, I had many ideas for word games. But when I looked around online, there were no dictionaries or word lists I could use.

They were either ...

* Way too advanced (containing _all_ nouns in the English language)
* Conversely, too small and limited (only one category or one perspective)
* Uncategorized (just a list of all random words somebody could come up with)
* In an unusable format

## The solution

That's why I decided to roll my own solution. I needed words clearly categorized by _type_, _category_ and _difficulty_.

Many word games only need English words that are common and well-known. Some games only focus on "food" nouns, or "animals", or verbs. In any case, I wanted to give my users/players the _choice_ about which words they want to use.

Finally, as I made these lists, I realized they could double as an actual dictionary. I've created a few Scrabble-like games, such as the [Keebble Games](https://pandaqi.com/keebble-games/). Those always lead to discussions about "That's not a word! You made that up!" By including a [dictionary page](https://pandaqi.com/tools/dictionary/), you can solve that.

## So ...

What is PQ Words exactly?

* A clear hierarchy of folders
* With text files at the end, containing one word per line
* A script (in JavaScript) to easily load, change, combine, query the dictionary
* A command line tool (written in Rust) to easily make large changes to the files (like sorting alphabetically, cleaning up, creating a new category)

This is an "ongoing" project in the sense that I simply add new words whenever I need them for a new project. 
