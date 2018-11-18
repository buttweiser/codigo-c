<?php

/*
Cookie: Es un fichero que se almacena en el ordenador del usuario que visita la web ,con el fin de recordar datos o rastrear el comportamiento del mismo en la web
*/


//CREAMOS COOKIE

//setcookie("nombre","valor que solo puede ser texto",caducidad,ruta,dominio);


//cookie basica
setcookie("micookie","valor de mi galleta");

//cookie con expiracion

setcookie("unyear","valor de mi cookie de 365 dias",time()+(60*60*24*365));

?>

<a href="ver_cookies.php">Ver las Galletas</a>
<a href="borrar.php">Borrar las Galletas</a>



