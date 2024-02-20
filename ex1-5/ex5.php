<?php

/*
 Exercise 5

 Create a PHP script that given a title for a post, it will return a unique URI. In order to generate this URI, the script should take the following actions:
         1) Remove all the spaces from the beginning and the end of the title
         2) Convert all the characters to lower case
         3) Replace all the intermediate spaces with a -
         4) Replace all the special characters and numbers
 */


/*
 website i found the check string for only letters inhttps://www.geeksforgeeks.org/php-ctype_alpha-checks-for-alphabetic-value/
 
 array push
 https://www.w3schools.com/php/func_array_push.asp
 
 convert all to lowercase
 https://www.w3schools.com/php/func_string_strtolower.asp#:~:text=The%20strtolower()%20function%20converts%20a%20string%20to%20lowercase.
 
 */
    function giveUniqueURI(string $givenInp): void {
        $sepWords = explode(' ', $givenInp);
        $indexOnlyLetters = 0;
        $secSep = [];
        foreach ($sepWords as $newWord){
            if($newWord != NULL){
                if(ctype_alpha($newWord)){
                    array_push($secSep,strtolower($newWord));
                }
            }
        }
    
       echo implode('-', $secSep);
    }

giveUniqueURI(" My awesome title ! ");
