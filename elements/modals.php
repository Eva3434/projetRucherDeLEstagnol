<!------------------------MODAL CONNEXION---------------------->
<div id="back"></div>
<section class="d-none" id="modal">
  <img src="../images/cross.svg" alt="" class="croix" />
  <div class="titreModal">CONNEXION</div>
  <form class="formModal" action="../PHP/phpGestionConnexion.php" method="POST">
    <input type="hidden" name="formModal" value="1" />
    <label>E-mail :</label>
    <input type="text" name="email_connexion"  aria-label="Saisisez votre e-mail"/>
    <label>Mot de passe :</label>
    <input type="password" name="mot_de_passe_connexion"  aria-label="Saisisez votre mot de passe"/>
    <input type="submit" value="Connexion" class="boutonModal"  aria-label="Connexion"/>
    <a href="#inscription" class="boutonInscription">Créer un compte</a>
  </form>
</section>

<!------------------------MODAL INSCRIPTION--------------------->
<article id="inscription">
  <div id="backIns"></div>
  <section class="d-noneInsc" id="modalInsc">
    <img src="../images/cross.svg" alt="" class="croixInsc" />
    <div class="titreModal">INSCRIPTION</div>
    <form action="../PHP/phpGestionInscription.php" class="formInscription" method="POST">
      <input type="hidden" name="formInscription" value="1" />
      <label>Nom :</label>
      <input type="text" name="nom_inscription"  aria-label="Saisisez votre nom"/>
      <label>Prénom :</label>
      <input type="text" name="prenom_inscription"  aria-label="Saisisez votre prénom" />
      <label>E-mail :</label>
      <input type="text" name="email_inscription"  aria-label="Saisisez votre e-mail"/>
      <label>Mot de passe :</label>
      <input type="password" name="mot_de_passe_inscription"  aria-label="Saisisez votre mot de passe" />
      <input type="submit" value="Créer le compte" class="boutonModalInsc" />
    </form>
  </section>
</article>

