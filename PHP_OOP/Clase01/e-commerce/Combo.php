<?php

class Combo extends Producto
{

    private $productos;

    const DESCUENTO = 0.20;


    public function __construct(String $nombre, Float $precio, Array $productos = [])
    {
        parent::__construct($nombre, $precio);
        $this->productos = $productos;
    }

    public function getProductos()
    {
        return $this->productos;
    }

    public function setProductos($producto)
    {
        $this->productos[] = $producto;
    }

    public function getDescuento()
    {
        return self::descuento;
    }

    public function setDescuento()
    {
        $productos = $this->getProductos();
        $total = 0.00;

        foreach($productos as $producto) {
            $total = $total + $producto->getPrecio();
        }


    }




}












