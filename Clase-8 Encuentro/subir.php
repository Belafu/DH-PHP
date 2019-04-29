<?php
if ($_FILES) {
  //var_dump($_FILES);
  if ($_FILES["archivo"]["error"]!= 0) {
    echo "Hubo un error al acargar el cv <br>";
  }else {
      $ext = pathinfo($_FILES["archivo"]["name"],PATHINFO_EXTENSION);
      if ($ext!= "pdf" && $ext!= "doc" && $ext!= "docx") {
          echo "el cv debe ser pdf ,doc o docx <br> ";
      }else {//NO  hay errores
        if (file_exists('subidos/'.$_POST["nombre"].".".$ext)) {
          echo "Ya existe un archivo con el mismo nombre <br>";
        }else {
            move_uploaded_file($_FILES["archivo"]["tmp_name"],"subidos/".$_POST["nombre"].".".$ext);
        }

      }
  }
  echo "<hr>";
}

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>SUBIR</title>
  </head>
  <body>
    <form class="" action="subir.php" method="post" enctype="multipart/form-data">
      <label for="nombre">Nombre:</label>
      <input type="text" name="nombre">
      <br>
      archivo <input type="file" name="archivo" value="">
      <br>
      <input type="submit">
    </form>
  </body>
</html>
