<?php

class Usuario
{

    private $nombre;
    private $email;
    private $pass;

    public function __construct(String $nombre, String $email, String $pass)
    {
        $this->nombre = $nombre;
        $this->email = $this->setEmail($email);
        $this->pass = $this->setPass($pass);
    }

    public function getNombre(): String
    {
        return $this->nombre;
    }

    public function setNombre(String $nombre)
    {
        $this->nombre = $nombre;
    }

    public function getEmail(): String
    {
        return $this->email;
    }

    public function setEmail(String $email)
    {
        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return $email;
        }
    }

    public function getPass(): String
    {
        return $this->pass;
    }

    private function encriptarPass(String $string)
    {
       return password_hash($string, PASSWORD_DEFAULT);
    }

    public function setPass(String $pass)
    {
        $error = "La pass es corta";
        if(strlen($pass) > 3) {
            return $this->pass = $this->encriptarPass($pass);
        }
        return $error;
    }
}

