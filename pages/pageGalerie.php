<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../style.css" />
  <link rel="shortcut icon" href="../images/logo.webp" type="image/x-icon" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200&family=Sofia+Sans:wght@200&family=Space+Mono&family=Tourney:wght@300&display=swap" rel="stylesheet" />
  <title>Rucher de l'Estagnol - Galerie</title>
</head>

<body>
  <header>
    <?php
    /****************************MODALS*****************************/
    require('../elements/modals.php');
    /****************************NAVBARRE*****************************/
    require('../elements/navBarre.php')
    ?>
    <!----------------------SLIDE-------------------->
    <section class="slide">
      <div class="titres">
        <h1  class="galerie">Galerie</h1>
      </div>
    </section>
  </header>

  <!------------------------CORPS---------------------->
  <section class="decouvrez">
    <div>Découvez notre activité en photo...</div>
  </section>
  <section class="photosGalerie">
    <img src="../images/boutique.jpg" alt="">
    <img src="../images/rucheLavande.jpg" alt="">
    <img src="../images/lavande.jpg" alt="">
    <img src="../images/apicultureAccueil.webp" alt="">
    <img src="../images/apitherapieAccueil.webp" alt="">
    <img src="../images/IMG_0871.jpeg" alt="">
    <img src="../images/header.webp" alt="">
    <img src="../images/imagesNosAutres.png" alt="">
    <img src="../images/photoMiellerie.webp" alt="">
    <img src="../images/IMG_0959.JPG" alt="">
    <img src="../images/Ruchettes.jpeg" alt="">
    <img src="../images/IMG_2538.jpeg" alt="">
  </section>

  <!----------------------FOOTER-------------------->
  <?php
  require('../elements/footer.php');
  ?>
</body>

</html>