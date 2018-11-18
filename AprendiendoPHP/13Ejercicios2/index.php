<?php
//EJERCICIO 1 

$numeros = array(11,44,58,67,32,10,22,74,87);

echo"<h1>Listado de Numeros</h1>";

echo "<ul>";
for($i = 0; $i < count($numeros); $i++){
    echo $numeros[$i]."<br/>";
}
echo "<ul>";

sort($numeros)."<br/>";
var_dump($numeros)."<br/>";
echo count($numeros)."<br/>";

$resultado = array_search(67,$numeros);
var_dump($resultado);

echo "<br/>";
echo "<br/>";
echo "<br/>";

//EJERCICIO 2
echo "<h2>Ejercicio 2</h2>";
$numero = array(0);

for($a = 0; $a < 120; $a++){
    $numero[] = $a+1;
}

var_dump($numero);


echo "<br/>";
echo "<br/>";
echo "<br/>";

//EJERCICIO 3
echo "<h2>Ejercicio 3</h2>";

$texto = "";

if(empty($texto)){
    $texto = "hola mundo";
    $textoMayuscula = strtoupper($texto);
    echo "<strong>$texto</strong>";
}else{
    echo "la variable tiene este contenido".$texto;
}

echo "<br/>";
echo "<br/>";
echo "<br/>";

//EJERCICIO 4
echo "<h2>Ejercicio 4</h2>";

$arreglo = array(
    $var1 = "texto",
    $var2 = 23,
    $var3 = true,
    $var4 = array(1,2,3,4,5,6,7,8,9),
);

for($b = 0; $b<count($arreglo); $b++){
        echo gettype($var1)."<br/>";
        echo gettype($var2)."<br/>";
        echo gettype($var3)."<br/>";
        echo gettype($var4)."<br/>";
}



echo "<br/>";
echo "<br/>";
echo "<br/>";

//EJERCICIO 4
echo "<h2>Ejercicio 5</h2>";

$tabla = array(
    "Accion" => array("GTA V", "COD", "PUBG"),
    "Aventura" => array("ASSASINS CREED", "CRASH", "PRINCE OF PERSIA"),
    "Deportes" => array("FIFA 19", "PES 2019", "MOTOGP 19")
);

$categorias = array_keys($tabla);
?>

<table class="table" border="1">
    <thead>
        <tr>
        <?php foreach($categorias as $categoria): ?>
            <th><?=$categoria ?></th>
        <?php endforeach; ?>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td scope="row"><?=$tabla['Accion'][0]?></td>
            <td><?=$tabla['Aventura'][0]?></td>
            <td><?=$tabla['Deportes'][0]?></td>
        </tr>
        <tr>
            <td scope="row"><?=$tabla['Accion'][1]?></td>
            <td><?=$tabla['Aventura'][1]?></td>
            <td><?=$tabla['Deportes'][1]?></td>
        </tr>
        <tr>
            <td scope="row"><?=$tabla['Accion'][2]?></td>
            <td><?=$tabla['Aventura'][2]?></td>
            <td><?=$tabla['Deportes'][2]?></td>
        </tr>
    </tbody>
</table>