<?php
var_dump($_POST);//$_GET  / $_POST
echo "<hr>";
/*PONLO EN DH-PHP/Clase-5/
imprimir.php?nombre=tunombre&email=tunombre@digitalhouse.com
Entonces en la variable GET que es un array asociativo guarda datos
*/
echo "Rellenaste en el campo nombre: ".$_POST["nombre"];echo "<br>";
echo "Rellenaste en el campo jugar: ".$_POST["jugar"];echo "<br>";//Si no le doy chekbox no se agrega al array POST
echo "<br>";
foreach ($_POST as $key => $value) {
  echo $key.": ".$value;echo "<br>";
}
/*post y gets son variables globales(de echo arrays asociativos) que cambian la forma de guardar formularios*/
echo "<hr>";
echo "Respuesta del servidor en headers <br>";
foreach (getallheaders() as $nombre => $valor) {
    echo "$nombre: $valor <br>";
}

echo "<hr>";
var_dump($_SERVER);

?>
