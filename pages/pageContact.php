<?php
$title = "Rucher de l'Estagnol - Contactez-nous";
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
  require('../elements/footer.php');
  ?>
</body>

</html>