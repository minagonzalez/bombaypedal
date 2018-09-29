<?php
    function checkboxGen()
    {
        $file = fopen("categorias.json", "r");

        while ($linea = fgets($file)) {
            if (strpos($linea, "nombre") != 0) {
                $array[] = substr($linea, 0, -2);
            }
        }

        fclose($file);
        
        foreach ($array as $value) {
            $arrayTerminado[] = json_decode($value, true);
        }
        return $arrayTerminado;
    }

 ?>
 <!DOCTYPE html>
 <html>
     <head>
         <meta charset="utf-8">
         <title>PHP - JSON</title>
     </head>
     <body>
         <form action="json.php" method="post">
            <?php foreach (checkboxGen() as $array): ?>
                <input type="checkbox" name="<?=$array["nombre"]?>" value="<?=$array["id"]?>">
                <label for="<?=$array["nombre"]?>"><?=$array["nombre"]?></label>
            <?php endforeach; ?>
         </form>
     </body>
 </html>
