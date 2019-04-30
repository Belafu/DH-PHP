<?php

$a =array ( 'a'=>1, 'b'=>2, 'c'=>'Yo <3 JSON');
var_dump($a);echo "<br>";
//Utilizando json_encode, convertir el array en un json y asignarlo a $a.
$a=json_encode($a);
//Hacer echo de la variable $a.
echo "Array en formato json: ".$a;echo "<br>";//ACA FUNCIONA ELN ECHO POR QUE YA NO ES UN ARRAY SINO UN STRING
//Crear una nueva variable $b que contenga el json_decode de la variable $a.
$b = json_decode($a,true);//JSON DECODIFICADO A ARRAY ASOCIATIVO
var_dump($b);echo "<br>";
//Imprimir la frase “Yo <3 JSON | 1 | 2 |” utilizando los datos de la variable $b
echo $b['c']." | ".$b['a']." | ".$b['b']." |<br>";
echo "<hr>";

//Leer el archivo e imprimir un checkbox por cada categoría, capaz de ser enviado como array en un formulario. El value de cada checkbox será el id y el label mostrado a su derecha será el nombre proveniente del json como vemos en el en el array.
$categorias = file_get_contents("categorias.json");
$categorias = json_decode($categorias,true);
var_dump($categorias);
echo "<hr>";
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>JSON</title>
  </head>
  <body>
    <form class="" action="jason.php" method="post">
        <?php foreach ($categorias["categorias"] as $key => $value): ?>
            <input type="checkbox" name="" value=<?=  $value["id"] ?>> <?=  $value["nombre"] ?>

        <?php endforeach; ?>
        <br>
        <button type="button" name="button">Enviar</button>
    </form>
  </body>
</html>
