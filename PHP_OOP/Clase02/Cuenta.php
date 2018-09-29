<?php

abstract class Cuenta
{
    protected $CBU;
    protected $balance;
    protected $fechaUltimoMovimiento;
    protected $titular;

    public function __construct($CBU, $balance = 0.00, $fechaUltimoMovimiento = null, $titular = null)
    {
        $this->CBU= $CBU;
        $this->balance= $balance;
        $this->fechaUltimoMovimiento= $fechaUltimoMovimiento;
    }

    public function getCBU()
    {
        return $this->CBU;
    }

    public function setCBU($CBU)
    {
        $this->CBU = $CBU;

        return $this;
    }

    public function getBalance()
    {
        return $this->balance;
    }

    protected function setBalance($balance)
    {
        $this->balance = $balance;
    }

    public function getFechaUltimoMovimiento()
    {
        return $this->fechaUltimoMovimiento;
    }

    public function setFechaUltimoMovimiento($fechaUltimoMovimiento)
    {
        $this->fechaUltimoMovimiento = $fechaUltimoMovimiento;
    }

    public function getTitular()
    {
        return $this->titular;
    }

    public function setTitular($titular)
    {
        $this->titular = $titular;
    }

    abstract public function debitar($monto, $origen);

    public function acreditar($monto)
    {
        $this->setBalance($this->getBalance() + $monto);
        $this->setFechaUltimoMovimiento(date("Y-m-d H:i:s"));
    }

    abstract public function cobrarMantenimiento();


}












