<?php

class Multinacional extends Cliente
{
    private $CUIT;
    private $razonSocial;

    public function __construct($email, $password, Cuenta $cuenta = null, $CUIT, $razonSocial)
    {  
        parent::__construct($email, $password, $cuenta);
        $this->CUIT = $CUIT;
        $this->razonSocial = $razonSocial;
        
    }

    public function getCUIT()
    {
        return $this->CUIT;
    }

    public function setCUIT($CUIT)
    {
        $this->CUIT = $CUIT;
    }

    public function getRazonSocial()
    {
        return $this->razonSocial;
    }

    public function setRazonSocial($razonSocial)
    {
        $this->razonSocial = $razonSocial;
    }
}