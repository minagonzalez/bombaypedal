<?php
// Debug
function dd(...$param)
{
    echo "<pre>";
    die(var_dump($param));
}

// Errores en if ternario
function old($field)
{
    if(isset($_POST[$field])){
        return $_POST[$field];
    }
}








