<?php

$error = 'faltan_datos';
if(!empty($_POST['nombre']) &&
   !empty($_POST['apellidos']) &&
   !empty($_POST['edad']) &&
   !empty($_POST['correo']) &&
   !empty($_POST['pass'])){

    $error = 'ok';

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellidos'];
    $edad = (int)$_POST['edad'];
    $email = $_POST['correo'];
    $password = $_POST['pass'];

    //validacion de datos

    if(!is_string($nombre) || preg_match("/[0-9]+/",$nombre)){
        $error = 'nombre';
    }
    
    if(!is_string($apellido) ||  preg_match("/[0-9]+/",$apellido)){
        $error = 'apellido';
    }
    if(!is_int($edad) || !filter_var($edad,FILTER_VALIDATE_INT)){
        $error = 'edad';
    }
    if(!is_string($email) || !filter_var($email,FILTER_VALIDATE_EMAIL)){
        $error = 'email';
    }
    if(empty($password) || strlen($password)<5){
        $error = 'password';
    }
    /*
    var_dump($_POST);
    var_dump($error);
    */

}else{
    $error = 'faltan_datos';
}

if($error != 'ok'){
    header ("Location:validacion.php?error=$error");
}

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
<?php
 if($error == 'ok'):?>
        <h1>Datos Validados Correctamente</h1>
            <p><?=$nombre?></p>
            <p><?=$apellido?></p>
            <p><?=$edad?></p>
            <p><?=$email?></p>
        <?php endif; ?>
</body>
</html>