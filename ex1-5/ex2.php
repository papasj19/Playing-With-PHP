<?php

/*
 Exercise 2
 
 Create a PHP script that given two numbers and the name of a mathematics operation, it will return the result of the given operation using the two numbers as it operands. The available operations are:
         Add
         Substract
         Divide
         Multiply
 */


    function doMult(int $num1, int $num2): void {
        $myReturn = $num1 * $num2;
        echo $myReturn;
    }

    function doAdd(int $num1, int $num2): void {
        $myReturn = $num1 + $num2;
        echo $myReturn;
    }

    function doSub(int $num1, int $num2): void {
        $myReturn = $num1 - $num2;
        echo $myReturn;
    }

    function doDiv(int $num1, int $num2):  void {
        $myReturn = $num1 / $num2;
        echo $myReturn;
    }

    function determineMath(string $givenInp): void {
        $firstSep = explode(' ', $givenInp);
        switch($firstSep[0]){
                case "add":
                    doAdd($firstSep[1], $firstSep[2]);
                break;
            case "subtract":
                doSub($firstSep[1], $firstSep[2]);
            break;
            case "divide":
                doDiv($firstSep[1], $firstSep[2]);
            break;
            case "multiply":
                doMult($firstSep[1], $firstSep[2]);
            break;
                
        }
        echo "\nDone!\n";
    }

determineMath("add 2 2");
