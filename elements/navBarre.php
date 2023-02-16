<?php
include_once('../PHP/connect.php');
// var_dump($_SESSION);

?>

<!------------------------NAV---------------------->

<nav>
  <a href="index.php">Accueil</a>
  <a href="../pages/pageBoutique.php">Boutique</a>
  <a href="pageGalerie.php">Galerie</a>
  <a class="logo"><img src="../images/logo.png" class="logoNav" /></a>
  <a href="pageNotreHistoire.php">Notre Histoire</a>
  <a href="pageContact.php">Contact</a> 

  <?php
  if (isset($_SESSION['utilisateur'])) {
    echo "Bonjour " . $_SESSION['utilisateur']['nom_utilisateur'] . "<a href='../PHP/deconnexion.php'class='deconnexion'>Déconnexion</a>";
  } else {
    echo '<button class="boutonConnexion">Connexion</button>';
  } ?>
  <a href="pagePanier.php"><img src="../images/icone_panier.png" class="iconePanier"></a>
</nav>