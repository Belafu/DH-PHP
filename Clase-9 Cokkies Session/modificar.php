<?php
/*'Crear dos archivos. mostrar.php y modificar.php

mostrar.php únicamente debe imprimir $_SESSION[“contador”] (si existe). En este archivo se debe imprimir el valor actual de contador.
modificar.php debe tener 2 botones. El primero debe decir “Reiniciar” y debe poner $_SESSION[“contador”] en 0. El segundo debe decir “Incrementar” y debe incrementar su valor en 1. Probar las modificaciones en mostrar.php.'*/


session_start();
$_SESSION['contador'] = 5;
var_dump($_SESSION);
echo "<hr>";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>MODIFICAR</title>
  </head>
  <body>
    <form class="" action="mostrar.php" method="post" enctype="multipart/form-data">
      <button type="submit" name="buttonR">Reiniciar</button>
      <br>
      <button type="submit" name="buttonI">Incrementar</button>
    </form>
  </body>
</html>
