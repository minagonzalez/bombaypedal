<?php
    session_start();
    require 'helpers.php';
    
    $color = "white";

    if(isset($_COOKIE)) {
        $color = $_COOKIE['color'];
    }

    if($_POST) {
        if(isset($_POST['reiniciar'])) {
            setcookie("color", "white", time() + 3600 * 24 * 7);
        } else {
            $color = $_POST['color'];
            setcookie("color", $color, time() + 3600 * 24 * 7);
            header('Location: colores-session.php');
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body style="background-color:<?=$color; ?>">

    <form action="colores-session.php" method="post">
        <select name="color">
            <option value="black">Negro</option>
            <option value="blue">Azul</option>
            <option value="red">Rojo</option>
        </select>
        <div class="">
            <input type="submit" name="mandar" value="Mandar">
            <input type="submit" name="reiniciar" value="Reset">
        </div>
    </form>
</body>
</html>
