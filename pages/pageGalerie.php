<?php
  include('../PHP/connect.php');
  $PAGE_PRECEDENTE = "pageGalerie.php";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../style.css" />
  <link rel="shortcut icon" href="images/logo.png" type="image/x-icon" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200&family=Sofia+Sans:wght@200&family=Space+Mono&family=Tourney:wght@300&display=swap" rel="stylesheet" />
  <title>Rucher de l'Estagnol - Galerie</title>
</head>

<body>
  <?php
  /****************************MODALS*****************************/
  include('../elements/modals.php');
  /****************************NAVBARRE*****************************/
  include('../elements/navBarre.php')
  ?>
  <!----------------------SLIDE-------------------->
  <section class="slide">
    <div class="titres">
      <div class="galerie">Galerie</div>
    </div>
  </section>
  </header>

  <!------------------------CORPS---------------------->
  <section class="decouvrez">
    <div>Découvez notre activité en photo...</div>
  </section>
  <section class="photosGalerie">
    <img src="../images/boutique.jpg">
    <img src="../images/rucheLavande.jpg">
    <img src="../images/lavande.jpg">
    <img src="../images/beekeeper-gc599b6945_1920.jpg">
    <img src="../images/honey-gdeb79c4ff_1920.jpg">
    <img src="../images/IMG_0871.jpeg">
    <img src="../images/header.jpg">
    <img src="../images/imagesNosAutres.png">
    <img src="../images/imageFond.jpg">
    <img src="../images/IMG_0959.JPG">
    <img src="../images/Ruchettes.jpeg">
    <img src="../images/IMG_2538.jpeg">
  </section>

  <!----------------------FOOTER-------------------->
  <?php
  include('../elements/footer.php');
  ?>
</body>

</html>