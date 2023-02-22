<?php

// On inclut notre connecteur à la base de données
require('../PHP/connect.php');
require('../pages/index.php');

    // On entre dans la boucle seulement lors de l’envoi du formulaire
    if(!empty($_POST["formInscription"])) {
        // On recherche si l'adresse email existe déjà en BDD
        $select = $bdd->prepare("SELECT mail_utilisateur FROM utilisateurs WHERE mail_utilisateur=:mail_utilisateur;");
        $select->bindParam(":mail_utilisateur", $_POST["email_inscription"]);
        $select->execute();
        if(empty($select->fetch(PDO::FETCH_COLUMN))) {
            // Si ce n'est pas le cas, on vient l'insérer
            $insert = $bdd->prepare("INSERT INTO utilisateurs(nom_utilisateur, prenom_utilisateur, mail_utilisateur, mot_de_passe_utilisateur)
                                    VALUES(:nom_utilisateur, :prenom_utilisateur, :mail_utilisateur, :mot_de_passe_utilisateur);");
            $insert->bindParam(":nom_utilisateur", $_POST['nom_inscription']);
            $insert->bindParam(":prenom_utilisateur", $_POST['prenom_inscription']);
            $insert->bindParam(":mail_utilisateur", $_POST['email_inscription']);
            // Nous hachons notre mdp avec l'algo BCRYPT et un coût algorithmique (par défaut à 10)
            $mdp_utilisateur = password_hash($_POST['mot_de_passe_inscription'], PASSWORD_BCRYPT, array("cost" => 12));
            $insert->bindParam("mot_de_passe_utilisateur", $mdp_utilisateur);
            if($insert->execute()) {
                // Si aucune erreur ne se produit, on propose de se connecter
                die('<p style=”color: green;”>Inscription réussie.</p><a href="../index.html">Se connecter.</a>');
            }
            die('<p style=”color: red;”>Inscription échouée.</p><a href="index.html">Réessayer.</a>');
        }
    }

?>