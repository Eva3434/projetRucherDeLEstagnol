<?php
$title = "Rucher de l'Estagnol - Nos miels";
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
        <h1 class="nosMiels">Nos produits</h1>
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