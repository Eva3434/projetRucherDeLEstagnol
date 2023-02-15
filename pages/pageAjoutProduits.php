<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../style.css" />
  <link rel="shortcut icon" href="../images/logo.png" type="image/x-icon" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200&family=Sofia+Sans:wght@200&family=Space+Mono&family=Tourney:wght@300&display=swap" rel="stylesheet" />
  <title>Rucher de l'Estagnol - Ajout Produit</title>
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
        <div class="contact">Ajout Produit</div>
      </div>
    </section>
  </header>

  <!------------------------CORPS---------------------->
  <section>
    <div class='ajoutArticle'>Création d'un nouveau produit</div>
    <div class=''><?= $message ?></div>

    <form enctype="multipart/form-data" action="../PHP/phpGestionAjoutProduits.php" class="formAjoutProduits" method="POST">
      <input type="hidden" name="formAjoutProduits" value="1" />
      <label>Nom article :</label>
      <input type="texte" name="ajoutArticleNom" />
      <label>Description :</label>
      <input type="texte" name="ajoutArticleDescription" />
      <label>Prix :</label>
      <input type="float" name="ajoutArticlePrix" />
      <label>Sélectionner catégorie : </label>
      <select name="ajoutArticleCategorie">
        <?php
        $categories = $bdd->query('SELECT * FROM categories')->fetchAll();
        foreach ($categories as $categorie) {
          echo '<option value="' . $categorie['id_categorie'] . '">' . $categorie['nom_categorie'] . ' </option>';
        }
        ?>
      </select>
      <label>Sélectionner une ou plusieurs image(s) : </label>
      <input type="file" name="ajoutArticleImage">
      <input type="submit" value="Ajouter l'article" class="boutonAjoutProduit">
    </form>
  </section>

  <!----------------------FOOTER-------------------->
  <?php
  include('../elements/footer.php');
  ?>
</body>

</html>