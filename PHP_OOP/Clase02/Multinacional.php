<?php

class Multinacional extends Cliente
{
    private $CUIT;
    private $pais;

    public function __construct($email, $password, Cuenta $cuenta = null, $CUIT, $pais)
    {  
        parent::__construct($email, $password, $cuenta);
        $this->CUIT = $CUIT;
        $this->pais = $pais;
        
    }

    public function getCUIT()
    {
        return $this->CUIT;
    }

    public function setCUIT($CUIT)
    {
        $this->CUIT = $CUIT;
    }

    public function getPais()
    {
        return $this->pais;
    }

    public function setPais($pais)
    {
        $this->pais = $pais;
    }
}