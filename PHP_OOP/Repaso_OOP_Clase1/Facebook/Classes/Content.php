<?php

abstract class Content 
{
    protected $descripcion;
    protected $user;

    public function __construct(String $descripcion, User $user)
    {
        $this->descripcion = $descripcion;
        $this->user = $user;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    public function getUser()
    {
        return $this->user;
    }

}