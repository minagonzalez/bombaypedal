<?php
require 'funciones.php';

if(check()) {
    redirect('perfil.php');
}

if($_POST) {
    $usuario = dbEmailSearch($_POST['email']);
    if($usuario !== null) {
        if(password_verify($_POST['password'], $usuario['password']) == true) {
            login($usuario);
            redirect('perfil.php');
        } 
    }
}

?>  
<!DOCTYPE html>
<html>
    <?php require 'head.php';?>
    <body>
        <div class="container">
        
            <?php require 'navbar.php'; ?>

            <form class="form form-group row col-5" action="" method="post">
                <div class="form-group">
                    <label for="mail">E-Mail: </label>
                    <input type="email" name="email" id="mail" value="">
                </div>
                <div class="form-group">
                    <label for="password">Password: </label>
                    <input type="password" name="password" id="password" value="">
                </div>
                <div class="form-group col-12">
                    <button type="submit" class="btn btn-info">Ingresar</button>
                </div>
            </form>
        </div>
    </body>
</html>