<?php
include_once("helpers.php");

    if($_POST) {

        if(isset($_POST['confirm'])) {
            echo "Llegue";
        } else {
            echo "Error";
        }
        dd($_POST);
    }

?>  
<!DOCTYPE html>
<html>
    <?php include_once('head.php'); ?>
    <body>
        <div class="container">
            <form class="form form-group row col-5 offset-2" style="padding-top: 55px;" action="" method="post">
                <div class="form-group">
                    <label for="mail">E-Mail: </label>
                    <input type="text" name="email" value="">
                </div>
                <div class="form-group">
                    <label for="passwd">Password: </label>
                    <input type="password" name="password">
                </div>
                <div class="form-group">
                    <label for="cpasswd">Repetir Password: </label>
                    <input type="password" name="cpassword">
                </div>
                <div class="form-group">
                    <input type="checkbox" name="confirm" value="">
                    <label for="confirm">Acepto los terminos y condiciones.</label>
                </div>
                <div class="form-group col-12">
                    <button type="submit" class="btn btn-info">Enviar</button>
                </div>
            </form>
        </div>
    </body>
</html>
