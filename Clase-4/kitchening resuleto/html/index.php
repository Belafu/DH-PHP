<?php $nombre= "Hello";
$datosPollo = [
        0 => ["id" => 1,"titulo" => "Lorem Ipsum","descripcion" => "Lorem Ipsum","precio" => 300,"imagen" => "images/img-pdto-1.jpg","enOferta" => true ],
        1 => ["id" => 2,"titulo" => "Lorem Ipsum","descripcion" => "Lorem Ipsum","precio" => 500,"imagen" => "images/img-pdto-2.jpg","enOferta" => false],
        2 => ["id" => 2,"titulo" => "Lorem Ipsum","descripcion" => "Lorem Ipsum","precio" => 500,"imagen" => "images/img-pdto-3.jpg","enOferta" => true],
        3 => ["id" => 2,"titulo" => "Lorem Ipsum","descripcion" => "Lorem Ipsum","precio" => 500,"imagen" => "images/img-pdto-1.jpg","enOferta" => false],
        4 => ["id" => 2,"titulo" => "Lorem Ipsum","descripcion" => "Lorem Ipsum","precio" => 500,"imagen" => "images/img-pdto-2.jpg","enOferta" => false],
        5 => ["id" => 2,"titulo" => "Lorem Ipsum","descripcion" => "Lorem Ipsum","precio" => 500,"imagen" => "images/img-pdto-3.jpg","enOferta" => true],
        6 => ["id" => 2,"titulo" => "Lorem Ipsum","descripcion" => "Lorem Ipsum","precio" => 500,"imagen" => "images/img-pdto-1.jpg","enOferta" => false],
        7 => ["id" => 2,"titulo" => "Lorem Ipsum","descripcion" => "Lorem Ipsum","precio" => 500,"imagen" => "images/img-pdto-2.jpg","enOferta" => false],
        8 => ["id" => 2,"titulo" => "Lorem Ipsum","descripcion" => "Lorem Ipsum","precio" => 500,"imagen" => "images/img-pdto-3.jpg","enOferta" => false],
        9=> ["id" => 2,"titulo" => "Lorem Ipsum","descripcion" => "Lorem Ipsum","precio" => 500,"imagen" => "images/img-pdto-1.jpg","enOferta" => false]
];

?>



<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/styles.css">
		<title>Responsive Web Design</title>
	</head>
	<body>

	<div class="container">

		<!-- cabecera -->
		<header class="main-header">
			<img src="images/logo.jpg" alt="logotipo" class="logo">

			<a href="#" class="toggle-nav">
				<span class="fa fa-bars"></span>
			</a>

			<nav class="main-nav">
				<ul>
					<li><a href="#">home</a></li>
					<li><a href="#">quienes</a></li>
					<li><a href="#">servicios</a></li>
					<li><a href="#">portfolio</a></li>
					<li><a href="#">sucursales</a></li>
					<li><a href="#">contacto</a></li>
				</ul>
			</nav>
		</header>

		<!-- banner -->
		<section class="banner">
			<img src="images/img-banner.jpg" alt="banner">
		</section>

		<!-- productos -->
		<section class="vip-products">
        <?php foreach($datosPollo as $key => $value ): ?>

    			<article class="product">
    				<div class="photo-container">
        					<img class="photo" src=<?= $value["imagen"] ?> alt="pdto 01">
    					<img class="special" src="images/img-nuevo.png" alt="plato nuevo">
    					<a class="zoom" href="#">Ampliar foto</a>
    				</div>
            <?php if ($value["enOferta"]): ?>
                <h2> enOferta  </h2><!--Recordare que el if ternario se tiene que declarar a una variuable o con un echo, lo otro es usar un if a normal-->
            <?php endif; ?>

          	<h2><?= $value["titulo"] ?></h2>
            <p><?= $value["descripcion"] ?></p>
    				<a class="more" href="#">ver más</a>
    			</article>

      <?php endforeach;?>
		</section>

		<footer class="main-footer">
			<ul>
				<li><a href="#">home</a></li>
				<li><a href="#">quienes</a></li>
				<li><a href="#">servicios</a></li>
				<li><a href="#">portfolio</a></li>
				<li><a href="#">sucursales</a></li>
				<li><a href="#">contacto</a></li>
			</ul>
		</footer>
	</div>

	</body>
</html>
