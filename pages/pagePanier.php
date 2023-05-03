<?php
$title = "Rucher de l'Estagnol - Panier";
$metaDescription ="";
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
        <h1 class="contact">Mon Panier</h1>
      </div>
    </section>
  </header>

  <!------------------------CORPS---------------------->
  <section class="colonnesPanier">
    <div class="nomColonnes">
      <p>Produits</p>
      <p>Prix</p>
      <p>Quantité</p>
      <p>Sous total</p>      
    </div>
    <div class="contenuPanier">
      <img src="../images/Tournesol Bio 400g.jpeg" alt="">
      <p>Miel de Tournesol</p>
      <p>7,50€</p>
      <p>1</p>
      <p>7,50€</p>
    </div>
  </section>

  <!----------------------FOOTER-------------------->
  <?php
  require('../elements/footer.php');
  ?>
</body>

</html>