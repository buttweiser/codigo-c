<?php

/*

ARRAYS:Es una coleccion de datos o variables ,bajo un unico nombre y para acceder a esos valores
podemos usar un indidce numero o alfanumerico


*/

$peliculas = array('Batman','Superman','Joker');

var_dump($peliculas);

var_dump($peliculas[1]);

$cantantes = ['axel','Eminen','2pac'];
var_dump($cantantes);

//RECORRER ARREGLOS CON FOR
echo"<h1>Listado de peliculas</h1>";

echo "<ul>";
for($i = 0; $i < count($peliculas); $i++){
    echo "<li>".$peliculas[$i]."<li>";
}
echo "<ul>";


//RECORRER ARREGLOS CON FOREACH
echo"<h1>Listado de cantantes</h1>";

echo "<ul>";
foreach($cantantes as $cantante){
    echo"<li>".$cantante."<li>";
}
echo "<ul>";

//ARRAYS ASOCIATIVOS

$personas = array(
    'Nombre' => 'Tomas',
    'Apellidos'=> 'Vergara',
    'Web' => 'Tomas.com'
);

var_dump($personas['Apellidos']);

//ARRAYS MULTIDIMENSIONALES:es una array con mas array adentro

$contactos = array(
    array(
        'nombre' => 'Tomas',
        'apellido' =>'Vergara',
        'Email' => 'jtomasvergarac@gmail.com'
    ),
    array(
        'nombre' => 'Nicolas',
        'apellido' =>'Vergara',
        'Email' => 'nicovc20@gmail.com'
    ),
    array(
        'nombre' => 'andres',
        'apellido' =>'Vergara',
        'Email' => 'andres@gmail.com'
    ),
    array(
        'nombre' => 'camilo',
        'apellido' =>'Vergara',
        'Email' => 'camilo@gmail.com'
    ),
);


var_dump($contactos);

echo $contactos[1]['nombre'];

foreach ($contactos as $key => $contacto){
    var_dump($contacto);
}


//FUNCIONES PARA TRABAJAR CON ARRAYS

$cantantes = ['axel','Eminen','2pac','Ziploc'];
$numeros = [1,2,3,8,9,4,7];

//ORDENAR
asort($cantantes);
var_dump($cantantes);

sort($numeros);
var_dump($numeros);

//AGREGAR ELEMENTOS A UN ARRAY

$cantantes[] = "fredy";
array_push($cantantes,"axel".$i);

//ELIMINANDO ELEMENTOS DEL ARRAY
unset($cantantes[2]);

array_pop($cantantes);


var_dump($cantantes);

//ALEATORIO

$indice = array_rand($peliculas);
echo $peliculas[$indice];

//BUSCAR DENTRO DE UN ARRAY

$resultado = array_search('Joker',$peliculas);
var_dump($resultado);

//CONTAR NUMERO DE ELEMENTOS
echo count($peliculas);