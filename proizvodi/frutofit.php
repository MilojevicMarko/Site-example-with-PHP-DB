<!doctype html>
<html en="sr">

<head>
	<meta charset="utf-8">
	<title>FrutoFit</title>
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
		<h2 class="naslov">FrutoFit</h2>
		<p>FrutoFit je proizvod koji je kompanija ,, Voćar" namenila svim osobama koje vode racuna osvom zdravlju i svom izgledu.</p>
		<p>FrutoFit je višenamenski namaz napravljen od svežih, brižljivo odabranih plodova voća, bez dodatog šećera, bez veštačkih aroma i boja i bez konzervansa.</p>

		<div class="products">
			<article>
				<img src="./../img/frutofit-malina.jpg" alt="FrutoFit malina 400g - voćni namaz bez šećera">
				<p>FrutoFit malina 400g - voćni namaz bez šećera</p>
			</article>
			<article>
				<img src="./../img/frutofit-kajsija.jpg" alt="FrutoFit kajsija 400g - voćni namaz bez šećera">
				<p>FrutoFit kajsija 400g - voćni namaz bez šećera</p>
			</article>
			<article>
				<img src="./../img/frutofit-sljiva.jpg" alt="FrutoFit šljiva 400g - voćni namaz bez šećera">
				<p>FrutoFit šljiva 400g - voćni namaz bez šećera</p>
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