<?php

/*
 Exercise 3

 Update the previous script (ex2) in order to be able to receive an undefined number of parameters.
 */

    function doLongMult($myArray, $size): void {
        $total = 1;
        for($n=0;$n<=$size;$n++){
            $total = $myArray[$n] * $total;
        }
        echo $total;
    }

    function doAdd($myArray, $size): void {
        $total = 0;
        for($n=0;$n<=$size;$n++){
            $total = $myArray[$n] + $total;
        }
        echo $total;
    }

    function doSub($myArray, $size): void {
        $total = $myArray[0];
        for($n=1;$n<=$size;$n++){
            $total = $total - $myArray[$n];
        }
        echo $total;
    }

    function doDiv($myArray, $size):  void {
        $total = $myArray[0];
        for($n=1;$n<=$size;$n++){
            $total = $total - $myArray[$n];
        }
        echo $total;
    }

    function determineMath(string $givenInp): void {
        $firstSep = explode(' ', $givenInp);
        for($n=1;$n<=sizeof($firstSep);$n++){
            $secSep[$n-1] = $firstSep[$n];
        }
        $length = sizeof($secSep);
        switch($firstSep[0]){
                case "add":
                    doAdd($secSep, $length);
                break;
            case "subtract":
                doSub($secSep, $length);
            break;
            case "divide":
                doDiv($secSep, $length);
            break;
            case "multiply":
                doLongMult($secSep, $length);
            break;
                
        }
        echo "\nDone!\n";
    }

determineMath("add 2 2 2");
