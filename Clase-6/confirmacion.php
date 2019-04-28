<?php
function vacioPost(){
  $bool = true;
  foreach ($_POST as $key => $value) {
    if (!empty($value)) {//$value!=''
      $bool= false;break;
    }
  }
  return $bool;
}

if (vacioPost()) {//header (TE REDIRIGE)
  header('Location: registro_usuarios.php');
  //echo "NO ENVIASTE NADA EN EL POST";
}
else {
  echo "ENVIASTE ALGO";
}
var_dump($_POST);
echo "<hr>";
/*if (empty($_GET["tyc"])) {
  echo "Acepte los terminos y condiciones";
}*/
if ($_GET) {
  echo "Muchas Gracias por registrarte ". $_GET["nombre"]." , nos has dicho que tienes ". $_GET["edad"] . " años. Hemos registrado tu email," . $_GET["email"]." ¡Gracias!." ;
  echo "<hr>";
}


echo "como arreglo lo de los checkbox ";
$hobbies =["jugar","cantar","bailar"];
$hobbiesMarcados=[];
$posicion = "jugar";
//error de parentesis sin cerrar LO QUE ME COSTO
foreach($_POST as $posicion => $valores){
  if(in_array($posicion,$hobbies)){
      $hobbiesMarcados[]=$posicion;
   }
}

var_dump($hobbiesMarcados);



?>
