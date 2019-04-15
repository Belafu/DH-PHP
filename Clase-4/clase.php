<?php $nombre= "ALE";
$ganador = rand(0,1);
$sociales = ["Google"=> "https://google.com",
          "Facebook" => "https://facebook.com",
          "Twitter" =>"https://twitter.com"];

$problem2 = [
        0 => ["id" => 1,"titulo" => "Lorem Ipsum","descripcion" =>" Lorem Ipsum","precio" => 300,"imagen" => "img-pdto-1.jpg","enOferta" => true ],
        1 => ["id" => 2,"titulo" => "Lorem Ipsum","descripcion" => "Lorem Ipsum","precio" => 500,"imagen" => "img-pdto-2.jpg","enOferta" => false]
]

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CLase 4</title>
  </head>
  <body>
    <h1>La Internet</h1>
    <marquee>Bienvenidos al mundo de la internet</marquee>
    <h2>Bienvenido <?= $nombre ?>  </h2>
    <h3>¿Es usted un ganador?
      <?php if($ganador):?>
      <?= "NO" ?>
      <?php else:?>
      <?= "SI" ?>
      <?php endif; ?>

    </h3>

    <h3>Algunos sitios interesantes:</h3>
    <ul>
      <?php foreach ($sociales as $key => $value): ?>
        <li>
          <a href=  <?= $value ?>  > <?= $key ?> </a>
        </li>
      <?php endforeach;?>
    </ul>
  </body>
</html>
