<?php
include('../PHP/connect.php');
var_dump($_SESSION);

?>

    <!------------------------NAV---------------------->
    <header>
      <nav>
        <a href="index.php">Accueil</a>
        <a href="pageBoutique.php">Boutique</a>
        <a href="pageGalerie.php">Galerie</a>
        <a class="logo"><img src="../images/logo.png" class="logoNav" /></a>
        <a href="pageNotreHistoire.php">Notre Histoire</a>
        <a href="pageContact.php">Contact</a>
        
        <?php
        if (isset($_SESSION['utilisateur'])) {
          echo "Bonjour ".$_SESSION['utilisateur']['nom_utilisateur']." (Déconnexion)";
        }else {
          echo '<button class="boutonConnexion">Connexion</button>';
        }?>
      </nav>

