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
  <title>Rucher de l'Estagnol - Ajout Produit</title>
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
      <div class="titres">Liste des articles</div>
      </div>
    </section>
  </header>

  <!------------------------CORPS---------------------->
  <section class="read">
    <div class='ajoutArticle'>Afficher produits</div>
    <?php $produits = $bdd->query('SELECT * FROM produits')->fetchAll();
    if (empty($produits)) { ?>
      <p>Aucun produits</p>
    <?php } else { ?>
      <table class="readTableau">
        <thead>
          <tr class="trTitreColonne">
            <td>ID</td>
            <td>NOM PRODUIT</td>
            <td>PRIX</td>
            <td>STOCK</td>
            <td>MODIFIER</td>
            <td>SUPPRIMER</td>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($produits as $produit) { ?>
            <tr>
              <td><?= $produit['id_produit'] ?></td>
              <td><?= $produit['nom_produit'] ?></td>
              <td><?= $produit['prix_produit'] ?></td>
              <td><?= $produit['stock_produit'] ?></td>
              <td>
                <a href="pageModifierProduits.php?id=<?= $produit['id_produit'] ?>">Modifier</a>&nbsp;
              </td>
              <td>
                <form method="POST">
                  <input type="hidden" name="form_delete" value="1">
                  <input type="hidden" name="id_produit" value="<?= $produit['id_produit'] ?>">
                  <button type="submit">Supprimer</button>
                </form>
              </td>
            </tr>
        </tbody>
        <?php }
        }
        if (!empty($_POST['form_delete'])) {
          $sql = 'DELETE FROM produits WHERE id_produit=:id_produit;';
          $req = $bdd->prepare($sql);
          $req->bindParam(":id_produit", $_POST['id_produit']);
          $req->execute();

          $color = "red;";
          $message = "Suppression effectuée";
        } ?>
      </table>
  
  <div class="boutonAjoutProduitRead">
    <a href="pageAjoutProduits.php" class="ajouterProduitBouton">Ajouter un nouveau produit</a>
  </div>
  </section>


  <!----------------------FOOTER-------------------->
  <?php
  require('../elements/footer.php');
  ?>
</body>

</html>