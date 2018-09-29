<?php

class ManagerSistema
{
    private $cursos = [];
    private $profesores = [];
    private $alumnos = [];

    public function __construct($cursos = null, $profesores = null, $alumnos = null)
    {
        $this->cursos = $cursos;
        $this->profesores = $profesores;
        $this->alumnos = $alumnos;
    }
    


    public function getCursos()
    {
        return $this->cursos;
    }

    public function setCursos($curso)
    {
        $this->cursos[] = $curso;

    }

    public function getProfesores()
    {
        return $this->profesores;
    }


    public function setProfesores($profesor)
    {
        $this->profesores[] = $profesor;
    }


    public function getAlumnos()
    {
        return $this->alumnos;
    }

    public function setAlumnos($alumno)
    {
        $this->alumnos[] = $alumno;
    }
}