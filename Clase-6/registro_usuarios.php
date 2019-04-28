<?php
    $nombre="";
    $apellido="";
    $edad="";
    $email='';
//NO ME ACUERDO
$jugar="";

if ($_POST) {
  $nombre = $_POST["nombre"];
  $apellido = $_POST["apellido"];
  $edad = $_POST["edad"];
  $email = $_POST["email"];
//$jugar=$_POST["jugar"]=='on' ? 'on' : '0';
  var_dump($_POST);
}
$cadena="Me encanta php, A Mi  tambien me encanta php!";
$pos=strpos($cadena,'php');
echo $cadena ;echo "<br>";
echo "posicion hasta el primer php:$pos";

echo "<hr>";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registro | Usuario</title>
  </head>
  <body>
    <form class="" action="confirmacion.php" method="post"><!-- confirmacion.php  -->
      <label for="nombre">Nombre</label>
      <input type="text" name="nombre" value=<?= $nombre ?>>
      <br>
      <label for="apellido">Apellido</label>
      <input type="text" name="apellido" value=<?= $apellido ?>>
      <br>
      <label for="edad">Edad</label>
      <input type="text" name="edad" value=<?= $edad ?>>
      <br>
      <label for="email">Email</label>
      <input type="email" name="email" value=<?= $email ?>>
      <br>
      <label for="pasword">Pasword</label>
      <input type="password" name="pasword" value="">
      <br>
      <label for="hobbies">¿Qué hobbies tenés?:</label>
      <input type="checkbox" name="jugar"  >Jugar
      <input type="checkbox" name="cantar" >Cantar
      <input type="checkbox" name="bailar">Bailar
      <br>
      <input type="checkbox" name="tyc" >terminos y condiciones
<br>
      <input type='submit'  value='Enviar' />
    </form>

  </body>
</html>
