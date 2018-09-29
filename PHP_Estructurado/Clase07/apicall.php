<?php
// Seteo configuraciones de Xdebug para que si un array asociativo tiene mas 
// de 2 niveles, muestre TODO y no se corte antes
ini_set('xdebug.var_display_max_depth', 5);
ini_set('xdebug.var_display_max_children', 256);
ini_set('xdebug.var_display_max_data', 1024);

// Fin config de Xdebug

// Traigo mis helpers
include_once 'helpers.php';

// Asigno a una variable el contenido de un JSON.
// En este caso muestro como no solamente puedo hacer file_get_contents() de archivos
// sino que tambien puedo guardar endpoints de APIS (visitar el enlace para verificar que esto sea asi)
$cursos_api = file_get_contents("https://dev.digitalhouse.com/api/getcursos");

// Lo decodeo para transformarlo en un array asociativo (hagan dd() del mismo)
$cursos_array = json_decode($cursos_api, true);

// armo una funcion para guardar en un archivo .json la data que consumi en el momento que ejecute
// esta api, por el enpoint getCursos.
function guardarCursos($data)
{
    $json = json_encode($data);
    file_put_contents('cursos.json', $json, FILE_APPEND);
}

// ejecuto la funcion, que me genera un archivo cursos.json
guardarCursos($cursos_array);


//dd($cursos_array);