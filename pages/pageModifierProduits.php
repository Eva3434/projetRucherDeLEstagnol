<?php
require('../PHP/phpGestionModifierProduits.php');
$title = "Rucher de l'Estagnol - ModificationS Produit";
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
      <div class="contact">Modifier Produit</div>
    </div>
  </section>
</header>

<!------------------------CORPS---------------------->
<section>
  <legend class="modifierTitre">Vous modifiez : <?= $produit['nom_produit'] ?></legend>

  <form enctype="multipart/form-data" action="../PHP/phpGestionModifierProduits.php?id=<?= $produit['id_produit'] ?>" 
    class="form_modifier" method="POST">
    <input type="hidden" name="form_modifier" value="1"> 
    <input type="hidden" name="id_produit" value="<?= $produit['id_produit'] ?>">

    <label class="marginModifier">Nom Produit:</label>
    <input type="text" name="nom_produit" value="<?= $produit['nom_produit'] ?>" class="marginModifier">

    <label class="marginModifier">Description:</label>
    <textarea name="description_produit" class="marginModifier"><?= $produit['description_produit'] ?></textarea>

    <label class="marginModifier">Prix Produit :</label>
    <input type="text" name="prix_produit" value="<?= $produit['prix_produit'] ?>" class="marginModifier">
    
    <label class="marginModifier">Stock produit :</label>
    <input type="number" name="stock_produit" value="<?= $produit['stock_produit'] ?>" class="marginModifier">
    
    <input type="submit" value="Mettre à jour" class="boutonModifier">

  </form>
</section>


<!----------------------FOOTER-------------------->
<?php
require('../elements/footer.php');
?>
</body>

</html>