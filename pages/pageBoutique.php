
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
  <title>Rucher de l'Estagnol - Boutique</title>
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
        <div class="Boutique">Boutique</div>
      </div>
    </section>
  </header>

  <!------------------------CORPS---------------------->
  <section class="boutiqueCategories">
    <a>Tout voir</a>
    <a href="pageMiels.html">Miels</a>
    <a href="pageProduits.html">Produits de la ruche</a>
    <a href="pageCoffrets.html">Coffrets</a>
  </section>
  <div class="nosProduitsTitre">Notre selection</div>
  <section class="boutiqueProduits">
    <article>
    <?php
        $produits = $bdd->query('SELECT * FROM produits')->fetchAll();
        // var_dump($produits);die;
        foreach ($produits as $produit) {
          
          echo '<img src="../images/imagesProduits/' .$produit['image_produit'] .'" class="imgBoutique"> 
          <p class="boutiqueNomProduit">' . $produit['nom_produit'] . '</p>
          <p class="boutiquePrix">' . $produit['prix_produit'] . '</p>
          <p class="ajouter">Ajouter au panier</p>';          
        }
        ?>      
    <article>
<!--       
      <img src="../images/Chataignier Bio 400g.jpeg" class="imgBoutique" />
      <p class="boutiqueNomProduit">Miel de Fleurs</p>
      <p class="boutiquePrix">7,50€</p>
      <p class="ajouter">Ajouter au panier</p>
    </article>
    <article>
      <img src="../images/Fleurs Bio 400g.jpeg" class="imgBoutique" />
      <p class="boutiqueNomProduit">Miel de Chataignier</p>
      <p class="boutiquePrix">7,50€</p>
      <p class="ajouter">Ajouter au panier</p>
    </article>
    <article>
      <img src="../images/Tournesol Bio 400g.jpeg" class="imgBoutique" />
      <p class="boutiqueNomProduit">Miel de Tournesol</p>
      <p class="boutiquePrix">7,50€</p>
      <p class="ajouter">Ajouter au panier</p>
    </article>
    <article>
      <img src="../images/Garrigues Bio 400g.jpeg" class="imgBoutique" />
      <p class="boutiqueNomProduit">Miel de Garrigues</p>
      <p class="boutiquePrix">7,50€</p>
      <p class="ajouter">Ajouter au panier</p>
    </article>
    <article>
      <img src="../images/Fleurs Bio 400g.jpeg" class="imgBoutique" />
      <p class="boutiqueNomProduit">Miel de Fleurs</p>
      <p class="boutiquePrix">7,50€</p>
      <p class="ajouter">Ajouter au panier</p>
    </article>
  </section> -->
  <!------------------------FOOTER---------------------->
  <?php
  include('../elements/footer.php');
  ?>

</body>

</html>