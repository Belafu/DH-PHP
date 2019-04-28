<?php
$lista = ["Nonmbre"=> "Guillermo",
          "Edad"=> 20,
          "Username"=> "lolero_2020"
        ];
$vacio = [];
$null = NULL;
$var ="";
var_dump($lista);
var_dump($vacio);
var_dump($null);echo "<hr>";
if (isset($var)) {
    echo "Esta variable está definida, así que se imprimirá";
}
//echo $declarada; // ERROR| Notice: Undefined variable:
//var_dump($no_declarada); // ERROR| Notice: Undefined variable:

echo "<br>";echo "<br>";
function estaVacio($elem){
  if(isset($elem)){
    return "Esta definida y no es null";
  }
  else {
    return "no existe o tiene null";
  }
}

echo estaVacio($lista)."<br>";
echo estaVacio($vacio)."<br>";
echo estaVacio($null)."<br>";
//$echo estaVacio($no_declarada)."<br>"; |ERROR : La explicacion esta en la linea 13 o en mi cuaderno
echo "<hr>";
$si = array('esto', 'es', 'un array');
$no = 'esto es un string';
var_dump($si);
var_dump($no);
echo is_array($si) ? 'Array' : 'No es un array';echo "<br>";
echo is_array($no) ? 'Array' : 'No es un array';echo "<br>";

echo "<br>";echo "<br>";

if (empty($algo)) {
    echo '$algo es o bien 0, vacía, o no se encuentra definida en absoluto';
}
echo "<br>";echo "<br>";

if (empty($algo)) {
    echo '$algo es o bien 0, vacía, o no se encuentra definida en absoluto';
}else {

}
echo "<hr>";

if (isset($lista["contraseña"])) {
  echo "LA lista tiene el campo clave";
}else {
  echo "no tiene ese campo";
}
echo "<hr>";
//valores NO vacios|  "NULL"    "FALSE"
$caracter='0';//valores vacios| 0  ""  ''  0.0   "0"  '0'  NULL    FALSE    []
if (empty($caracter)) {
  echo "LA lista tiene el valor vacio";
}
else {
  echo "El valor es no vacio";
}
echo "<hr>";
$arrayNum=[1,3,"vx"];
$arrayNum[]=123;
var_dump($arrayNum);
echo "<hr>";
$arr=[];
$arr[]=123;
var_dump($arr);
 ?>
