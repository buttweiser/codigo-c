<?php


// Variables superglobales

//Variables de servidor

echo $_SERVER['SERVER_ADDR']."<br/>";

echo $_SERVER['SERVER_NAME']."<br/>";

echo $_SERVER['SERVER_SOFTWARE']."<br/>";

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<!-- VARIABLES GET Y POST-->
<h1>Formulario en PHP</h1>
<form action="recibir.php" method="GET">
    <p>
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre">
    </p>

    <P>
        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos">
    </P>

    <input type="submit" value="Enviar"/>
</form>

<form action="recibir.php" method="POST">
    <p>
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre">
    </p>

    <P>
        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos">
    </P>

    <input type="submit" value="Enviar Datos"/>
</form>

</body>
</html>