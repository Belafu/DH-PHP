<?php
$paises = ["Brazil", "urugays", "francia", "noruega","chile","bolivia","Kasakistan","Estados-Unidos","Mexico","Canada","Islandia"];

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>FORMULARIO</title>
  </head>
  <body><!--EN EL method post o get-->
    <form action="imprimir.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre">
          <br>
        <label for="email">E-mail:</label>
        <input type="text" name="email">
          <br>
        <label for="hobbies">¿Qué hobbies tenés?:</label>
        <input type="checkbox" name="jugar">Jugar
        <input type="checkbox" name="cantar">Cantar
        <input type="checkbox" name="bailar">Bailar
        <br>
        <label for="pais">Pais</label>
          <select class="form-control" id="exampleFormControlSelect1" name="pais">
            <?php foreach ($paises as $value): ?>
                <option value=<?=$value?>> <?=$value?></option>
            <?php endforeach;?>
          </select>
        <br>
        <label for="sexo">Sexo: </label>
        <input type="radio" name="sexo" value="M">Masculino
        <input type="radio" name="sexo" value="F">Femenino
        <br>
        <label for="sueño">¿Cómo dormiste anoche?</label>
        <select class="" name="sueño">
          <option value="1">Imnsonio</option>
          <option value="2">Insoportable</option>
          <option value="3">Horrible</option>
          <option value="4">Muy Mal</option>
          <option value="5">Mal</option>
          <option value="6">Normal</option>
          <option value="7">Bien</option>
          <option value="8">Muy Bien</option>
          <option value="9">Excelente</option>
          <option value="10">Grandiosamente</option>
        </select>
        <br>
        <input type="submit">
    </form>

<!--
Agregar varios checkbox en respuesta a la siguiente pregunta “¿Qué hobbies tenés?”.
Agregar un radio button para seleccionar el sexo.
Agregar un select con options del 1 al 10 que responda a la pregunta “¿Cómo dormiste anoche?”.V
-->



  </body>
</html>
