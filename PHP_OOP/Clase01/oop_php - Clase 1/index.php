<?php

require 'Classes/loader.php';

// Si no se ven los objetos o los arrays formateados correctamente, descomentar 
// la siguiente linea:
// echo '<pre>';

$ManagerSistema = new ManagerSistema();

$alumno1 = new Alumno("al01", "Pablo", "O'Connor", "pablo@gmail.com");

$alumno2 = new Alumno("al02", "Pedro", "Vazquez", "pedro@gmail.com");


$curso = new Curso("FS001", "FullStack", 15);

$profesor1 = new Profesor("pr001", "Daniel", "Fuentes", 1);

$ManagerSistema->setAlumnos($alumno1);
$ManagerSistema->setAlumnos($alumno2);

$ManagerSistema->setCursos($curso);
$ManagerSistema->setProfesores($profesor1);

$ManagerSistema->getAlumnos();


var_dump($ManagerSistema); 
















