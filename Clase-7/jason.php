<?php

$a =array ( 'a'=>1, 'b'=>2, 'c'=>'Yo <3 JSON');
var_dump($a);
echo "<hr>";
//Utilizando json_encode, convertir el array en un json y asignarlo a $a.
$a=json_encode($a);
var_dump($a);
echo "<hr>";
//Hacer echo de la variable $a.
//Crear una nueva variable $b que contenga el json_decode de la variable $a.
//Hacer echo de $b.
//Imprimir la frase “Yo <3 JSON | 1 | 2 |” utilizando los datos de la variable $b
$auto =json_decode('{"color":"rojo",
                     "marca":"yaris",
                     "modelo":"citroe"}',true);
var_dump($auto);
echo "<hr>";

$archAuto = file_get_contents("archivos.json");
var_dump($archAuto);
$archAuto = json_decode($archAuto,true);
var_dump($archAuto);


 ?>
