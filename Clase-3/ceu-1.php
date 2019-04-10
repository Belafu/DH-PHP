<?php
$ceu = [
  "Italia" => "Roma",
  "Luxembourg" => "Luxembourg",
  "Bélgica"=> "Bruselas",
  "Dinamarca" => "Copenhagen",
  "Finlandia" => "Helsinki",
  "Francia" => "Paris",
  "Slovakia" => "Bratislava",
  "Eslovenia" => "Ljubljana",
  "Alemania" => "Berlin",
  "Grecia" => "Athenas",
  "Irlanda" => "Dublin",
  "Holanda" => "Amsterdam",
  "Portugal" => "Lisbon",
  "España" => "Madrid",
  "Suecia" => "Stockholm",
  "Reino Unido" => "London",
  "Chipre" => "Nicosia",
  "Lithuania" => "Vilnius",
  "Republica Checa" => "Prague",
  "Estonia" => "Tallin",
  "Hungría" => "Budapest",
  "Latvia" => "Riga",
  "Malta" => "Valletta",
  "Austria" => "Vienna",
  "Polonia" => "Warsaw"
  ];


echo "BUCLES HOLLLLLLLLLLLLA";echo "<br>";
  for ($i=1; $i< 101 ; $i++) {
    echo $i;
  }

echo "<br>";
echo "<br>";

$jum=rand(1,100);
echo "Corte: ".$jum;echo "<br>";
for ($i=1;($i< 101); $i++) {
  echo $i;
  if ( $i == $jum) {
    echo " (Corte)";
    break;
  }
}
echo "<br>";
echo "<br>";
echo "Tabla del 2";
for ($i=1; $i <101 ; $i++) {
  echo $i."   ".$i*2;echo "<br>";
}
echo "<br>";
$valInicial=100;echo "valInicial: ".$valInicial;echo "<br>";
while($valInicial>74){
  echo $valInicial;
  $valInicial--;
}
echo "<br>";
echo "<br>";
$contador=1;
while($contador<6){
  echo "|".$contador*2;
  $contador++;
}
echo "<br>";
echo "<br>";

$contCaras=0;
$tiradas=0;
while($contCaras<5){
  $tiradas++;
  $moneda=rand(0,1);
  echo "Salio: ";
  if ($moneda==1) {
    echo $moneda." *";echo "<br>";
    $contCaras++;
  }
  else {
    echo $moneda;echo "<br>";
  }
}
echo "Cantidad de tiradas de moneda: ".$tiradas;
echo "<br>";
echo "<br>";

$contCaras=0;
$tiradas=0;
do {
  $tiradas++;
  $moneda=rand(0,1);
  echo "Salio: ".$moneda;echo "<br>";
} while ($moneda==0);
echo "Cantidad de tiradas de moneda: ".$tiradas;
echo "<br>";
echo "<br>";

$array=["Palestino","Boca","River","San lorenxo","Tolima"];//oJO LA SINTAXIS: $array[2] NONONO
for ($i=0; $i <5 ; $i++) {
  echo $array[$i]."<br>";
}
echo "<br>";
$i=0;
while( $i <5) {
  echo $array[$i]."<br>";
    $i++;
}
echo "<br>";
$i=0;
do {
  echo $array[$i]."<br>";
  $i++;
} while( $i <5);
echo "<br>";
foreach ($array as  $valor) {
  echo $valor."<br>";
}
echo "<br>";
$nums=[];
for ($i=0; $i<10 ; $i++) {
  $ale=rand(1,10);//aqui directamente $nums[]=rand(1,10); que va agregando valores ,a la posicion que este disponible
  $nums[$i]=$ale;
}
var_dump($nums);
echo "<br>";

for ($i=0; $i <10 ; $i++) {
    echo "$nums[$i] |";
  if($nums[$i]==5){
    echo " Se encontró un 5!";break;
  }
}
echo "<br>";

$i = 0;
while($i <10){
  echo "$nums[$i] |";
  if($nums[$i]==5){
  echo " Se encontró un 5!";break;
  }
  $i++;
}
echo "<br>";

$i = 0;
do {
  echo "$nums[$i] |";
  if($nums[$i]==5){
  echo " Se encontró un 5!";break;
  }
    $i++;
} while ($i <10);
echo "<br>";
echo "<br>";
$lista = range('a', 'o');
for ($i=0; $i < count($lista); $i++) {
    echo "En la posición $i se encuentra el valor $lista[$i] <br>";
}
echo "<br>";
echo "<br>";

$mascota=["animal" => "Perro","edad"=>10,"altura"=>14,"nombre"=>"BOBI"];
foreach ($mascota as $key => $value) {
  echo "$key => $value <br>";
}
echo "<br>";
ksort($ceu);
foreach ($ceu as $key => $value) {
  echo "La capital de $key es $value. <br>";
}
echo "<br>";



?>
