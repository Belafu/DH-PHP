<?php
/*
Incluir en el archivo, saludo.php. ¿Qué sucede?
Reemplazar include por require. ¿Qué sucede?
Generar en la misma carpeta un archivo saludo.php que solamente haga echo “Hola mundo”. ¿Qué sucede ahora con el punto a y el punto b?
En el archivo incluir.php reemplazar el require por include, e incluir 3 veces el mismo archivo. ¿Qué sucede?
En el archivo incluir.php reemplazar todos los include por include_once. ¿Qué sucede? */

echo "Soy incluir.php <br>";//<hr> deja un subrayado
//no pasa nada entre require ,antes salia el mismo warning pero con un //Fatal error: require(): Failed opening required 'saludo.php'
include_once("saludo.php"); echo "<br>"; //Warning: include(saludo.php): failed to open stream//Warning: include(): Failed opening 'saludo.php' for inclusion
include_once("saludo.php"); echo "<br>";
include_once("saludo.php"); echo "<br>";


//Si pongo mas includes se repite el hello worl 3 veces ,porque el include es como un copy-paste del codigo
//si pongo 3 include_once me va a salir solo 1 y no los 3

 ?>
