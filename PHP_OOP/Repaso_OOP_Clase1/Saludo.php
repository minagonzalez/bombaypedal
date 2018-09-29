<?php

class Saludo
{
    public static function saludar(Usuario $user): String
    {
        $mensaje = "Hola ";
        $nombre = $user->getNombre();

        return $mensaje . " " . $nombre . "!";
        
    }
}