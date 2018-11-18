<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formularios PHP y HTMl</title>
</head>
<body>
    <h1>Formulario</h1>
        <form action="enviar.php" method="POST" enctype="multipart/form-data">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre">

            <label for="apellido">Apellido:</label>
            <input type="text" name="apellido">

            <label for="boton">boton:</label>
            <input type="button" name="boton" value="haz click">

            <label for="sexo">Sexo:</label>
            Hombre:<input type="checkbox" name="sexo" value="hombre">
            Mujer:<input type="checkbox" name="sexo" value="mujer" checked="checked">

            <label for="color">Color:</label>
            <input type="color" name="color">

            <label for="date">Fecha:</label>
            <input type="date" name="date">

            <label for="correo">Email:</label>
            <input type="email" name="correo">

            <label for="archivo">Archivo:</label>
            <input type="file" name="archivo" multiple="multiple">

            <label for="numer">Numero:</label>
            <input type="number" name="number">

            <label for="password">Contraseña:</label>
            <input type="password" name="password">

            <label for="continente">Continente:</label>
            America:<input type="radio" name="continente" value="America del sur">
            Europa:<input type="radio" name="continente" value="Europa">

            <input type="submit" value="Enviar">
        </form>
</body>
</html>