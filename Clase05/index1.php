<?php
if ($_GET) {
    echo 'Llegó el valor "' . $_GET['prueba'] . '" por GET.';
}

if ($_POST) {
    echo 'Llegó el valor "' . $_POST['prueba'] . '" por POST.';
}

?>

<!DOCTYPE HTML>
<html>
<body>

    <form action="" method="post">
        <label for="prueba">Prueba:</label>
        <input type="text" name="prueba">
        <input type="submit">
    </form>

</body>
</html>
