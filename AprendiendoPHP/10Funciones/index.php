<?php
/*
FUNCIONES:
    una funcion es un conjunto de instrucciones agrupadas bajo un nombre concreto y que pueden reutilizarse
    solamente invocando a la funcion tantas veces como queramos

    function nombre_de_mi_funcion($parametro){
        bloque de instrucciones
    }
 //invocando la funcion
    nombre_de_mi_funcion();
*/

//EJEMPLO

function MuestraNombres(){
    echo "Victor Robles <br/>";
    echo "Tomas Robles <br/>";
    echo "Nicolas Robles <br/>";
    echo "Mama Robles <br/>";
    echo"<hr>";
}
//invocar funcion
MuestraNombres();

//EJEMPLO 2 

function Tablas($numero){
    echo "<h3>Tabla de multiplicar del numero: $numero</h3>";
    for($i=1;$i<=10;$i++){
        $operacion = $numero*$i;
        echo "$numero x $i = $operacion <br/>";
    }
}
for($i=0;$i<=10;$i++){
    Tablas($i);
}
echo "</br>";
//EJEMPLO 3 
 function Calculadora($numero1,$numero2){
     //conjunto de instrucciones a ejecutar

     $suma = $numero1+$numero2;
     $resta = $numero1 - $numero2;
     $multi = $numero1 * $numero2;
     $division = $numero1 / $numero2;

     echo"Suma: $suma <br/>";
     echo"Resta: $resta <br/>";
     echo"Multiplicacion: $multi <br/>";
     echo"Division: $division <br/>";
 }

 Calculadora(10,20);
 echo "</br>";

 //EJEMPLO 4 

 //RETORNO

 FUNCTION DevuelveElNombre($nombre){
     return "El nombre es: $nombre";
 }

 echo DevuelveElnombre("Tomas Vergara");
 echo "</br>";
 //EJEMPLO 5 
// FUNCIONES DENTRO DE OTRAS FUNCIONES

function getNombre($nombre){
    $texto = "El nombre es: $nombre";
    return $texto;
}

function getApellidos($apellidos){
    $texto = "Los apellidos son: $apellidos";
    return $texto;
}

function Nombre($nombre,$apellidos){
    $texto = getNombre($nombre)
             ."<br/>".
            getApellidos($apellidos);
    return $texto;         
}

echo Nombre("Tomas","Vergara");
echo "</br>";

//VARIABLES GLOBALES Y LOCALES
/*
    VARIABLES GLOBALES:son las que se declaran fuera de una funcion y estan disponibles
    dentro y fuera de las funciones

    VARIABLES LOCALES:son las que se definen dentro de una funcion y no puede ser usada 
    fuera de la funcion,solo estan disponibles dentro,a menos que hagamos un return
*/

$frase = "ni los genios son genios,ni los mediocres mediocres";

echo $frase;

function holaMundo(){

    global $frase;
    echo "<h1>$frase</h1>";

    $year = 2019;
    echo "<h1>$year</h1>";
    return $year;
}

echo holaMundo();
echo "</br>";

//FUNCIONES VARIABLES

function BuenosDias(){
    return  "Hola!,Buenos Dias";
}

function BuenasTardes(){
    return  "Hola!,Buenas Tardes";
}

function BuenasNoches(){
    return  "Hola!,Buenas Noches";
}

$horario = "BuenasNoches";
echo $horario();

//FUNCIONES PREDEFINIDAS PHP

/*DEBUGEAR

$nombre = "Tomas Vergara";
var_dump($nombre);

FECHAS 

echo date('d-m-y');
echo time();

MATEMATICAS

echo "raiz cuadrada de 10".sqrt(10);
echo "numero aleatorio entre 10 y 40".rand(10,40);
echo "numero PI".pi();
echo "redondear numero".round(7.8923);

//MAS FUNCIONES

echo gettype($variable);muestra el tipo de variable que se esta usando 

isset($variable) :validamos si una variable existe dentro del programa

$frase = "       mi contenido     ";
var_dump=(trim($frase));limpia la variable y los datos que trae el string

//ELIMINAR VARIABLES/INDICES

$year = 2020;
unset($year); elimina la variable year nombre y contenido


