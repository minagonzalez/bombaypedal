<?php
//require 'funciones.php';
require 'loader.php';

if(Auth::check()) {
    redirect('perfil.php');
}

if($_POST) {
    $usuarioArray = $db->emailDbSearch($_POST['email']);
    $user = new User($usuarioArray['username'], $usuarioArray['email'], $usuarioArray['password'], $usuarioArray['role']);
    $arrayErr = [];

    if($usuarioArray !== null) {
        $error = "Nombre de usuario o pass incorrectos";
        !Validate::loginValidate($_POST['password'], $user) ? $arrayErr['login'] = $error : Auth::login($user);
        redirect('perfil.php');

    }
}

?> 
<!DOCTYPE html>
<html>
    <?php require 'head.php';?>
    <body>
        <div class="container">

        <?php require 'navbar.php'; ?>

        <?php if(!empty($arrayErr)): ?>
            <div class="alert alert-danger col-4">
                <strong><?=$arrayErr['login']; ?></strong>
            </div>
        <?php endif; ?>
            <form class="form form-group row col-5" action="" method="post">
                <div class="form-group col-12">
                    <label for="mail">E-Mail: </label>
                    <input class="form-control" type="email" name="email" id="mail" value="">
                </div>
                <div class="form-group col-12">
                    <label for="password">Password: </label>
                    <input class="form-control" type="password" name="password" id="password" value="">
                </div>
                <div class="form-group col-12">
                    <button type="submit" class="btn btn-info">Ingresar</button>
                </div>
            </form>
        </div>
    </body>
</html>