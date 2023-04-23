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
  <title>Rucher de l'Estagnol - Nos Miels</title>
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
        <div class="nosMiels">Nos miels</div>
      </div>
    </section>
  </header>
  <!------------------------CORPS---------------------->
  <section>
<?php
if(!empty($_GET['selectionner'])){
  $idProduit = $_GET['selectionner'];
  $afficherProduit = $bdd->query('SELECT * FROM produits WHERE id_produit = '.$idProduit)->fetch();
    echo '<article class="produitContenu">
    <img src="../images/imagesProduits/' .$afficherProduit['image_produit'] .'" class="imgProduit alt="""> 
    <div class="produitDroite">
    <p class="produitNom">' . $afficherProduit['nom_produit'] . '</p>
    <p class="produitDescription">' . $afficherProduit['description_produit'] . '</p>
    <p class="produitPrix">' . number_format($afficherProduit['prix_produit'], 2, ',', ' ') . ' €</p>
    <a class="ajouterProduit">Ajouter au panier</a>
    </div>
    </article>';          
} 
  
?>

  </section>



  <!----------------------FOOTER-------------------->
  <?php
  require('../elements/footer.php');
  ?>
</body>

</html>