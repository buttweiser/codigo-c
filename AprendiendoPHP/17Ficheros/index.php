<?php
/*
//abrir archivo
$abrir_archivo = fopen ("texto.txt","a+");

//leer contenido
while(!feof($abrir_archivo)){
    $contenido = fgets($abrir_archivo);
    echo $contenido."<br/>";
}

//escribir
fwrite($abrir_archivo,"Soy un texto metido desde PHP");

//cerrar archivo
fclose($abrir_archivo);
*/

//Copiar archivos
//copy('texto.txt', 'fechero_copiado.txt') or die ("Error al copiar");

//renombrar archivos
//rename('fechero_copiado.txt', 'archivo_recopiadito.txt');

//Eliminiar
//unlink('archivo_recopiadito.txt')or die ('Error al borrar');

//comprobar si existe o no 

if(file_exists("texto.txt")){
    echo "el archivo existe";
}else{
    echo "no existe";
}