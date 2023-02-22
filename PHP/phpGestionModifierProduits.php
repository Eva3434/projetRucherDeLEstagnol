<?php
// On inclut notre connecteur à la base de données
require('../PHP/connect.php');
// On entre dans la boucle seulement lors de l’envoi du formulaire
$req = $bdd->prepare("SELECT * FROM produits WHERE id_produit=:id_produit;");
$req->bindParam(":id_produit", $_GET['id']);
$req->execute();
$produit = $req->fetch(PDO::FETCH_ASSOC);

if (empty($_GET['id'])) {
    die("Veuillez choisir un produit à modifier");
} elseif (!empty($_POST['form_modifier'])) {
    $sql = 'UPDATE produits
                SET nom_produit=:nom_produit,
                    description_produit=:description_produit,
                    prix_produit=:prix_produit,
                    stock_produit=:stock_produit
                WHERE id_produit=:id_produit;';
    $req = $bdd->prepare($sql);
    $req->bindParam(":nom_produit", $_POST['nom_produit']);
    $req->bindParam(":description_produit", $_POST['description_produit']);
    $req->bindParam(":prix_produit", $_POST['prix_produit']);
    $req->bindParam(":stock_produit", $_POST['stock_produit']);
    $req->bindParam(":id_produit", $_POST['id_produit']);
    $req->execute();
    header('Location: ../pages/pageReadProduits.php');  
    $color = "orange;";
    $message = "Mise à jour effectuée";
}
?>