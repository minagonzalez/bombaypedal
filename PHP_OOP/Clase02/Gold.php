<?php

class Gold extends Cuenta
{
    public function debitar($monto, $origen = null)
    {
        $origen = "Link" ? $this->getBalance() - $monto * 1.05 : $this->getBalance() - $monto;
    }

    public function cobrarMantenimiento()
    {
        if($this->titular instanceof Persona) {
            $this->balance = $this->getBalance() - (strlen($this->titular->getApellido()) * 5);

        } elseif($this->titular instanceof Multinacional || $this->titular instanceof Multinacional) {
            $this->balance = $this->getBalance() - (strlen($this->titular->getRazonSocial()) * 10);
        }
    }
}