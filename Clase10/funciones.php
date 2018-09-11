<?php

require 'helpers.php';

function validate($data)
{
    $errors = [];

    $username = trim($data['username']);
    if($username == "") {
        $errors['username'] = "Capo me dejaste el username vacio";
    }

    $email = trim($data['email']);

    if($email == "") {
        $errors['email'] = "Me dejaste el email vacio!";
    } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "El email no es valido, crack";
    }

    $password = trim($data['password']);
    $cpassword = trim($data['cpassword']);
    
    if($password == "") {
        $errors['password'] = "Me dejaste la pass vacia!";
    } elseif($password < 4) {
        $errors['password'] = "La pass debe ser de al menos 4 caracteres!";
    }

    if($password != $cpassword) {
        $errors['cpassword'] = "Las contraseñas no coinciden";
    }

    return $errors;

}
function saveAvatar($usuario) 
{

    $errores = [];
    
    $id = $usuario["id"];

    if ($_FILES["avatar"]["error"] == UPLOAD_ERR_OK) {

        $nombre = $_FILES["avatar"]["name"];
        $archivo = $_FILES["avatar"]["tmp_name"];

        $ext = pathinfo($nombre, PATHINFO_EXTENSION);

        if ($ext != "jpg" && $ext != "png" && $ext != "jpeg") {
            $errores["avatar"] = "Solo acepto formatos jpg y png";
            return $errores;
        }

        $miArchivo = dirname(__FILE__);

        $miArchivo = $miArchivo . "/img/";

        $miArchivo = $miArchivo. "perfil" . $id . "." . $ext;

        move_uploaded_file($archivo, $miArchivo);

    } else {

        $errores["avatar"] = "Hubo un error al procesar el archivo";

    }

    return $errores;
}
