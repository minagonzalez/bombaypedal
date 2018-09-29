<?php

class Profesor
{
    private $idProfesor;
    private $nombre;
    private $apellido;
    private $antiguedad;

    public function __construct($idProfesor, $nombre, $apellido, $antiguedad)
    {
        $this->idProfesor = $idProfesor;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->antiguedad = $antiguedad;
    }

    /**
     * Get the value of idProfesor
     */ 
    public function getIdProfesor()
    {
        return $this->idProfesor;
    }

    /**
     * Set the value of idProfesor
     *
     * @return  self
     */ 
    public function setIdProfesor($idProfesor)
    {
        $this->idProfesor = $idProfesor;

        return $this;
    }

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of apellido
     */ 
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set the value of apellido
     *
     * @return  self
     */ 
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get the value of antiguedad
     */ 
    public function getAntiguedad()
    {
        return $this->antiguedad;
    }

    /**
     * Set the value of antiguedad
     *
     * @return  self
     */ 
    public function setAntiguedad($antiguedad)
    {
        $this->antiguedad = $antiguedad;

        return $this;
    }
}