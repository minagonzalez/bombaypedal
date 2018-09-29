<?php

class Carrito
{
    private $usuario;
    private $productos;
    private $total;

    public function __construct(User $usuario, Array $productos = [], Float $total = 0.0)
    {
        $this->usuario = $usuario;
        $this->productos = $productos;
        $this->total = $total;
    }


    public function getProductos()
    {
        return $this->productos;
    }


    public function setProductos(Producto $producto)
    {
        $this->productos[] = $producto;
    }


    public function getTotal()
    {

        $total = 0.0;
        $productos = $this->getProductos();

        foreach($productos as $producto) {
            $total = $total + $producto->getPrecio();
        }

        return $total;

    }

    public function setTotal($total)
    {
        $this->total = $total;
    }

    public function getUsuario()
    {
        return $this->usuario;
    }

    public function setUsuario(User $usuario)
    {
        $this->usuario = $usuario;

    }
}

