<?php
declare(strict_types = 1);

require 'Usuario.php';
require 'Saludo.php';


$usuario1 = new Usuario("Rodo", "rodo@digitalhouse.com", "123456");

var_dump($usuario1);

echo Saludo::saludar($usuario1);
