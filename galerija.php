<!DOCTYPE html>
<html lang="sr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="css/main.css" rel="stylesheet" type="text/css">
  <link href="css/gallery.css" rel="stylesheet" type="text/css">
  <link href="css/mediaquery.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

  <title>Galerija</title>
</head>

<body>
  <?php
  include './header.php';
  ?>
  <!--
<div class="placeholder-container">
  <div class="placeholder">
    <img src="img/gallery-1.jpg" alt="Upravna zgrada" onclick="myFunction(this);">
  </div>
  <div class="placeholder">
    <img src="img/gallery-2.jpg" alt="Pogon" onclick="myFunction(this);">
  </div>
  <div class="placeholder">
    <img src="img/gallery-3.jpg" alt="Magacin" onclick="myFunction(this);">
  </div>
  <div class="placeholder">
    <img src="img/gallery-4.jpg" alt="Sortiranje" onclick="myFunction(this);">
  </div>
  <div class="placeholder">
    <img src="img/gallery-5.jpg" alt="Isporuka" onclick="myFunction(this);">
  </div>
  <div class="placeholder">
    <img src="img/gallery-6.jpg" alt="Ispitivanje" onclick="myFunction(this);">
  </div>
  <div class="placeholder">
    <img src="img/gallery-7.jpg" alt="Kuvanje" onclick="myFunction(this);">
  </div>
  <div class="placeholder">
    <img src="img/gallery-8.jpg" alt="Pakovanje" onclick="myFunction(this);">
  </div>
</div>
-->
  <div class="placeholder-container" id="galerijaSlika" placeholder>
  </div>

 
  <div class="container">
    <!-- Close the image -->
    <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>

    <!-- Expanded image -->
    <img id="expandedImg" style="width:100%">

    <!-- Image text -->
    <div id="imgtext"></div>
  </div>

  <?php
  include './footer.php';
  ?>
  <script src="js/gallery.js"></script>
</body>

</html>