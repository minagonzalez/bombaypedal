<?php
    require 'funciones.php';

    // if(guest()) {
    //     redirect('register.php');
    // }
    // si me llega una $_SESSION con la key 'email' seteada...
    if(isset($_SESSION['email'])) {
        // buscame el usuario por mail y guardalo en $user (necesitamos usar los otros datos y solamente tenemos el email guardado en session!)
        $user = dbEmailSearch($_SESSION['email']);
        // asigname a $username el nombre de usuario
        $username = $user['username'];
        // Si tiene una foto de perfil, va a tener una key 'avatar' seteada...
        if(array_key_exists('avatar', $user)){
            // Entonces asigname el valor de esa key a la variable $avatar
            $avatar = $user['avatar'];
        }
    }

?>  
<!DOCTYPE html>
<html>
    <?php require 'head.php';?>
    <body>
        <div class="container">

            <?php require 'navbar.php'; ?>
            <?php //Checkeamos que no sea un GUEST, y en caso de serlo, error ?>
            <?php if(guest()):?>
            <div class="alert alert-danger" role="alert">
                No estas autorizado en este sistema <a href="register.php" class="alert-link">Registrate!</a>
            </div>
            <?php else: ?>
            <div class="row">
                <div class="card col-4">
                    <?php //si NO TIENE AVATAR ?>
                    <?php if(!isset($user['avatar'])):?>
                    <?php //si Cargame la imagen de d10s ?>
                    <img class="card-img-top" src="img/default.jpg" alt="avatar default">
                    <?php else: ?>
                    <?php // ELSE -----> cargame su avatar ?>
                    <img class="card-img-top" src="img/<?=$avatar?>" alt="avatar">
                    <?php endif;?>

                    
                    <div class="card-body">
                        <h5 class="card-title"><?="Bienvenido $username!" ?></h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, adipisci.</p>
                        <a href="#" class="btn btn-primary">Codea!</a>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>

        <?php include_once 'scripts.php'; ?>
        
    </body>
</html>