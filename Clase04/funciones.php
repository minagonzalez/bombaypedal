<?php

    // Helpers

    require 'helpers.php';    
    
    function sumar(int $num1, int $num2)
    {
        return $num1 + $num2;
    }

    echo sumar(30, 22);
    echo "<br>";
    echo sumar("40", 32); // Soy debilmente tipado!
    echo "<br>";

    function saludar($nombre, $apellido = null)
    {
        return $nombre.$apellido;
    }

    $saludo1 = saludar("Jorge", "Perez");
    $saludo2 = saludar("Natalia");
    echo "<br>";
    echo $saludo1;
    echo "<br>";
    echo $saludo2;
    echo "<br>";

    $var_a = 10;

    function sumando($var_a, $var_b)
    {
        return $var_a + $var_b;
    }


    echo sumando(15, 15);


