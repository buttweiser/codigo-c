<?php

/*BUCLE WHILE
ESTRUCTURA DE CONTROL QEU ITERA O REPITE LA EJECUCION DE UNA SERIE DE INSTRUCCIONES TANTO COMO SEA NECESARIO

while(condicion){
   bloque de instruccion 
}
*/

$numero = 0;
while($numero <= 100){
    echo $numero;

    if($numero != 100){
        echo ", ";
    }
    $numero ++;
}

echo"<br/>";

//EJEMPLO 2 

if(isset($_GET['numero'])){
    $numero = (int)$_GET['numero'];
}else{
    $numero = 1;
}

echo "<h1>Tabla de multiplicar del numero $numero</h1>";

$contador = 0;
while($contador <= 10){
    echo "$numero x $contador = ".($numero*$contador)."<br/>";
    $contador++;
}
echo"<br/>";
//EJEMPLO 3 DO WHILE
/*
 do{
     //bloque de instrucciones
 }while(condicion);
 */

 $edad = 18;
 $contador = 1;
 do{
    echo "Tiene acceso al local privado $contador"."<br/>";
    $contador++;
 }while ($edad >=18 && $contador <= 10);

 echo"<br/>";
 //EJEMPLO 4 FOR

 /*

 for(variable contador,condicion,incremento contador){
     instrucciones
 }

 */

 $resultado = 0;
 for($i = 0; $i <= 100; $i++){
    $resultado = $resultado + $i;
    echo $resultado."<br/>";
 }

 echo "El resultado es: $resultado";