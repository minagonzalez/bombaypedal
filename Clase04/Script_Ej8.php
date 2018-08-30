<?php

    //Funciones propias de PHP que vamos a utilizar:

    //readline()
    //http://php.net/manual/en/function.readline.php

    //system()
    //http://php.net/manual/en/function.system.php

    //implode()
    //http://php.net/manual/en/function.implode.php

    //explode()
    //http://php.net/manual/en/function.explode.php

    //Declaramos la funcion hobbyValido del punto D al principio del script
    function hobbyValido($str1) {
        if (strlen($str1) <= 15 && strlen($str1) >= 3) {
            return true;
        }
        return false;
    }

    // Vamos a pasar comando 'clear' a la terminal usando la funcion system().
    // Esto es para limpiar la pantalla de la terminal en cuanto nuestro programa es ejecutado
    system('clear');

    echo "Hola Mundo!\n";

    //Usamos la funcion readline() de PHP para guardar el nombre del usuario en la variable $nombre
    //Luego lo saludamos con echo().
    $nombre = readline("Ingrese su nombre: ");
    echo "\nBienvenido $nombre\n\n";

    //Como con el nombre, ahora pedimos la edad y la almacenamos en $edad para procesarla con un if
    //segun lo que pide el punto C
    $edad = readline("Ingresa tu edad: ");
    if ($edad >= 18) {
        echo "\nAutorización exitosa.\n\n";
    } else {
        echo "Usted no está autorizado en el sistema.\n\n";
    }

    //seguimos usando readline() para asignar los hobbies a una variable $hobbies, 
    //que va a ser escrita por el usuario segun le digamos, separando los hobbies con ","
    $hobbies = readline('Ingresar hobbies separados por ", " (ej. colleccionismo, modelismo, dibujo...): ');
    echo "\n";

    //Armamos el array de hobbies haciendo un explode() de la variable $hobbies.
    //El primer parametro para explode() es ", " (coma y espacio), y el segundo la variable.
    $hobbiesarray = explode(", ", $hobbies);

    //Y finalmente recorremos el array creado con un foreach para validar los hobbies que el usuario nos dio.
    foreach ($hobbiesarray as $hobbie) {
        if (hobbyValido($hobbie) == true) {
            if (readline ("Usted confirma que le gusta $hobbie ? (si, no): ") == "si") {
                $hobbiesValidos[] = $hobbie;
            }
        }
    }

    //con implode() armamos de nuevo un string  de hobbies usando como primer parametro o 
    //"pegamento" una coma y un espacio, y segundo parametro el array que habiamos creado con explode()
    $hobbie = implode(", ", $hobbiesValidos);


    echo "\nNombre: $nombre\n";
    echo "Apellido: $edad\n";
    echo "Hobbies: $hobbie\n";


?>