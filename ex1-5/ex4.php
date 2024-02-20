<?php

/*
 Exercise 4

 Create a PHP script that given a phrase it will return the following information:
 The total number of words
 The number of occurrences per words
 */


/*
 website i found the array count in
 https://www.php.net/manual/en/function.array-count-values.php
 */
    function giveWordsAndOccurences(string $givenInp): void {
        $sepWords = explode(' ', $givenInp);
        $numNums = sizeof($sepWords);
        $numsCounted = array_count_values($sepWords);
        
        $washedInfo = ['Words' => $numNums, 'Occurences' => $numsCounted];
        
        print_r($washedInfo);
    }

giveWordsAndOccurences("I absolutely love when I leave when it is sunny");
