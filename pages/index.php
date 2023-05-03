<?php
$title = "Rucher de l'Estagnol";
$metaDescription = "Le Rucher de l’Estagnol est une exploitation agricole familiale, située sur la commune de Saussan,
aux portes de Montpellier dans l’Hérault. Nous produisons une large gamme de miels Bio, dans le respect de la nature et de nos
abeilles..";
require('../elements/doctype.php')
?>
  <header>
      <?php
      /****************************MODALS*****************************/
      require('../elements/modals.php');
      /****************************NAVBARRE*****************************/
      require('../elements/navBarre.php');
      ?>
    <!----------------------SLIDE-------------------->
    <section class="slide">
      <div class="titres">
        <h1>Rucher de l'Estagnol</h1>
        <h2>Apiculteurs récoltants</h2>
      </div>
    </section>
  </header>
  <!------------------------CORPS---------------------->
  <section>
    <h3 class="nosProduitsTitre">Nos produits</h3>
    <section class="nosProduitsGrid">
      <article>
        <img src="../images/imageNosMiels.png" class="imgAccueil" alt=""/>
        <h4 class="categorieAccueil">Nos Miels</h4>
        <a href="pageBoutique.php?filtre=miels" class="decouvrir">Découvrir</a>
      </article>
      <article>
        <img src="../images/imagesNosAutres.png" class="imgAccueil" alt=""/>
        <h4 class="categorieAccueil">Nos Produits de la Ruche</h4>
        <a href="pageBoutique.php?filtre=ruche" class="decouvrir">Découvrir</a>
      </article>
      <article>
        <img src="../images/imageNosCoffrets.png" class="imgAccueil" alt="" />
        <h4 class="categorieAccueil">Nos Coffrets</h4>
        <a href="pageBoutique.php?filtre=coffrets" class="decouvrir">Découvrir</a>
      </article>
    </section>
  </section>
  <h3 class="nosProduitsTitre">Notre Activité</h3>
  <section class="notreActivite">
    <img src="../images/photoMiellerie.webp" class="imgNotreActivite" alt=""/>
    <section>
      <h4 class="titreGridPageAcc">La miellerie</h4>
      <p class="texteGridPageAcc">
        Le Rucher de l’Estagnol est une exploitation agricole familiale, située sur la commune de Saussan,
        aux portes de Montpellier dans l’Hérault. Nous sommes des apiculteurs récoltants, nous transhumons
        nos ruches dans toutes l’Occitanie ce qui nous permet d’obtenir une large gamme de miels Bio. 
        Nous produisons tous nos miels et nos produits de la ruche, dans le respect de la nature et de nos
        abeilles c’est pour cela que nous avons fait le choix de travailler en agriculture Biologique.      
      </p>
    </section>
    <section class="effetJS">
      <h4 class="titreGridPageAcc">L'apiculture</h4>
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
    <img src="../images/apicultureAccueil.webp" class="imgNotreActivite imgNotreActiviteResponsive" alt="" />
    <img src="../images/apitherapieAccueil.webp" class="imgNotreActivite imgNotreActiviteResponsive" alt=""/>
    <section>
      <h4 class="titreGridPageAcc">L'apithérapie</h4>
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
  require('../elements/footer.php');
  ?>
</body>

</html>