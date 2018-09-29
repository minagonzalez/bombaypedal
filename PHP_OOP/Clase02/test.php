<?php

require 'Cliente.php';
require 'Persona.php';
require 'Multinacional.php';
require 'Cuenta.php';
require 'Classic.php';
require 'Gold.php';

$classicDeRodo = new Gold(2344433443);
$persona = new Persona("rodo@gmail.com", "1234", $classicDeRodo, "Rodo", "Fuentes", "40655444", "18-10-1995");

$classicDeRodo->setTitular($persona);

$persona->getCuenta()->acreditar(200000);

$classicDeRodo->cobrarMantenimiento();



var_dump($persona);