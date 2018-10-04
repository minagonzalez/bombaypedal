<?php

//Defino variables privadas para la clase Cliente

abstract class Cliente
{
  protected $email;
  protected $pass;
  protected $cuenta;

//Creo una función constructora con sus parámetros necesarios

  public function __construct($email, $pass, Cuenta $cuenta = null)
  {
    $this->email = $email;
    $this->pass = $pass;
    $this->cuenta = $cuenta;
  }

  public function setNombre($nombre)
  {
    $this->nombre = $nombre;
  }

  public function getNombre()
  {
    return $this->nombre;
  }

  public function setApellido($apellido)
  {
    $this->apellido = $apellido;
  }

  public function getApellido()
  {
    return $this->apellido;
  }

  public function setDocumento($documento)
  {
    $this->documento = $documento;
  }

  public function getDocumento()
  {
    return $this->documento;
  }

  public function setNacimiento($nacimiento)
  {
    $this->nacimiento = $nacimiento;
  }

  public function getNacimiento()
  {
    return $this->nacimiento;
  }

  public function setEmail($email)
  {
    $this->email = $email;
  }

  public function getEmail()
  {
    return $this->email;
  }

  public function setPass($pass){
    $this->pass = $pass;
  }

  public function getPass()
  {
    return $this->pass;
  }

  public function getCuenta()
  {
    return $this->cuenta;
  }
 
  public function setCuenta($cuenta)
  {
    $this->cuenta = $cuenta;
  }
}
