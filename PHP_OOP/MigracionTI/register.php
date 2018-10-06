<?php
//require 'funciones.php';
require 'loader.php';


if(Auth::check()) {
    redirect('perfil.php');
}

if ($_POST) {

    $errors = [];
    //De entrada instancio mi usuario
    $usuario = new User($_POST['username'], $_POST['email'], $_POST['password']);

    //Genero los errores si los hubiera
    $errors = Validate::registerValidate($usuario, $_POST);

    if($_FILES['avatar']['error'] == 0) {
        $errors = $db->saveAvatar($_POST);
        if(count($errors) === 0 ) {
            $avatar = $db->photopath($_POST);
            $usuario->setAvatar($avatar);

        }
    }

    if (count($errors) === 0) {
        $usuarioArray = $db->createUser($usuario);
        $db->saveUser($usuarioArray);
        redirect('login.php');
    }

    $usuario = createUser($_POST);

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
                <div class="form-group col-9">
                    <label for="nombre">Username: </label>

                    <input class="form-control col-12" type="text" name="username" value="<?=isset($errors['username']) ? "" : old('username'); ?>">

                    <?php if(isset($errors['username'])): ?>
                        <div class="alert alert-danger">
                            <strong><?=$errors['username']; ?></strong>
                        </div>
                    <?php endif;?> 
                </div>

                <div class="form-group col-9">
                    <label for="email">E-Mail: </label>
                    <input class="form-control col-12" type="email" name="email" value="<?=isset($errors['email']) ? "" : old('email'); ?>">
                </div>
                    <?php if(isset($errors['email'])): ?>
                        <div class="alert alert-danger">
                            <strong><?=$errors['email']; ?></strong>
                        </div>
                    <?php endif;?> 
                <div class="form-group col-9">
                    <label for="avatar">Avatar</label>
                    <input class="form-control col-12" type="file" name="avatar">
                </div>

                <div class="form-group col-9">
                    <label for="password">Password: </label>
                    <input class="form-control col-12" type="password" name="password">
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
                <div class="form-group col-9">
                    <label for="cpasswd">Repetir Password: </label>
                    <input class="form-control col-12" type="password" name="cpassword">
                </div>
                <?php if(isset($errors['confirm'])): ?>
                    <div class="alert alert-danger">
                        <strong><?=$errors['confirm']; ?></strong>
                    </div>
                <?php endif;?>
                <div class="form-group col-9">
                    <input class="form-control col-12" type="checkbox" name="confirm" value="">
                    <label for="confirm">Acepto los terminos y condiciones.</label>
                </div>
                <div class="form-group col-9 col-12">
                    <button type="submit" class="btn btn-info">Registrarme</button>
                </div>
            </form>
        </div>
        
        <?php include_once 'scripts.php'; ?>

    </body>
</html>
