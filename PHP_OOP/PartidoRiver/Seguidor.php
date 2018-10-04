<?php

class Seguidor extends Usuario
{
    public function __construct($username = null, $email, $password)
    {
        parent::__construct($username, $email, $password);
    }

    public function seguir($usuario)
    {
        //...
    }

    


}