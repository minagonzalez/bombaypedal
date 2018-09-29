<?php

class ProductoIndividual extends Producto
{
    private $categoria;

    public function __construct(String $nombre, Float $precio, String $categoria)
    {
        parent::__construct($nombre, $precio);
        $this->categoria = $categoria;
    }

    public function getCategoria()
    {
        return $this->categoria;
    }

    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
    }
}