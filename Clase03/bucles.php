<?php

$paises = [
	"Argentina"	=> [
		'esAmericano' => true,
		'ciudades' => ["Buenos Aires", "Córdoba", "Santa Fé"]
	],
	"Brasil" => [
		'esAmericano' => true,
		'ciudades' => ["Brasilia", "Rio de Janeiro", "Sao Pablo"]
	],
	"Colombia" => [
		'esAmericano' => true,
		'ciudades' => ["Cartagena", "Bogota", "Barranquilla"]
	],
	"Francia" => [
		'esAmericano' => false,
		'ciudades' => ["Paris", "Nantes", "Lyon"]
  	],
	"Italia" => [
    	'esAmericano' => false,
    	'ciudades' => ["Roma", "Milan", "Venecia"]
  	],
  	"Alemania" => [
    	'esAmericano' => false,
    	'ciudades' => ["Munich", "Berlin", "Frankfurt"]
  	],
];


foreach ($paises as $pais => $datos) {
	echo "<ul>";
	if ($datos['esAmericano'] === true) {
		echo "<h2>$pais</h2>";
			foreach ($datos['ciudades'] as $ciudad) {
				echo "<li>";
				echo $ciudad;
				echo "</li>";
			}
		}
	echo "</ul>";
}


