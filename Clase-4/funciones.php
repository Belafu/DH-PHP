<?php

function mayor($a,$b,$c=100){
  return max(max($a,$b),$c);
}
echo mayor(1,2,6);echo "<br>";
echo mayor(102,99);echo "<br>";

function tabla($base,$limite=100){
  $array =[];
  for ($i=0; $i <$limite-$base ; $i++) {
    $array[]=$base + $i;
  }
  return $array;
}
var_dump(tabla(3,9) );
echo "<br>";
var_dump(tabla(95));
echo "<br>";


?>
