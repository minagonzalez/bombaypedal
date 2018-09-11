<?php

function dd(...$param)
{
    echo "<pre>";
    die(var_dump($param));
}

function old($field)
{
    if($_POST[$field]){
        return $_POST[$field];
    }
}








