<?php

class Producto
{
    private $nombre;
    private $precio;

    public function __construct(String $nombre, Float $precio) 
    {
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    public function getNombre(): String
    {
        return $this->nombre;
    }

    public function setNombre(String $nombre)
    {
        $this->nombre = $nombre;
    }

    public function getPrecio(): Float
    {
        return $this->precio;
    }

    public function setPrecio(Float $precio)
    {
        $this->precio = $precio;
    }
}