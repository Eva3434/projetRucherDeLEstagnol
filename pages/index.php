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
  <title>Rucher de l'Estagnol</title>
</head>

<body>
  <header>
      <?php
      /****************************MODALS*****************************/
      include('../elements/modals.php');
      /****************************NAVBARRE*****************************/
      include('../elements/navBarre.php');
      ?>
    <!----------------------SLIDE-------------------->
    <section class="slide">
      <div class="titres">
        <h1>Rucher de l'Estagnol</h1>
        <h2>Apiculteur récoltant</h2>
      </div>
    </section>
  </header>
  <!------------------------CORPS---------------------->
  <section>
    <div class="nosProduitsTitre">Nos produits</div>
    <section class="nosProduitsGrid">
      <article>
        <img src="../images/imageNosMiels.png" class="imgAccueil" />
        <p class="categorieAccueil">Nos Miels</p>
        <p class="decouvrir">Découvrir</p>
      </article>
      <article>
        <img src="../images/imagesNosAutres.png" class="imgAccueil" />
        <p class="categorieAccueil">Nos Produits de la Ruche</p>
        <p class="decouvrir">Découvrir</p>
      </article>
      <article>
        <img src="../images/imageNosCoffrets.png" class="imgAccueil" />
        <p class="categorieAccueil">Nos Coffrets</p>
        <p class="decouvrir">Découvrir</p>
      </article>
    </section>
  </section>
  <div class="nosProduitsTitre">Notre Activité</div>
  <section class="notreActivite">
    <img src="../images/imageFond.jpg" class="imgNotreActivite" />
    <section>
      <div class="titreGridPageAcc">La miellerie</div>
      <p class="texteGridPageAcc">
        There are many variations of passages of Lorem Ipsum available, but
        the majority have suffered alteration in some form, by injected
        humour, or randomised words which don't look even slightly believable.
        If you are going to use a passage of Lorem Ipsum, you need to be sure
        there isn't anything embarrassing hidden in the middle of text. All
        the Lorem Ipsum generators on the Internet tend to repeat predefined
        chunks as necessary, making this the first true generator on the
        Internet. It uses a dictionary of over 200 Latin words, combined with
        a handful of model sentence structures, to generate Lorem Ipsum which
        looks reasonable.
      </p>
    </section>
    <section class="effetJS">
      <div class="titreGridPageAcc">L'apiculture</div>
      <p class="texteGridPageAcc">
        There are many variations of passages of Lorem Ipsum available, but
        the majority have suffered alteration in some form, by injected
        humour, or randomised words which don't look even slightly believable.
        If you are going to use a passage of Lorem Ipsum, you need to be sure
        there isn't anything embarrassing hidden in the middle of text. All
        the Lorem Ipsum generators on the Internet tend to repeat predefined
        chunks as necessary, making this the first true generator on the
        Internet. It uses a dictionary of over 200 Latin words, combined with
        a handful of model sentence structures, to generate Lorem Ipsum which
        looks reasonable.
      </p>
    </section>
    <img src="../images/beekeeper-gc599b6945_1920.jpg" class="imgNotreActivite imgNotreActiviteResponsive" />
    <img src="../images/honey-gdeb79c4ff_1920.jpg" class="imgNotreActivite imgNotreActiviteResponsive" />
    <section>
      <div class="titreGridPageAcc">L'apithérapie</div>
      <p class="texteGridPageAcc">
        There are many variations of passages of Lorem Ipsum available, but
        the majority have suffered alteration in some form, by injected
        humour, or randomised words which don't look even slightly believable.
        If you are going to use a passage of Lorem Ipsum, you need to be sure
        there isn't anything embarrassing hidden in the middle of text. All
        the Lorem Ipsum generators on the Internet tend to repeat predefined
        chunks as necessary, making this the first true generator on the
        Internet. It uses a dictionary of over 200 Latin words, combined with
        a handful of model sentence structures, to generate Lorem Ipsum which
        looks reasonable.
      </p>
    </section>
  </section>
  <!------------------------FOOTER---------------------->
  <?php
  include('../elements/footer.php');
  ?>
</body>

</html>