# PigLatinTranslator
This project is a PHP program that will translate any word into "Pig Latin," a silly fake language.

Here are the specs for the project:

Use these rules:
In words that begin with consonant sounds, the initial consonant or consonant cluster is moved to the end of the word, and "ay" is added:
  "banana" = "ananabay"
  "question" = "estionquay" *
  "plum" = "umplay"

* Pig Latin is based on pronunciation, so "qu" words are an exceptional case. "Question" is pronounced roughly as "kwes-tchun," so the "u" is treated as the consonant "w," and "qu" as the consonant cluster "kw." Therefore, we translate it as "estionquay." "Qu" words are not the only exceptions, but for this project, they are the only exception case we require you to translate correctly.

In words that begin with vowel sounds or silent letters, just add "ay" to the end of the word:
  "apple" = "appleay"
  "inbox" = "inboxay"
  "eight" = "eightay"

Use built-in functions and regular expressions. 

