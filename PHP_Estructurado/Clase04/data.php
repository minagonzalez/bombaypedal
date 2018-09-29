<?php

    include_once('helpers.php');

    function numeroMagico()
   {
       return 25;
   }

   $miNumero = numeroMagico();
   echo $miNumero;

   function mayor($num1, $num2, $num3 = null)
   {
       if($num3 == null) {
        $num3 = numeroMagico();
       }
       if($num1 > $num2 && $num1 > $num3) {
           return $num1;
       } elseif ($num2 > $num1 && $num2 > $num3) {
           return $num2;
       } else {
            return $num3;
       }
   }

   echo "<br>";
   $resultado = mayor(13, 14);
   echo $resultado;


   function tabla($base, $limite)
   {
       $resultado = [];
       for ($i=$base; $i <= $limite ; $i++) { 
           $resultado[] = $i;
       }   
       return $resultado;
    }

    $tabla = tabla(45, 75);
    dd($tabla);




































