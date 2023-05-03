<?php
require_once('../PHP/connect.php');
?>

<!------------------------NAV---------------------->
<section class="nav">
  <nav class="nav1">
    <a href="index.php">Accueil</a>
    <a href="../pages/pageBoutique.php">Boutique</a>
    <a href="pageGalerie.php">Galerie</a>    
    <img src="../images/logo.webp" class="logoNav" alt="" />
  </nav>
  <nav class="nav2">
    <a href="pageNotreHistoire.php" class="notreHist">Notre Histoire</a>
    <a href="pageContact.php">Contact</a>
    <?php
    if (isset($_SESSION['utilisateur'])) {
      echo "Bonjour " . $_SESSION['utilisateur']['nom_utilisateur'] . "<a href='../PHP/deconnexion.php'class='deconnexion'>Déconnexion</a>";
    } else {
      echo '<button class="boutonConnexion">Connexion</button>';
    } ?>
    <a href="pagePanier.php"><img src="../images/icone_panier.png" class="iconePanier" alt=""></a>
  </nav>
</section>