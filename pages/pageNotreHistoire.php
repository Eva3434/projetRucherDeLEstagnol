<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../style.css" />
  <link rel="shortcut icon" href="images/logo.png" type="image/x-icon" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200&family=Sofia+Sans:wght@200&family=Space+Mono&family=Tourney:wght@300&display=swap" rel="stylesheet" />
  <title>Rucher de l'Estagnol - Notre Histoire</title>
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
        <div class="qsn">Qui sommes nous ?</div>
      </div>
    </section>
  </header>

  <!------------------------CORPS---------------------->
  <div class="quelquesMots">Quelques mots sur nous et notre activité</div>
  <section class="qsnTextHaut">
    <img src="../images/imageFond.jpg" />
    <div>
      <p class="titrePresentation">Présentation</p>
      <p class="textePresentation">
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
    </div>
  </section>
  <section class="qsnTextBas">
    <div>
      <p class="titreBasPresentation">TITRE</p>
      <p>
        There are many variations of passages of Lorem Ipsum available, but
        the majority have suffered alteration in some form, by injected
        humour, or randomised words which don't look even slightly believable.
        If you are going to use a passage of Lorem Ipsum, you need to be sure
        there isn't anything embarrassing hidden in the middle of text. All
        the Lorem Ipsum generators on the Internet tend to repeat predefined
        chunks as necessary, making this the first true generator on the
        Internet.
      </p>
    </div>
    <div>
      <p class="titreBasPresentation">TITRE</p>
      <p>
        There are many variations of passages of Lorem Ipsum available, but
        the majority have suffered alteration in some form, by injected
        humour, or randomised words which don't look even slightly believable.
        If you are going to use a passage of Lorem Ipsum, you need to be sure
        there isn't anything embarrassing hidden in the middle of text. All
        the Lorem Ipsum generators on the Internet tend to repeat predefined
        chunks as necessary, making this the first true generator on the
        Internet.
      </p>
    </div>
    <div>
      <p class="titreBasPresentation">TITRE</p>
      <p>
        There are many variations of passages of Lorem Ipsum available, but
        the majority have suffered alteration in some form, by injected
        humour, or randomised words which don't look even slightly believable.
        If you are going to use a passage of Lorem Ipsum, you need to be sure
        there isn't anything embarrassing hidden in the middle of text. All
        the Lorem Ipsum generators on the Internet tend to repeat predefined
        chunks as necessary, making this the first true generator on the
        Internet.
      </p>
    </div>
  </section>
  <!----------------------FOOTER-------------------->
  <?php
  include('../elements/footer.php');
  ?>
</body>

</html>