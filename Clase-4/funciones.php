<?php
/*  Generar un archivo llamado funciones.php:
    Definir una función mayor() que reciba 3 números y devuelva el mayor.
    Definir una función tabla() que reciba un parámetro base, un parámetro límite, y devuelve un array con la secuencia de números desde el numero base hasta el numero limite.
    Modificar mayor() para que si recibe sólo 2 parámetros, compare a esos dos números con el número 100.
    Modificar tabla para que si recibe un sólo parámetro utilice el número 100.*/

//PARA PROBAR QUITAR LOS COMENTARIOS
function mayor($a,$b,$c=100){
//$funcionesEjecutadas++; ¿Esto está permitido?(NO) SALE Notice: Undefined variable,osea las funciones no reconocen las variables globales (caracteristica de php)
  global $funcionesEjecutadas;
  $funcionesEjecutadas++;
  return max(max($a,$b),$c);
}
//echo "El mayor entre 1,2,6: ". mayor(1,2,6);echo "<br>";
//echo "El mayor entre 102,99 (100 como tercer argumento): ". mayor(102,99);echo "<br>";
//SI DESCOMITEO LOS ECHO VAN A AUMENTAR $funcionesEjecutadas POR LA EJECUCION QUE HAY EN LOS ECHOS
function tabla($base,$limite=100){
  $array =[];
  for ($i=0; $i <$limite-$base ; $i++) {
    $array[]=$base + $i;
  }
  return $array;
}
//var_dump(tabla(3,9) );
//echo "<br>";
//var_dump(tabla(95));
//echo "<br>";


?>
