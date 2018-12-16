<?php

//subir archivos en PHP
$archivo = $_FILES['archivo'];

$nombre = $archivo['name'];
$tipo = $archivo['type'];

if($tipo =="image/jpg" || $tipo == "image/jpeg" || $tipo == "image/png"){

    if(!is_dir('images')){
        mkdir('images',0777);
    }

    move_uploaded_file($archivo['tmp_name'],'images/'.$nombre);

    header("Refresh:3;URL=index.php");
    echo"<h1>Imagen subida correctamente</h1>";

}else{
    header("Refresh:3;URL=index.php");
    echo "sube una imagen con un formato correcto";
}