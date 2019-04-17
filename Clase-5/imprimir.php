<?php
var_dump($_POST);
echo "<br>";
/*PONLO EN DH-PHP/Clase-5/
imprimir.php?nombre=tunombre&email=tunombre@digitalhouse.com
Entonces en la variable GET que es un array asociativo guarda datos
*/
var_dump($_POST);
echo "Rellenaste en el campo nombre: ".$_POST["nombre"];echo "<br>";
echo "<br>";
foreach ($_POST as $key => $value) {
  echo $key.": ".$value;echo "<br>";
}
/*post y gets son variables globales(de echo arrays asociativos) que cambian la forma de guardar formularios*/



?>
