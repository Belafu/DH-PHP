<?php
/*    Crear un archivo todoJunto.php que incluya el archivo funciones.php y superficie.php
en donde se definirá una función que reciba los radios de 3 círculos y
retorna la mayor superficie entre ambos. Para este ejercicio se deberá reutilizar las funciones ya definidas.*/


/*    Modificar todoJunto.php para que en su primer línea diga $funcionesEjecutadas = 0.
Luego, modificar cada función de funciones.php y superficie.php
para que al comenzar hagan $funcionesEjecutadas++.
Probar llamar a varias funciones y ver cuánto vale $funcionesEjecutadas en cada momento.
¿Esto está permitido? ¿Qué sucede?

En caso de que el ejercicio anterior haya fallado, modificar
la variable con la palabra reservada global para que sí funcione.
*/
echo "TodoJunto.php <hr>";
$funcionesEjecutadas = 0;
var_dump($funcionesEjecutadas);
include("funciones.php");
var_dump($funcionesEjecutadas);
include("superficie.php");

function jumbo($a,$b,$c){
return mayor(circulo($a),circulo($b),circulo($c));
}
echo "Despued de definir la funcion jumbo: ";
echo "funcionesEjecutadas = " .$funcionesEjecutadas;echo "<br>";
var_dump($funcionesEjecutadas);
echo "El mayor entre radios 2, 4 y 3: ".jumbo(2,4,3);echo "<br>";
echo "Despued de ejecutar la funcion jumbo: ";
echo "funcionesEjecutadas: " .$funcionesEjecutadas;echo "<br>";
var_dump($funcionesEjecutadas);

$tecto = "Me encanta php, a mi también me encanta php!";echo $tecto."<br>";
echo "En que posicion se encuentra el primer (php): ".strpos($tecto,"php");
//Utilizando strpos(), encontrar la posición de la primera aparición de "php"
//dentro de la cadena: "Me encanta php, a mi también me encanta php!"



 ?>
