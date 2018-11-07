<?php  

//CONDICIONALES
/*
if(condicion){
    instrucciones;
} else {
    otra instruccion;

    OPERADORES DE COMPARACION

    == SI ES IGUAL
    === IDENTICO
    != DISTINTO
    <> DIFERENTE
    !== NO IDENTICO
    < MENOR QUE
    > MAYOR QUE 
    <= MENOR O IGUAL QUE
    >= MAYOR O IGUAL QUE 

    && AND
    || O
    ! NO
     
}
*/

//EJEMPLO 1
$color = "rojo";

if($color =="rojo"){
    echo "el color es Rojo";
}else{
    echo "el color no es Rojo";
}
echo"<br/>";

//EJEMPLO 2
$year = 2019;
if($year <2019){
    echo "Estamos en 2019";
}else {
    echo "no estamos en 2019";
}

echo"<br/>";

//EJEMPLO 3

$nombre = "Tomas";
$edad = 42;
$continente = "Europa";
$ciudad ="Madrid";
$mayoria_edad  = 18;

if($edad >= $mayoria_edad){
    echo "$nombre Es mayor de edad";
    if($continente == "Europa"){
        echo " y es de $ciudad";
    }else{
        echo " y No es de europa";
    }
}else{
    echo "todavia esta biche :V";
}

//EJEMPLO 4 
echo"<br/>";

$dia = 7;

if($dia ==1){
    echo "Es lunes";
}else{
    if($dia == 2){
        echo "Es Martes";
    }else{
        if($dia == 3){
            echo "Es miercoles";
        }else{
            if($dia == 4){
                echo "Es jueves";
            }else{
                if($dia == 5){
                    echo "Es Viernes";
                }else{
                    echo "Es fin de semana";
                }
            }
        }
    }
}

echo"<br/>";

if($dia == 1){
    echo "Lunes";
}elseif($dia == 2){
    echo "Martes";
}elseif($dia == 3){
    echo "Miercoles";
}else{
    echo "Es fin de semana";
}


echo"<br/>";

//EJEMPLO 5 

$edad1 = 18;
$edad2 = 64;

$edad_oficial = 65;

if($edad_oficial >= $edad1 && $edad_oficial <= $edad2){
    echo "Si puede Camellar";
}else{
    echo "Ya pensionese o crezca!";
}

//EJEMPLO 6 SWITCH

echo"<br/>";

$dias = 4;
switch($dias){
    case 1:
        echo "Lunes";
        break;
    case 2:
        echo "Martes";
        break;
    case 3:
        echo "Miercoles";
        break;
    case 4:
        echo "Jueves";
        break;
     default:
        echo"Es fin de semana";                     
}

echo"<br/>";

//EJERCICIO 7 GO TO
goto marca;

echo "<h3>Instruccion 1</h3>";
echo "<h3>Instruccion 2</h3>";
echo "<h3>Instruccion 3</h3>";
echo "<h3>Instruccion 4</h3>";

marca:
echo "Me he saltado 4 echos";