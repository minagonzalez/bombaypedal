<?php

require_once('helpers.php');


function validate($data)
{
    $errors = [];
    //si me manda username vacio, dar error
    if($data['username'] == "") {
        $errors['username'] = "Capo me dejaste el username vacio";
    }

    return $errors;
}