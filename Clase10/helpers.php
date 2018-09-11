<?php

function dd(... $params)
{
    echo "<pre>";
    die(var_dump($params));
}

function old($param)
{
    if($_POST[$param]){
        return $_POST[$param];
    }
}








