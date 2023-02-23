<?php
$title = "Rucher de l'Estagnol - Ajout Produit";
$metaDescription = "";
require('../elements/doctype.php')
?>

<header>
  <?php
  /****************************MODALS*****************************/
  require('../elements/modals.php');
  
  /****************************NAVBARRE*****************************/
  require('../elements/navBarre.php');
  ?>

  <!----------------------SLIDE-------------------->
  <section class="slide">
    <div class="titres">
      <div class="contact">Ajout Produit</div>
    </div>
  </section>
</header>

<!------------------------CORPS---------------------->
<section>
  <div class='ajoutArticle'>Création d'un nouveau produit</div>
  <?php
  // On affiche les différents messages de validation ou d'erreur
  if (!empty($_SESSION['message'])) { ?>
    <div><?= $_SESSION['message'] ?></div>
  <?php
    $_SESSION['message'] = "";
  } ?>

  <form enctype="multipart/form-data" action="../PHP/phpGestionAjoutProduits.php" class="formAjoutProduits" method="POST">
    <input type="hidden" name="formAjoutProduits" value="1">
    <label>Nom article :</label>
    <input type="texte" name="ajoutArticleNom">
    <label>Description :</label>
    <textarea name="ajoutArticleDescription"></textarea>
    <label>Prix :</label>
    <input type="float" name="ajoutArticlePrix" placeholder="€">
    <label>Sélectionner catégorie : </label>
    <select name="ajoutArticleCategorie">
      <?php
      // On recupère les catégories de la BDD 
      $categories = $bdd->query('SELECT * FROM categories')->fetchAll();
      foreach ($categories as $categorie) {
        echo '<option class="ajoutCategorie" value="' . $categorie['id_categorie'] . '">' . $categorie['nom_categorie'] . ' </option>';
      }
      ?>
    </select>
    <label>Sélectionner une ou plusieurs image(s) : </label>    
    <input type="file" name="ajoutArticleImage" accept="image/*">
    <input type="submit" value="Ajouter l'article" class="boutonAjoutProduit">
  </form>
</section>

<!----------------------FOOTER-------------------->
<?php
require('../elements/footer.php');
?>
</body>

</html>