<?php
// On inclut notre connecteur à la base de données
require('../PHP/connect.php');
    // On entre dans la boucle seulement lors de l’envoi du formulaire
    if(!empty($_POST["formAjoutProduits"])) {
        // On recherche si le nom du produit existe déjà en BDD
        $select = $bdd->prepare("SELECT nom_produit FROM produits WHERE nom_produit=:nom_produit;");
        $select->bindParam(":nom_produit", $_POST["ajoutArticleNom"]);
        $select->execute(); 
        if(empty($select->fetch(PDO::FETCH_COLUMN))) {
            if (isset($_FILES['ajoutArticleImage'])) {             
                // On recupère le type, le chemin, le nom temporaire et le nom du fichier importé
                $arr = explode('/', $_FILES['ajoutArticleImage']['type']);                
                $tmpName = $_FILES['ajoutArticleImage']['tmp_name'];
                $name = $_FILES['ajoutArticleImage']['name'];    
                // On vérifie que le fichier soit bien une image                
                if('image' !== $arr[0]) {
                    $_SESSION['message'] = '<p class="messageAjout">Extension non autorisée</p>';
                } else {
                    // On ajoute les informations dans la BDD
                    $insert = $bdd->prepare("INSERT INTO produits(nom_produit, description_produit, prix_produit, 
                                            stock_produit, image_produit, id_categorie)
                                            VALUES(:nom_produit, :description_produit, :prix_produit, 10,
                                             :image_produit, :id_categorie);");
                    $insert->bindParam(":nom_produit", $_POST['ajoutArticleNom']);
                    $insert->bindParam(":description_produit", $_POST['ajoutArticleDescription']);
                    $insert->bindParam(":prix_produit", $_POST['ajoutArticlePrix']);
                    $insert->bindParam(":image_produit", $_FILES['ajoutArticleImage']['name']);
                    $insert->bindParam(":id_categorie", $_POST['ajoutArticleCategorie']);
                    if($insert->execute()) {
                        $fichier = move_uploaded_file($tmpName, "../images/imagesProduits/" . $name);
                        // Message pour informer l'utilisateur que l'article est ajouté
                        $_SESSION['message'] = '<p class="messageAjout">Ajout produit réussi.</p>';
                    } else {
                        // Message pour informer l'utilisateur que l'ajout produit est annulé
                        $_SESSION['message'] = '<p class="messageAjout">Ajout produit annulé.</p>';
                    }
                }
            }            
        } else {
            // Message pour informer l'utilisateur que l'article existe déja
            $_SESSION['message'] = '<p class="messageAjout">Produit déjà existant.</p>';
        }
    }
    // On renvoie sur la page d'ajout 
    header('Location: ../pages/pageAjoutProduits.php'); 
?>