<?php

/*
Generar un archivo llamado superficie.php:
Definir una función triangulo() que retorne su superficie.
Definir una función rectangulo() que retorne su superficie.
Definir una función cuadrado() que retorne su superficie.
Utilizando la función pi(), definir una función circulo() que retorne su superficie.
*/

function triangulo($a,$b,$c){
$p = ($a+$b+$c)/2;/*heronsaso*/
return ($p*($p-$a)*($p-$b)*($p-$c))**(1/2);
}
echo "Area del triangulo lados 3 ,4 y 5: ".triangulo(3,4,5);echo "<br>";
function rectangulo($a,$b){
return $a*$b;
}
echo "Area del rectangulo lados 7 y 5: ".rectangulo(7,5);echo "<br>";
function cuadrado($l){
return $l**2;//(^2) elevar al cuadrado//(**n)elevar a la n
}
echo "Area del cuadrado de lado 5: ". cuadrado(5);echo "<br>";

function circulo($r){
return pi()*($r**2);
}
echo "Area del circulo de radio 2: " .circulo(2); echo "<br>";
