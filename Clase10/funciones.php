<?php
session_start();
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

    if(!isset($data['confirm'])) {
        $errors['confirm'] = "Tenes que aceptar terminos y condiciones";
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

// traerTodaLaBase = conexion
// buscamePorEmail 

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

function dbEmailSearch($email)
{
    $users = dbConnect();
    foreach($users as $user) {
        if($user['email'] === $email) {
            return $user;
        }
    }
    return null;
}

function login($user)
{
    $_SESSION['username'] = $user['username'];
    setcookie('username', $user['username'], time() + 3600 * 24 * 7, "/");
}

function logout()
{
    if(!isset($_SESSION)) {
        session_start();
    }
    session_destroy();
    setcookie('username', null, time() -1);
    redirect('register.php');

}

//logout();




















































































































