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
  <title>Rucher de l'Estagnol - Panier</title>
</head>

<body>
  <header>
    <?php
    /****************************MODALS*****************************/
    include('../elements/modals.php');
    /****************************NAVBARRE*****************************/
    include('../elements/navBarre.php')
    ?>

    <!----------------------SLIDE-------------------->
    <section class="slide">
      <div class="titres">
        <div class="contact">Mon Panier</div>
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
  include('../elements/footer.php');
  ?>
</body>

</html>