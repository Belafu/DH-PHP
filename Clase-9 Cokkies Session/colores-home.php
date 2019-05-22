<?php
//Crear un archivo que muestre al usuario un formulario con colores para elegir (podemos usar un select para ello). Una vez que el usuario selecciona ese color, la página debe recargarse y el fondo de la misma debe ser del color elegido. Ese color debe mantenerse a través de la navegación. Si el usuario cierra el navegador y vuelve a abrir la página, el color de fondo de la misma deberá ser el elegido previamente.
//Implementar una opción para borrar la selección del usuario y volver al valor default de color de fondo.
session_start();
$colorDefault = 'white';
$_SESSION['color']='white';
if ($_POST) {
  $_SESSION['color'] = $_POST['color'];
  if (isset($_POST['buttonR'])) {//existe y no tiene valor NULL : En este caso tiene valor=''
    $_SESSION['color'] = $colorDefault;
  }
}

var_dump($_SESSION,$_POST);


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>HOME</title>
  </head>
  <body style= "background-color:<?= $_SESSION['color'] ?>;">
      <form class="" action="colores-home.php" method="post">
        <label for="color">Color</label>
        <select class="" name="color" value="" >  <!--Aca estara la magia en el value??-->
          <option value="red">Rojo</option>
          <option value="green">Verde</option>
          <option value="blue">Azul</option>
          <option value="pink">Rosado</option>
        </select>
        <br>
        <button type="submit" name="buttonE">Enviar</button>
        <button type="submit" name="buttonR">Resetear</button>
      </form>
  </body>
</html>
