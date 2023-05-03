
<?php
  $DB_NAME = "rucherdelestagnol";
  $DB_USER = "root";
  $DB_PASS = "";

  session_start();
  // Connexion à la base de données
    try {
      $bdd = new PDO('mysql:host=localhost;dbname=rucherdelestagnol', "root", "", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    } catch(PDOException $e) {
      $bdd = NULL;
        echo ("Erreur: " . $e->getMessage());
    }    
?>

