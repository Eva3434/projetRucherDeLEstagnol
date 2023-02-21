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
  <title>Rucher de l'Estagnol - Contactez-nous</title>
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
        <div class="contact">Nous contacter</div>
      </div>
    </section>
  </header>

  <!----------------------CORPS-------------------->
  <section class="ouNousTrouver">
    <div>Où nous trouver ?
      There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some </div>
    <img src="../images/map.png" alt="">
  </section>
  <section class="nosHorraires">
    <div>Nos horraires</div>
    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some </p>
    <div>10h - 19h </div>
    <div>Du Lundi au Samedi </div>
  </section>
  <form class="formContact">
    <label>Nom</label>
    <input type="text" />
    <label>E mail</label>
    <input type="text" />
    <div>
      <label>Message</label>
      <textarea></textarea>
      <button class="boutonContact">Envoyer</button>
    </div>
  </form>

  <!----------------------FOOTER-------------------->
  <?php
  include('../elements/footer.php');
  ?>
</body>

</html>