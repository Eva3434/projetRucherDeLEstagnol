<?php
$title = "Rucher de l'Estagnol - Boutique";
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
        <h1 class="Boutique">Boutique</h1>
      </div>
    </section>
  </header>

  <!------------------------CORPS---------------------->
  <section class="boutiqueCategories">
    <a href="pageBoutique.php">Tout voir</a>
    <a href="pageBoutique.php?filtre=miels">Miels</a>
    <a href="pageBoutique.php?filtre=ruche">Produits de la ruche</a>
    <a href="pageBoutique.php?filtre=coffrets">Coffrets</a>
  </section>
  <h2 class="nosProduitsTitre">Nos produits</h2>
  <section class="boutiqueProduits">
    <?php
    require('../PHP/phpGestionBoutique.php');
    ?>
  </section>
  <!------------------------FOOTER---------------------->
  <?php
  require('../elements/footer.php');
  ?>

</body>

</html>