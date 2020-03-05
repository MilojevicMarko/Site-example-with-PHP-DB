<!doctype html>
<html en="sr">

<head>
	<meta charset="utf-8">
	<title>Desertni Prelivi</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="../css/main.css" rel="stylesheet">
	<link href="../css/mediaquery.css" rel="stylesheet" type="text/css">
	<link href="proizvodi.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>

<body>

	<?php
	include './header.php';
	?>
	<div class="container">
		<h2 class="naslov">Desertni Prelivi</h2>

		<div class="products">
			<article>
				<img src="./../img/preliv-cokolada.jpg" alt="Preliv od čokolade">
				<p>Preliv od čokolade</p>
			</article>
			<article>
				<img src="./../img/preliv-jagoda.jpg" alt="Preliv od jagode">
				<p>Preliv od jagode</p>
			</article>
			<article>
				<img src="./../img/preliv-karamela.jpg" alt="Preliv od karamele">
				<p>Preliv od karamele</p>
			</article>
			<article>
				<img src="./../img/preliv-malina.jpg" alt="Preliv od maline">
				<p>Preliv od maline</p>
			</article>
		</div>
		<!--end .products -->
	</div>
	<!---end .container -->

	<?php

	include '../footer.php';

	?>
	<script src="../js/main.js"></script>
</body>

</html>