<?php

    $var_a = 55;
    $var_b = 12;

    if($var_a > $var_b) {
        echo $var_a * $var_b;
    } else {
        echo "fail";
    }
    echo "<br>";
    // $var_a = 55;
    // $var_b = 12;
    echo "<br>";

    // == vs ===
    $numero1 = 10;
    $numero2 = 10;
    $numero3 = $numero1 + $numero2;

    if($numero1 === $numero2){
        // DEBILMENTE tipado
        echo "La suma de $numero1 + $numero2 es:";
        echo "<br>";
        echo $numero1 + $numero2;        
    }
    echo "<br>";

    // if($numero1 === $numero2) {
    //     //aca no va a entrar, va a seguir al else;
    // } else {
    //    echo "Comparas dos tipos de dato diferentes!";
    // }

    echo "<br>";
    // IF TERNARIO
    $variable_1 = 58;
    $variable_2 = 78;

        //      CONDICION      -> SE CUMPLE?  ->Y SI NO (ELSE)
    $max = $variable_1 > $variable_2 ? $variable_1 : $variable_2;

    echo $max;
    
    echo "<br>";

    if($variable_1 > $variable_2) {
        $maximo = $variable_1;
    } else {
        $maximo = $variable_2;
    }

    echo $maximo;

    