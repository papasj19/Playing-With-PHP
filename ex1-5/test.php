<?php

/*
 Exercise 1

 Create a PHP script that given a number as a parameter, it will print the number's multiplication table.
 */

    function printMult(int $numGiven): void {
        for($n=1;$n<=10;$n++){
            $printable = $n * $numGiven;
            echo "$printable\n";
        }
    }

    printMult(2);
