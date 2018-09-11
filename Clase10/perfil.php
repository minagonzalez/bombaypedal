<?php
    require 'funciones.php';

    if($_SESSION) {
        $usuario = buscamePorEmail($_SESSION["email"]);
        $username = $usuario['email'];
        
        $id = $usuario["id"];

        if (isset(glob("img/perfil$id.*")[0])) {
            $archivo = glob("img/perfil$id.*")[0];
        } else {
            $archivo = null;
        }  
    }

?>  
<!DOCTYPE html>
<html>
    <?php require 'head.php';?>
    <body>
        <div class="container">
            <?php require 'navbar.php'; ?>
            <div class="alert alert-danger" role="alert">
                No estas autorizado en este sistema <a href="register.php" class="alert-link">Registrate!</a>
            </div>
            <div class="row">
                <div class="card col-4">
                
                    <img class="card-img-top" src="" alt="avatar">

                    <img class="card-img-top" src="img/default.jpg" alt="avatar default">
                    
                    <div class="card-body">
                        <h5 class="card-title"><?="Bienvenido $username!" ?></h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, adipisci.</p>
                        <a href="#" class="btn btn-primary">Codea!</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>