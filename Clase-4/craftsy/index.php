<?php
include("partes/articulos.php");
$titulo = "Craftsy | Home" ;
 ?>

	<?php include("partes/head.php") ?>
	<body>
		<div class="container"> <!-- Contenedor ppal -->
				<?php include("partes/header.php") ?>

			<main> <!-- Cuerpo principal del sitio -->
				<section class="product-container"><!-- Contenedor de todos los productos -->
					<?php foreach ($productos as $key => $value): ?>
						<article class="producto"><!-- Contenedor de cada producto -->
							<img class="main-photo" src=<?= $value["imagen"] ?> alt="">
							<h2 class="name"> <?= $value["nombre"] ?> </h2>
							<p><?= $value["texto"] ?></p>
							<a class="more" href="#">ver más</a>
              <?php if($value["estaEnOferta"]): ?>
              <img id="descuento" src="img/desc-20.png" alt="">
              <p class="precio">Precio Final:
                <strike> <?= $value["precio"] ?> </strike>/
                 <?= precioFinal($value) ?></p>
              <?php else: ?>
              <p class="precio">Precio Final: <?= precioFinal($value) ?></p>
              <?php endif; ?>
						</article>
					<?php endforeach; ?>

				</section>
				<aside class="left-column">
					<h2>Tutoriales</h2>
					<section class="tutorials-container">
						<article class="tutorial">
						<img src="img/aside-01.jpg" alt="">
						<p>Título del tutorial de reparación.</p>
						</article>
						<article class="tutorial">
						<img src="img/aside-02.jpg" alt="">
						<p>Título del tutorial de reparación.</p>
						</article>
						<article class="tutorial">
						<img src="img/aside-03.jpg" alt="">
						<p>Título del tutorial de reparación.</p>
						</article>
						<article class="tutorial">
						<img src="img/aside-04.jpg" alt="">
						<p>Título del tutorial de reparación.</p>
						</article>
					</section>
					<h2>Publicidad</h2>
					<section class="ads-container">
						<article class="ads">
							<img src="img/ad-01.jpg" alt="">
						</article>
						<article class="ads">
							<img src="img/ad-02.jpg" alt="">
						</article>
					</section>

				</aside>
			</main>
		</div>

	</body>
</html>
