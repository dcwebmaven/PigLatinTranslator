<?php
/*Here's where we pull the information from the form into the PHP.*/
     
     $input = $_GET["normal_word"];//gets the word the person typed
     
        
    //calls the make_piglatin function
    $piglatin .= make_piglatin($input). ' ';
         
     echo "<p><strong>Input was: </strong></p><p>$input</p><p><strong>Pig Latin Version is: </strong><p>$piglatin</p>";
     
     
     
     function make_piglatin($input)
     {
     //word has to be letters only or it's ignored
     if (!preg_match("/^[a-z]+$/i",$input)) {
     return $input;
     }
     
     $newword = $input;
     
     //if it starts with a vowel, add "ay" to end of word
     
    if (preg_match("/^[aeiou]/", $input)) {
 
        $pattern = "/^([aeiou].*)$/i";
        $replacements = "$1-ay";
        $newword = preg_replace($pattern, $replacements, $input);
 
     }
     else if ($input[0] == "q" || $input[0] == "Q") {
     //If it starts with q, check for 'qu'. If found, remove 'qu' from front and add(-quay) to end of word.
     
     $pattern = "/^(qu)(.*)$/i";
     $replacements = "$2-$1ay";
     $newword = preg_replace($pattern,$replacements,$input);
     } else {
     
     //this case deals with consonants and the occasional 'y'
     
     $pattern = "/^([^aeiou][^aeiouy]*)(.*)$/i";
        $replacements = "$2-$1ay";
        $newword = preg_replace($pattern, $replacements, $input);
     }
     
     return $newword;
     }
     
     
     
     
     
     
     


?>