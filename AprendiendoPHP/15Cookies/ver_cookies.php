<?php

/*
Para mostrar el valor de las cookies,tengo que usar $_COOKIE,es una variable super global,y es un array asociativo
*/

if(isset($_COOKIE['micookie'])){
    echo $_COOKIE['micookie'];
}else{
    echo "no existe la cookie";
}
echo"<br/>";

if(isset($_COOKIE['unyear'])){
    echo $_COOKIE['unyear'];
}else{
    echo "no existe la cookie";
}