<?php

class User
{
    private $username;
    private $password;

    public function __construct(String $username, String $password) 
    {
        $this->username = $username;
        $this->password = $password;
    }

    public function getUsername(): String
    {
        return $this->username;
    }

    public function setUsername(String $userName)
    {
        $this->username = $userName;
    }
 
    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;

    }
}



























