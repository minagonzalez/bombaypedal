<?php
echo "<pre>";
// Ejercicio 1

$numeroEntero = 17;
echo $numeroEntero;
var_dump($numeroEntero);

echo "<hr>";

$numeroDecimal = 0.5;
echo $numeroDecimal;
var_dump($numeroDecimal);

echo "<hr>";

$ejemploCadena = "cadena de caracteres (string)";
echo $ejemploCadena;
var_dump($ejemploCadena);

echo "<hr>";

$ejemploCadena2 = 'cadena de caracteres con comillas simples';
echo $ejemploCadena2;
var_dump($ejemploCadena2);

echo "<br>";

$numeroEntero = "Le cambio el tipo de dato a string";
$ejemploCadena = 0.4;

echo "<hr>";

// Ejercicio 2

$palabra1 = "Tres";
$palabra2 = "tristes";
$palabra3 = "tigres";
$palabra4 = "tragan";
$palabra5 = "trigo";
$palabra6 = "en";
$palabra7 = "un";
$palabra8 = "trigal";

echo "<hr>";
echo $palabra1 . ' ' . $palabra2 . ' ' . $palabra3 . ' ' . $palabra4 . ' ' . $palabra5 . ' ' . $palabra6 . ' ' . $palabra7 . ' ' . $palabra8;

echo "<hr>";
echo "$palabra1 $palabra2";

// Arrays

// $miArray = [];
// $miArray[0] = "Hola";
// $miArray[] = "Chau";
// $miArray[60] = "Posicion 60";

// var_dump($miArray);


$myArray = [];
$myArray[] = "Hola";
$myArray[] = "Chau";

$myArray2 = [];
$myArray2[] = "Hola";
$myArray2[] = "Chau";
$myArray2[0] = "Lala";

// var_dump($myArray);
// var_dump($myArray2);


// Array asociativo multidimensional (obviar el codigo y observar en pantalla que muestra el var_dump)
// $arrayCeption = json_decode(file_get_contents("https://dev.digitalhouse.com/api/getComisiones"), true);
// $arrayCeption2 = json_decode(file_get_contents("https://dev.digitalhouse.com/api/getCursos"), true);
// var_dump($arrayCeption);
//var_dump($arrayCeption2);
// $fuenteCopada = "sans-serif";
// $colorFuente = "red";
// echo "<hr>";
// $titulo = $arrayCeption2['data'][0]['curso'];
// $dias = $arrayCeption['data'][2]['dias'];
// $descripcion = $arrayCeption2['data'][0]['descripcion'];

// echo "<hr>";
// echo "<h2 style='font-family: $fuenteCopada'> $titulo </h2>";
// echo "<hr>";
// echo "<h3 style='font-family: $fuenteCopada; text-transform: capitalize'> $dias </h3>";
// echo "<hr>";
// echo "<p style='color: $colorFuente; font-family: $fuenteCopada'> $descripcion </p>";
// echo "<hr>";


//Ejercicio 4

$arrayNumericoAnimales = ["Perro", "Gato", "Hamster", "Lobo", "Paloma"];

//Agrego dos nuevos animales y hago var dump

$arrayNumericoAnimales[] = "Tortuga";
$arrayNumericoAnimales[] = "Jirafa";

var_dump($arrayNumericoAnimales);

echo "me gustan los animales: $arrayNumericoAnimales[0], $arrayNumericoAnimales[1], $arrayNumericoAnimales[2], $arrayNumericoAnimales[3], $arrayNumericoAnimales[4], $arrayNumericoAnimales[5], $arrayNumericoAnimales[6]";

echo "<hr>";

//Reemplazo el primer animal:
$arrayNumericoAnimales[0] = "Elefante";

// Agrego animal a la posicion 100:
$arrayNumericoAnimales[100] = "Rinoceronte";

// Agrego nuevo animal a la posicion 16
$arrayNumericoAnimales[16] = "Mono";

// Ejercicio 5
echo "<hr>";

$arrayAuto = [
    "marca" => "Ford",
    "modelo" => "Fiesta",
    "color" => "Rojo",
    "anio" => 2001,
    "patente" => "CDN334"
];

var_dump($arrayAuto);
echo "<hr>";
// Agrego nombre del dueño con array_unshift() 
// http://php.net/manual/en/function.array-unshift.php
array_unshift($arrayAuto, "nombre_del_dueno");

var_dump($arrayAuto);
echo "<hr>";

// Agrego aseguradora a la posicion 14 usando una forma diferente
$arrayAuto[14] = "aseguradora";
var_dump($arrayAuto);
echo "<hr>";

$arrayAuto["poliza"] = "33ed44545tg";
var_dump($arrayAuto);
