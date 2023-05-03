<?php
$title = "Rucher de l'Estagnol - Les Produits";
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