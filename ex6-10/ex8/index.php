<?php

include 'register.php';

/*
 
 Ex 8
 index.php: This file is going to show the registration form to the user. The form must contain an input for the email and another for the user password. Once the user submit the information, it must be sent to the register.php file (explained below) using a POST method.
 
 https://www.geeksforgeeks.org/how-to-send-formdata-objects-with-ajax-requests-in-jquery/
 */

    if (!empty($_POST)) {
        echo '<br>' . 'The email is: ' . $_POST['email'] . '<br>';
        echo 'The password is: ' . $_POST['password'] . '<br>';
        
        
        validateInfo($_POST['email'],$_POST['password']);
    }
    ?>

    <form id="myForm"action="index.php" method="POST">
        Email: <input type="text" name="email">
        Password: <input type="text" name="password">
        <input type="submit" value="Send">
    </form>

<script src=
"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js">
 </script>

<script>
       $(document).ready(function () {
           $('#myForm').submit(function (e) {
               e.preventDefault();
               var formData = $(this).serialize();
               
               $.ajax({
                   url: 'https://...io/posts',
                   type: 'POST',
                   data: formData,
                   success: function (response) {
                       alert('Your form has been sent successfully.');
                   },
                   error: function (jqXHR, textStatus, errorThrown) {
                       alert('Your form was not sent successfully.');
                   }
               });
           });
       });
   </script>
