<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Validacion de formularios en PHP</h1>

    <?php
        if(isset($_GET['error'])){
            $error = $_GET['error'];
            if($error == 'faltan datos'){
                echo "<strong style=color:red>Introduce todos los datos en el formulario</strong>";
            }
            if($error == 'nombre'){
                echo "<strong style=color:red>Introduce correctamente el nombre</strong>";
            }
            if($error == 'apellido'){
                echo "<strong style=color:red>Introduce el apellido correctamente</strong>";
            }
            if($error == 'edad'){
                echo "<strong style=color:red>Introduce la edad correctamente</strong>";
            }
            if($error == 'email'){
                echo "<strong style=color:red>Introduce el email correctamente</strong>";
            }
            if($error == 'password'){
                echo "<strong style=color:red>Introduce el password correctamente</strong>";
            }
        }
    ?>
    <form action="validar.php" method="POST">
        <label for="nombre">Nombre:</label><br/>
        <input type="text" name="nombre"><br/>

        <label for="apellidos">Apellidos:</label><br/>
        <input type="text" name="apellidos"><br/>

        <label for="edad">Edad:</label><br/>
        <input type="number" name="edad"><br/>

        <label for="correo">Email:</label><br/>
        <input type="email" name="correo"><br/>

        <label for="pass">Contraseña:</label><br/>
        <input type="password" name="pass"><br/>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>