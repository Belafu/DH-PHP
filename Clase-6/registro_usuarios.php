<?php

var_dump($_GET);
echo "<hr>";

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registro | Usuario</title>
  </head>
  <body>
    <form class="" action="confirmacion.php" method="get">
      <label for="nombre">Nombre</label>
      <input type="text" name="nombre" value="">
      <br>
      <label for="apellido">Apellido</label>
      <input type="text" name="apellido" value="">
      <br>
      <label for="edad">Edad</label>
      <input type="text" name="edad" value="">
      <br>
      <label for="email">Email</label>
      <input type="email" name="email" value="">
      <br>
      <label for="pasword">Pasword</label>
      <input type="password" name="pasword" value="">
<br>
      <input type="checkbox" name="tyc" value="">terminos y condiciones
<br>
      <input type='submit' name='Submit' value='Enviar' />
    </form>

  </body>
</html>
