<?php

session_start();
require 'helpers.php';

function validarUsername($username)
{
    $errores = [];
    $users = dbConnect();
    foreach($users as $user){
        if($user['username'] == $username ) {
            return false;
        }
    } return true;

}

function validate($data)
{
    $errors = [];

    $username = trim($data['username']);

    if($username == "") {
        $errors['username'] = "Capo me dejaste el username vacio";
    } elseif(validarUsername($username) == false) {
        $errors['username'] = "Capo el user ya esta registrado";
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

    if(!isset($data['confirm'])) {
        $errors['confirm'] = "Tenes que aceptar terminos y condiciones";
    }

    return $errors;

}

function validateAvatar($data) 
{
    $errores = [];

    $username = $data["username"];
    
    if($_FILES["avatar"]["error"] == UPLOAD_ERR_OK) {
        $nombre = $_FILES["avatar"]["name"];
        $archivo = $_FILES["avatar"]["tmp_name"];
        
        $ext = pathinfo($nombre, PATHINFO_EXTENSION);

        if($ext != "jpg" && $ext != "png" && $ext != "jpeg") {
            $errores["avatar"] = "Solo acepto formatos jpg y png";
            return $errores;
        }

        $miArchivo = dirname(__FILE__);
        $miArchivo = $miArchivo . "/img/";
        $miArchivo = $miArchivo. "perfil" . $username . "." . $ext;
        move_uploaded_file($archivo, $miArchivo);

    } else {
        $errores["avatar"] = "Hubo un error al procesar el archivo";
    }
    return $errores;
}

function photoPath($data)
{

    $username = $data["username"];
    $nombre = $_FILES["avatar"]["name"];
    $ext = pathinfo($nombre, PATHINFO_EXTENSION);
    $miArchivo = "perfil" . $username . "." . $ext;

    return $miArchivo;
}



function createUser($data)
{
    $usuario = [
        'username' => $data['username'],
        'email' => $data['email'],
        'password' => password_hash($data['password'], PASSWORD_DEFAULT),
        'role' => 1
    ];

    $usuario['id'] = idGenerate();

    return $usuario;

}

function idGenerate()
{
    $file = file_get_contents("users.json");

    if($file == "") {
        return 1;
    }

    $users = explode(PHP_EOL, $file);
    array_pop($users);

    $lastUser = $users[count($users) - 1];
    $lastUser = json_decode($lastUser, true);

    return $lastUser['id'] + 1;

}

function saveUser($user)
{
    $jsonUser = json_encode($user);
    file_put_contents('users.json', $jsonUser . PHP_EOL, FILE_APPEND);
}

function dbConnect()
{
    $db = file_get_contents('users.json');
    $arr = explode(PHP_EOL, $db);
    array_pop($arr);

    foreach($arr as $user) {
        $usersArray[] = json_decode($user, true);
    }

    return $usersArray;

}
// Busqueda x email
function dbEmailSearch($email)
{
    // Donde buscamos x email a un usuario? En el array que genera la conexion emulada!
    $users = dbConnect();
    // POR CADA $users COMO $user...
    foreach($users as $user) {
        // SI el email de algun $user es === a $email (lo que lleva por parametro)
        if($user['email'] === $email) {
            // Devolveme el $user
            return $user;
        }
    }
    //Si con lo de arriba no paso nada, devolveme null
    return null;
}

function login($user)
{
    $_SESSION['email'] = $user['email'];
    setcookie('email', $user['email'], time() + 3600 * 24 * 7, "/");
}

function logout()
{
    if(!isset($_SESSION)) {
        session_start();
    }
    session_destroy();
    setcookie('email', null, time() -1);
    redirect('register.php');

}




















































































































