<?php

include 'validate.php';
include 'db.php';




/*

 Ex 11
 index.php: This file is going to show the registration form to the user. The form must contain an input for the email and another for the user password.


 https://www.w3schools.com/php/php_mysql_select.asp
 */


?>

<!DOCTYPE html>
<html>


<body style="text-align:center;">

<h1 style="color:green;">
    Lets Find You A Picture!
</h1>

<h4>
    Some specifications: <br>
    Enter a word into the search bar and we are going to pull pictures up from an API!
</h4>
</body>
</html>

<form id="myForm" method="POST">
    Your Input: <input type="text" name="inputUser">
    <input type="submit" value="Send">
</form>

