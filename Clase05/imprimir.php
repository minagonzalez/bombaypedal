<?php
include_once('helpers.php');
//dd($_POST);
if($_POST) {
    $errorDeMail = "El email no es valido!";
    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        echo "<h1>" . $errorDeMail . "</h1>";
        exit;
    }

    if(strlen($_POST['password']) < 3) {
        // error
    }

    foreach($_POST as $key => $value) {
        if(is_array($value)) {
            for ($i=0; $i < count($value) ; $i++) { 
                echo $value[$i] . "<br>";
            }
        } else {
            echo $key . ": " . $value . "<br>";
        }
    }
}





















