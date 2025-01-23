<?php

/*
 Ex 8
 
 register.php: This file must validate the information received from the form. The validations to implement are listed below:
 
            The email should be a valid email address
 
            The password should contain a min number of 6 characters
 
    If the validation fails, a list with all the errors must be displayed to the user.
 
 */
    function checkPass(string $passw): bool {
        if(strlen($passw) < 6){
            return False;
        }else{
            return True;
        }
    }

    function checkMail(string $mail): bool {
        if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            return True;
        } else {
            return False;
        }
    }


    function validateInfo(string $newMail, string $newPass): void {
        $flag = False;
        if(!checkMail($newMail)){
           echo "Your email has not been accepted" . '<br>';
           $flag = True;
        }
        if(!checkPass($newPass)){
            echo "Your password has not been accepted\n" . '<br>';
            $flag = True;
        }
        if($flag){
            //dont allow to proceed
            echo '<br>' . "Youre being redirected to registration" . '<br>' . '<br>';
        }else{
            //no problems and proceed
        }
    }
