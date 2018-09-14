<?php
require 'funciones.php';

// Para ver detalladamente el funcionamiento de los Helpers, ir al archivo helpers.php

//Para ver detalladamente el proceso de cada funcion, ir a funciones.php

if(check()) {
    redirect('perfil.php');
}
// SI llega algo por POST
if($_POST) {
    // A la variable $errors asignale lo que de como resultado la funcion validate() que procese $_POST
    $errors = validate($_POST);
    // Sin importar si hay errores o no (por ahora), creamos un array de usuario con los datos de POST
    $usuario = createUser($_POST);
    // Si hay archivos, y en $_FILES la key 'error' esta seteada en 0... (para visualizar esto, hacer un dd() de $_FILES a ver que llega y COMO)
    if($_FILES['avatar']['error'] == 0) {
        //procesa con validateAvatar()
        $avatarErrors = validateAvatar($_POST);
        //y creame una nueva key en el array $usuario llamada 'avatar' a la cual le asignamos el value de lo que devuelve la funcion photoPath()
        $usuario['avatar'] = photoPath($_POST);
        //SI no esta vacio el array $avatarErrors...
        if(!empty($avatarErrors)) {
            //mergea con array_merge() todos los errores en un solo array $errors
            $errors = array_merge($errors, $avatarErrors); 
        }
    }
    //si count() de $errors es == a 0
    if(count($errors) == 0) {  
        //guarda el usuario en Json con saveUser()
        saveUser($usuario);
        //y redirigime a Login (NUNCA directo al perfil)
        redirect('login.php');
    }
}
   
?>

<!DOCTYPE html>
<html>
<?php require 'head.php'; ?>
    <body>
        <div class="container">
            <header>
            <?php require 'navbar.php' ?>
            </header>
            <main>
            <form class="form form-group row col-5 offset-2" style="padding-top: 55px;" action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="nombre">Username: </label>
<?php // if ternario!                                         SI SE CUMPLE ESTA CONDICION      SI NO                        ?>
                    <input type="text" name="username" value="<?=isset($errors['username']) ? "" : old('username'); ?>">
                    <?php //                                                            DAME ESTO    DAME ESTO               ?>
                    <?php if(isset($errors['username'])): ?>
                        <div class="alert alert-danger">
                            <strong><?=$errors['username']; ?></strong>
                        </div>
                    <?php endif;?> 
                </div>

                <div class="form-group">
                    <label for="email">E-Mail: </label>
                    <input type="email" name="email" value="">
                </div>
                    <?php if(isset($errors['email'])): ?>
                        <div class="alert alert-danger">
                            <strong><?=$errors['email']; ?></strong>
                        </div>
                    <?php endif;?> 
                <div class="form-group">
                    <label for="avatar">Avatar</label>
                    <input type="file" name="avatar">
                </div>

                <div class="form-group">
                    <label for="password">Password: </label>
                    <input type="password" name="password">
                <?php if(isset($errors['password'])): ?>
                    <div class="alert alert-danger">
                        <strong><?=$errors['password']; ?></strong>
                    </div>
                <?php elseif(isset($errors['cpassword'])): ?>
                    <div class="alert alert-danger">
                        <strong><?=$errors['cpassword']; ?></strong>
                    </div>
                <?php endif;?>
                </div>
                <div class="form-group">
                    <label for="cpasswd">Repetir Password: </label>
                    <input type="password" name="cpassword">
                </div>
                <?php if(isset($errors['confirm'])): ?>
                    <div class="alert alert-danger">
                        <strong><?=$errors['confirm']; ?></strong>
                    </div>
                <?php endif;?>
                <div class="form-group">
                    <input type="checkbox" name="confirm" value="">
                    <label for="confirm">Acepto los terminos y condiciones.</label>
                </div>
                <div class="form-group col-12">
                    <button type="submit" class="btn btn-info">Registrarme</button>
                </div>
            </form>
        </div>
        
        <?php include_once 'scripts.php'; ?>

    </body>
</html>
