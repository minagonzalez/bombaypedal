<?php


class Suscriptor extends Usuario
{
    private $pagoMensual;
    private $seguidores = [];

    public function __construct($username, $email, $password, $pagoMensual)
    {
        parent::__construct($username, $email, $password);
        $this->pagoMensual = $pagoMensual;
    }

    public function getPagoMensual()
    {
        return $this->pagoMensual;
    }
 
    public function setPagoMensual($pagoMensual)
    {
        $this->pagoMensual = $pagoMensual;
    }

    public function seguir($usuario)
    {
        $this->usuariosSeguidos[] = $usuario;
        $usuario->setSeguidores($this->getUsername());
    }

    public function getSeguidores()
    {
        return $this->seguidores;
    }
 
    public function setSeguidores($seguidor)
    {
        $this->seguidores[] = $seguidor;
    }
}


