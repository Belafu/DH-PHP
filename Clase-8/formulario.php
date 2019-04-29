<?php
  if ($_FILES) {
    //var_dump($_FILES);
    if ($_FILES["cv"]["error"]!= 0) {
      echo "Hubo un error al acargar el cv <br>";
    }else {
        $ext = pathinfo($_FILES["cv"]["name"],PATHINFO_EXTENSION);
        if ($ext!= "pdf" && $ext!= "doc" && $ext!= "docx") {
            echo "el cv debe ser pdf ,doc o docx <br> ";
        }else {//NO  hay errores
          move_uploaded_file($_FILES["cv"]["tmp_name"],"archivos/cv.".$ext);
        }
    }
    if ($_FILES["imagen"]["error"]!= 0) {
      echo "Hubo un error al acargar la imagen <br>";
    }else {
        $ext = pathinfo($_FILES["imagen"]["name"],PATHINFO_EXTENSION);
        if ($ext!= "jpg" && $ext!= "jpeg" && $ext!= "png") {
            echo "el cv debe ser jpg ,jpeg o png <br>";
        }else {//NO  hay errores
          move_uploaded_file($_FILES["imagen"]["tmp_name"],"archivos/imagen.".$ext);
        }
    }
    echo "<hr>";
    $ruta = dirname(__FILE__);
    var_dump($ruta);
    echo "<hr>";
  }

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>FORMULARIO</title>
  </head>
  <body><!--EN EL method post o get-->
    <form action="formulario.php" method="post" enctype="multipart/form-data">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre">
        <br>
        archivo CV <input type="file" name="cv" value="">
        <br>
        imagen <input type="file" name="imagen" value="">
        <br>
        <input type="submit">
    </form>


  </body>
</html>
