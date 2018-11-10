<?php

$pais = "colombia";
$continente = "Sur america";

echo "este pais es: $pais";
echo "<br/>";
echo " y pertenece al continente de $continente"; 
echo "<br/>";
var_dump($pais);
echo "<br/>";
var_dump($continente);

//EJERCICIO 2 

$n = 0;
while($n<=100){
    echo $n;
    echo "<br>";
    $n=$n+2;
}


//EJERCICIO 3 
echo "<br>";

$cuadrado = 1;
$contador = 1;

while($contador<=40){
    echo "$cuadrado x $cuadrado =".($cuadrado*$cuadrado)."<br/>";
    $contador++;
    $cuadrado++;
}
echo "<br>";
?>

//EJERCICIO 4  

<?php
/*
echo "<h1>".$_GET['numero1']."</h1>";
echo "<h1>".$_GET['numero2']."</h1>";

echo "Suma = ".($_GET['numero1']+$_GET['numero2'])."<br/>";

echo "resta = ".($_GET['numero1']-$_GET['numero2'])."<br/>";

echo "Multiplicacion = ".($_GET['numero1']*$_GET['numero2'])."<br/>";

echo "Division = ".($_GET['numero1']/$_GET['numero2'])."<br/>";


var_dump($_GET);

*/
echo "<br>";
echo "<br>";
?>


//EJERCICIO 5 

<?php

if(isset($_GET['numero1']) && isset($_GET['numero2'])){
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

if($numero1 < $numero2){
    for($i = $numero1;$i<=$numero2;$i++){
        echo "<h4>$i</h4>"; 
      } 
 }else{
     echo "Numero 1 debe ser menor al numero2";
 }
}else{
    echo "<h1>Los parametros get no existen</h1>";
}

//EJERCICIO 6

echo "<table border='1'><tr>";//INICIO TABLA
    echo "<tr>";//inicio fila 1 celdas
        for($cabecera =1; $cabecera <=10;$cabecera++){
            echo "<td>Tabla del $cabecera</td>";
        }
    echo"</tr>";//cierre fila 1 celdas

    echo"<tr>";//inicio fila 2 celdas
        for($i=1;$i<=10;$i++){
            echo "<td>";
                for($x=1;$x<=10;$x++){
                    echo "$i x $x =".($i*$x)."<br/>";
                }
            echo"</td>";
        }
    echo"</tr>";//cierre fila 2 celdas
echo"</table>";//FIN TABLA

//EJERCICIO 7 

if(isset($_GET['numero1']) && isset($_GET['numero2'])){
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

if($numero1 < $numero2){
    for($i = $numero1;$i<=$numero2;$i++){
        if($i%2 !=0){
            echo "<h4>$i</h4>"; 
        }
       
      } 
 }else{
     echo "Numero 1 debe ser menor al numero2";
 }
}else{
    echo "<h1>Los parametros get no existen</h1>";
}








 

