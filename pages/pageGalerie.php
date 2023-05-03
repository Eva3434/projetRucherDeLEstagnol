<?php
$title = "Rucher de l'Estagnol - Galerie";
$metaDescription = "";
require('../elements/doctype.php')
?>
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