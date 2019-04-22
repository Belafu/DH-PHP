<?php

var_dump($_GET);
echo "<hr>";
if (isset($_POST["tyc"]) && strlen()==0) {
  echo "Acepte los terminos y condiciones";
}




echo "<hr>";
echo "Muchas Gracias por registrarte ". $_GET["nombre"]." , nos has dicho que tienes ". $_GET["edad"] . " años. Hemos registrado tu email," . $_GET["email"]." ¡Gracias!." ;

?>
