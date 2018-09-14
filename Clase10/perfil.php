<?php
    require 'funciones.php';

    if(isset($_SESSION['email'])) {
        $user = dbEmailSearch($_SESSION['email']);
        $username = $user['username'];
        if(array_key_exists('avatar', $user)){
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
            
            <?php if(guest()):?>
            <div class="alert alert-danger" role="alert">
                No estas autorizado en este sistema <a href="register.php" class="alert-link">Registrate!</a>
            </div>
            <?php else: ?>
            <div class="row">
                <div class="card col-4">

                    <?php if(!isset($user['avatar'])):?>
                    <img class="card-img-top" src="img/default.jpg" alt="avatar default">
                    <?php else: ?>
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