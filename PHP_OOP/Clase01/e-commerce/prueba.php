<?php

ini_set('xdebug.var_display_max_depth', '10');
ini_set('xdebug.var_display_max_children', '256');
ini_set('xdebug.var_display_max_data', '1024');

require 'Carrito.php';
require 'Producto.php';
require 'ProductoIndividual.php';
require 'Combo.php';
require 'User.php';

$pedro = new User("Piter22elloco", "1234");

// Sandwich, etc.
$hamburguesa1 = new ProductoIndividual("Hamburguesa Completa", 68.00, "Sanguches");
$sanguchepollo = new ProductoIndividual("Sanguche de pollito", 54.99, "Sanguches");
$sanguchepollo2 = new ProductoIndividual("Sanguche de pollito completo", 72.99, "Sanguches");

// Acompañamientos

$papas = new ProductoIndividual("Papas Fritas", 35.50, "Acompañamientos");
$papasProvenzal = new ProductoIndividual("Papas Fritas Provenzal", 45.90, "Acompañamientos");
$arosCebolla = new ProductoIndividual("Aros de Cebolla", 40.00, "Acompañamientos");

// Bebidas
$cocaLight = new ProductoIndividual("Coca-light", 28.00, "Bebidas");
$cocaComun = new ProductoIndividual("Coca", 28.00, "Bebidas");
$cocaZero = new ProductoIndividual("Coca Zero", 28.00, "Bebidas");



$combo1 = new Combo("", 0.00);
$combo1->setProductos($cocaLight, $hamburguesa1);

$cart = new Carrito($pedro);

$cart->setProductos($cocaLight);
$cart->setProductos($cocaComun);


$cart->setProductos("hola papu");
var_dump($combo1::DESCUENTO);
















