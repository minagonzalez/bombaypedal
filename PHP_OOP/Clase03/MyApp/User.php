<?php

namespace MyApp;

/**
 * Ejemplo de como usamos una libreria externa con nombres de 
 * clase que ya tenemos asignados. RegisterUtils tiene una class
 * User pero la "usamos como" Utils!
 */
use RegisterUtils\User as Utils;

abstract class User
{
    protected $username;
    protected $password;
    protected $email;

    public function __construct($username, $password, $email)
    {
        $this->username = $username;
        $this->password = $this->setPassword($password);
        $this->email = $this->setEmail($email);
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getPassword()
    {
        return $this->password;
    }

    // Nuestro anterior setter de password

    // private function setPassword($password)
    // {
    //     $this->password = $password;
    // }

    // Nuestro nuevo setter para la pass, ahora privado
    // y haciendo uso de la libreria externa

    protected function setPassword($password)
    {
        return Utils::crypter($password);
    }

    public function getEmail()
    {
        return $this->email;
    }

    // public function setEmail($email)
    // {
    //     $this->email = $email;
    // }

    public function setEmail($email)
    {
        return Utils::emailVerify($email);
    }


}