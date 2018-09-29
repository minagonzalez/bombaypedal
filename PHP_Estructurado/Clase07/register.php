<?php

require('funciones.php');
require('paises.php');

if($_POST){
    $errors = validate($_POST);
    // if(count($errors) <= 0) {
    //     header("Location: exito.php");
    //     exit;
    // }

}



    
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Demo Validacion</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <style>
            body {
                background-color: #fff;
            }

            ul {
                padding: 0;
                list-style: none;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="margin-bottom: 55px;">
                <a class="navbar-brand" href="index.php">Home</a>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                        <li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>
                        <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </nav>
            <form class="form form-group row col-5 offset-2" style="padding-top: 55px;" action="" method="post" enctype="multipart/form-data">

                <div class="form-group">
 
                    <label for="nombre">Username: </label>
                    <input type="text" name="username" value="<?=isset($errors['username']) ? $errors['username'] : old('username'); ?>">
                    <?php if(isset($errors['username'])): ?>
                        <div class="alert alert-danger">
                            <strong><?=$errors['username']; ?></strong>
                        </div>
                    <?php endif;?> 
                </div>

                <div class="form-group">
                    <label for="mail">E-Mail: </label>
                    <input type="text" name="email" value="<?=(isset($errors['email'])) ? "" : old('email'); ?>">
                <?php if(isset($errors['email'])): ?>
                    <div class="alert alert-danger">
                        <strong><?=$errors['email']; ?></strong>
                    </div>
                <?php endif;?>
                </div>
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

                <?php if(!isset($_GET['versioncorta'])): ?>
                <div class="form-group">
                    <label for="cpasswd">Repetir Password: </label>
                    <input type="password" name="cpassword">
                </div>
                <?php endif; ?>

                <div class="form-control">
                    <label for="paises">Seleccione su Pais:</label>
                    <select name="pais" id="">
                        <option hidden selected disabled value="<?=isset($errors['pais']) ? $errors['pais'] : old('pais') ?>">Seleccione su pais...</option>
                    <?php foreach($paises as $pais): ?>
                        <option value="<?=$pais?>">
                            <?=$pais?>
                        </option>
                    <?php endforeach; ?>

                    </select>
                <?php if(isset($errors['pais'])): ?>
                    <div class="alert alert-danger">
                        <strong><?=$errors['pais']; ?></strong>
                    </div>
                <?php endif;?>
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
    </body>
</html>
