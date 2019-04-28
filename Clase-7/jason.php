<?php

$a =array ( 'a'=>1, 'b'=>2, 'c'=>'Yo <3 JSON');
echo $a;echo "<br>";

//Utilizando json_encode, convertir el array en un json y asignarlo a $a.
json_encode($a)

Hacer echo de la variable $a.
Crear una nueva variable $b que contenga el json_decode de la variable $a.
Hacer echo de $b.
Imprimir la frase “Yo <3 JSON | 1 | 2 |” utilizando los datos de la variable $b

 ?>
