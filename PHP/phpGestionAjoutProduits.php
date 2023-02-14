<?php
// On inclut notre connecteur à la base de données
include('../PHP/connect.php');
include('../pages/pageAjoutProduits.php');

    // On entre dans la boucle seulement lors de l’envoi du formulaire
    if(!empty($_POST["formAjoutProduits"])) {
        // On recherche si le nom de l'aticle existe déjà en BDD
        $select = $bdd->prepare("SELECT nom_produit FROM produits WHERE nom_produit=:nom_produit;");
        $select->bindParam(":nom_produit", $_POST["ajoutArticleNom"]);
        $select->execute(); 
        if(empty($select->fetch(PDO::FETCH_COLUMN))) {
            // Si ce n'est pas le cas, on vient l'insérer
            $insert = $bdd->prepare("INSERT INTO produits(nom_produit, description_produit, prix_produit, id_categorie)
                                    VALUES(:nom_produit, :description_produit, :prix_produit, :id_categorie);");
            $insert->bindParam(":nom_produit", $_POST['ajoutArticleNom']);
            $insert->bindParam(":description_produit", $_POST['ajoutArticleDescription']);
            $insert->bindParam(":prix_produit", $_POST['ajoutArticlePrix']);
            $insert->bindParam(":id_categorie", $_POST['ajoutArticleCategorie']);
            if($insert->execute()) {
                // Si aucune erreur ne se produit, on propose de se connecter
                die('<p style=”color: green;”>Ajout produit réussi.</p>');
            }
            die('<p style=”color: red;”>Ajout produit annulé.</p>');
        }
    }

?>