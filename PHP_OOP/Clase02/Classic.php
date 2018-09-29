<?php

class Classic extends Cuenta
{
    public function debitar($monto, $origen = null)
    {
        switch ($origen) {
			case 'Banelco':
				$this->balance = $this->balance - $monto * 1.05;
                break;
            case 'Link':
                $this->balance = $this->balance - $monto * 1.10;
                break;
            case 'Caja':
                $this->balance = $this->balance - $monto;
                break;
            default:
                $this->balance = $this->balance - $monto;
       }
    }
    
    public function cobrarMantenimiento()
    {
        $this->balance = $this->getBalance() - 100;
    }

    
}

