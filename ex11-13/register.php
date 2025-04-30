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
        $myUser = new User($_POST['email'],$_POST['password']);
        $myUser->setCreatedAt(date("Y-m-d H:i:s"));
        if(addNewUser($myUser) == 0){
            echo '<br>'. "db has accepted" . '<br>';
            //session_start();
            if (!isset($_SESSION['counter'])) {
                $_SESSION['counter'] = 1;
            } else {
                $_SESSION['counter']++;
            }
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
    Lets Create You An Account!
</h1>

<h4>
    Some specifications: <br>
    Email must be of normal format and the password must contain a capital letter, a number, and be of length >= 6
</h4>
</body>
</html>

<form id="myForm" method="POST">
    Email: <input type="text" name="email">
    Password: <input type="text" name="password">
    <input type="submit" value="Send">
</form>

