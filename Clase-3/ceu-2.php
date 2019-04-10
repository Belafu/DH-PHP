<?php
$ceu = [
  "Argentina" => ["Buenos Aires","Córdoba","Santa Fé"],
  "Brasil" => ["Brasilia", "Rio de Janeiro", "Sao Pablo"],
  "Colombia" => ["Cartagena", "Bogota", "Barranquilla"],
  "Francia" => ["Paris", "Nantes", "Lyon"],
  "Italia" => ["Roma", "Milan", "Venecia"],
  "Alemania" => ["Munich", "Berlin", "Frankfurt"]
];

  ksort($ceu);
  foreach ($ceu as $key => $value) {
    echo "Las ciudades de $key son: <br>";
      foreach ($value as $ciudad){
        echo $ciudad."<br>";
      }
  }

echo "<br>";
$ceuModificado = [
  "Argentina" => ["Buenos Aires","Córdoba","Santa Fé",true],
  "Brasil" => ["Brasilia", "Rio de Janeiro", "Sao Pablo",true],
  "Colombia" => ["Cartagena", "Bogota", "Barranquilla",true],
  "Francia" => ["Paris", "Nantes", "Lyon",false],
  "Italia" => ["Roma", "Milan", "Venecia",false],
  "Alemania" => ["Munich", "Berlin", "Frankfurt",false]
];
foreach ($ceuModificado as $key => $value) {
    if($value[3]==true){
      echo "Es Americano: $key <br>";
    }
}

?>
