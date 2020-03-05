 <!doctype html>
 <html>

 <head>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Kontakt</title>
     <link href="css/main.css" rel="stylesheet" type="text/css">
     <link href="css/mediaquery.css" rel="stylesheet" type="text/css">
     <link href="css/kontakt.css" rel="stylesheet" type="text/css">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
 </head>


 <body>
     <?php
        include './header.php';
        ?>
     <div class="contact">
         <div class="container-contact">
             <div class="contact-pic">
                 <a href="index.php"> <img src="img/logo.png" alt="logo"></a>
             </div>

             <form class="contact-form validate-form">
                 <div class="wrap-input validate-input" data-validate="Ime i prezime u obavezni">
                     <input class="input" type="text" name="ime i prezime" placeholder="Unesite Vaše ime i prezime" required>
                     <span class="shadow-input"></span>
                 </div>

                 <div class="wrap-input validate-input" data-validate="Potreban je validan meil: nesto@nesto.com">
                     <input class="input" type="text" name="email" placeholder="Email" required>
                     <span class="shadow-input"></span>
                 </div>

                 <div class="wrap-input validate-input" data-validate="Ime firme">
                     <input class="input" type="text" name="Ime Vase firme" placeholder="Ime Vase firme" required>
                     <span class="shadow-input"></span>
                 </div>

                 <div class="wrap-input validate-input" data-validate="Poruka je obavezna">
                     <textarea class="input" name="Poruka" placeholder="Poruka"></textarea>
                     <span class="shadow-input"></span>
                 </div>

                 <div class="container-contact-form-btn">
                     <button class="contact-form-btn">
                         <span>
                             Posalji poruku
                             <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                         </span>
                     </button>
                 </div>
             </form>
         </div>
         <!--container-contact -->
     </div>
     <!--end .contact -->

     <?php
        include './footer.php';
        ?>

 </body>

 </html>