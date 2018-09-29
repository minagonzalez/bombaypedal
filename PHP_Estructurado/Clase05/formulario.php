<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="imprimir.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre">
        <br>
        <label for="nombre">E-mail:</label>
        <input type="text" name="email">
        <br>
        <br>
        Genero: 
        <label for="masculino">Masculino</label>
        <input type="radio" name="genero" value="masculino">
        <label for="femenino">Femenino</label>
        <input type="radio" name="genero" value="femenino">
        <br>
        <label for="Magic">Magic: The Gathering</label>
        <input type="checkbox" name="hobbies[]" value="Magic">
        <label for="Play4">PS4</label>
        <input type="checkbox" name="hobbies[]" value="PS4">
        <label for="Ferromodelismo">Trencitos</label>
        <input type="checkbox" name="hobbies[]" value="trencitos">
        <br>
        <select name="auto">
            <option value="volvo">Volvo</option>
            <option value="saab">Saab</option>
            <option value="mercedes">Mercedes</option>
            <option value="audi">Audi</option>
        </select>
        <input type="submit" value="Enviar">

    </form>
</body>
</html>