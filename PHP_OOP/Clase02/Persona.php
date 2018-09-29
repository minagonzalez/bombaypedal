<?php

class Persona extends Cliente
{
    private $nombre;
    private $apellido;
    private $documento;
    private $nacimiento;

    public function __construct($email, $pass, Cuenta $cuenta = null, $nombre, $apellido, $documento, $nacimiento)
    {
        
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->documento = $documento;
        $this->nacimiento = $nacimiento;
        parent::__construct($email,$pass, $cuenta);
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getApellido()
    {
        return $this->apellido;
    }

    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }
 
    public function getDocumento()
    {
        return $this->documento;
    }
 
    public function setDocumento($documento)
    {
        $this->documento = $documento;
    }

    public function getNacimiento()
    {
        return $this->nacimiento;
    }
 
    public function setNacimiento($nacimiento)
    {
        $this->nacimiento = $nacimiento;
    }

}