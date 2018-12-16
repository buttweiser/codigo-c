<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Subir Archivos</title>
    </head>
<body>
    <h1>Subir Archivos con PHP</h1>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="archivo">
        <input type="submit" value="enviar">
    </form>

    <h1>Listado de imagenes</h1>
    <?php
     $gestor = opendir('./images');
        if($gestor){
            while(($img = readdir($gestor)) !== false){
                if($img != '.' && $img != '..'){
                    echo "<img src='images/$img' width='200px'/><br/>";
                }
            }
        }
    ?>
</body>
</html>
