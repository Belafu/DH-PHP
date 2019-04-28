<?php
$faq = [
          ["pregunta" => "Cuanto es 1 + 1?", "respuesta" => "2"],
          ["pregunta" => "Cuanto es 2 + 2?", "respuesta" => "4"]
];
$color = array('Blanco'=> "rgb(213, 210, 210)", 'Verde'=>"green", 'Rojo'=>'red');

//Crear un array donde se especifica el nombre de un artículo con su respectivo precio. Escribir un script PHP para mostrar la secuencia, los valores dentro de una tabla, en la columna izquierda su nombre y en la derecha su precio.

$articulos = ['Articulo A'=> 23421, 'Articulo B'=> 423, 'Articulo C'=> 8289];

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>JUEGA YA</title>
  </head>
  <body>

<?php
for ($i=0; $i <2 ; $i++) {
  //que pelotudo puse i embes de $i
  echo $faq[$i]["pregunta"]." ". $faq[$i]["respuesta"]."<br>"   ;
}
?>
<br>
  <ul>
    <?php foreach($color as $key => $value): ?>
        <li style="color:<?=$value  ?>;"> <?= $key ?> </li>
    <?php endforeach; ?>
  </ul>
  <br>


  <table class="egt"   border="3"  >     <!--  bgcolor="red"  -->
    <?php foreach($articulos as $key => $value): ?>
    <tr>
      <td><?= $key ?></td>
      <td> $<?= $value ?></td>
    </tr>
    <?php endforeach; ?>
  </table>

  </body>
</html>
