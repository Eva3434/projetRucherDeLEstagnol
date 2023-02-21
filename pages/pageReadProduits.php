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
    include('../elements/modals.php');
    /****************************NAVBARRE*****************************/
    include('../elements/navBarre.php')
    ?>

    <!----------------------SLIDE-------------------->
    <section class="slide">
      <div class="titres">Liste des articles</div>
      </div>
    </section>
  </header>

  <!------------------------CORPS---------------------->
  <section>

    <div class='ajoutArticle'>Afficher produits</div>   
    
        <?php     
        $produits = $bdd->query('SELECT * FROM produits')->fetchAll();
        foreach ($produits as $produit) {
          echo '<option value="' . $produit['id_produit'] . '">' . $produit['id_produit'] . $produit['nom_produit'] . $produit['prix_produit'] .  $produit['stock_produit'] .  ' </option>';
        }
        
        ?>
      
  </section>

  <!----------------------FOOTER-------------------->
  <?php
  include('../elements/footer.php');
  ?>
</body>

</html>