<?php

include 'validate.php';
include 'db.php';

/*
 
 Ex 11
 index.php: This file is going to show the registration form to the user. The form must contain an input for the email and another for the user password.
 
 
 https://www.w3schools.com/php/php_mysql_select.asp
 */

    if (!empty($_POST)) {
        //returns true if problem
        if(validateInfo($_POST['email'],$_POST['password'])){
            //dont allow to proceed
            echo '<br>' . "You did something wrong" . '<br>' . '<br>';
            }else{
                //no problems and proceed
                echo 'checking with db';
                //check with data base
                if(checkLogin($_POST['email'],$_POST['password']) == 0){
                    echo 'db has accepted';
                    //session_start();
                    $_SESSION['loggedUser'] = $_POST['email'];
                    //set session
                    //$_SESSION['id'] =
                }
                

            }
    }
    ?>

<!DOCTYPE html>
<html>
    

<body style="text-align:center;">
    
    <h1 style="color:green;">
        Login Screen
    </h1>
    
    <h4>
    Email must be of normal format and the password must contain a capital letter, a number, and be of length >= 6
    </h4>
</body>
</html>

    <form id="myForm" method="POST">
        Email: <input type="text" name="email">
        Password: <input type="text" name="password">
        <input type="submit" value="Send">
    </form>

