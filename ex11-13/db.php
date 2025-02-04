<?php

include 'user.php';



    function checkLogin($mail,$pw): int {
        $user = 'pw2user';
        $pass = 'pw2pass';
        $connect = new PDO('mysql:host=mysql;dbname=PW2_project_db', $user, $pass);
        $statement = $connect->prepare('SELECT * FROM user WHERE email = :theMail AND password = :thePass');

        $statement->bindParam(':theMail', $mail);
        $statement->bindParam(':thePass', $pw);
        $statement->execute();

        $res = $statement->fetchAll(PDO::FETCH_ASSOC);
        if(sizeof($res) <= 0){
            echo '<br>' . "there was a problem with your info, even tho the db accepts, you arent signed in" . '<br>';
        }else{
            var_dump($res);
        }
        return 0;
    }

    function addNewUser(User $newUser): int {
        $user = 'pw2user';
        $pass = 'pw2pass';
        $connect = new PDO('mysql:host=mysql;dbname=PW2_project_db', $user, $pass);
        $statement = $connect->prepare('INSERT INTO `user` (`email`, `password`) VALUES (:newMail, :newPass)');
        $email = $newUser->getEmail();
        $pass = $newUser->getPassword();
        $statement->bindParam(':newMail', $email);
        $statement->bindParam(':newPass', $pass);
        $statement->execute();
       return 0;
    }

function addNewUser2($newMail, $newPass): int {
    $user = 'pw2user';
    $pass = 'pw2pass';
    $connect = new PDO('mysql:host=mysql;dbname=PW2_project_db', $user, $pass);
    $statement = $connect->prepare('INSERT INTO `user` (`email`, `password`) VALUES (:newMail, :newPass)');
    $statement->bindParam(':newMail', $newMail);
    $statement->bindParam(':newPass', $newPass);
    $statement->execute();
    return 0;
    }

