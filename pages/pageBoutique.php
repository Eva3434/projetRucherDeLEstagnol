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
  <title>Rucher de l'Estagnol - Boutique</title>
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
        <div class="Boutique">Boutique</div>
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
  <div class="nosProduitsTitre">Nos produits</div>
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