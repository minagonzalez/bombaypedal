<?php
ini_set('xdebug.var_display_max_depth', '10');
ini_set('xdebug.var_display_max_children', '256');
ini_set('xdebug.var_display_max_data', '1024');

require 'User.php';
require 'Suscriptor.php';
require 'Seguidor.php';

$bort = new Suscriptor("Bort", "bort@gmail.com", "1234", 25);
$laloLanda = new Suscriptor("LaloLanda", "lalo@gmail.com", "1234", 25);

$laloLanda->seguir($bort);
$bort->seguir($laloLanda);


var_dump($laloLanda);