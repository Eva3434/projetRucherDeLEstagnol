<?php
include('../PHP/connect.php');



if(!empty($_POST["formModal"])) {    
    // On recherche si l'adresse email existe déjà en BDD
    $select = $bdd->prepare("SELECT * FROM utilisateurs WHERE mail_utilisateur=:mail_utilisateur;");
    $select->bindParam(":mail_utilisateur", $_POST["email_connexion"]);
    $select->execute();
}
 // La fonction rowCount() permet de donner le nombre de lignes pour une requête
if($select->rowCount() === 1) {    
    $utilisateur = $select->fetch(PDO::FETCH_ASSOC);
    // Permet de vérifier le hash par rapport au mot de passe saisi
    if(password_verify($_POST["mot_de_passe_connexion"], $utilisateur['mot_de_passe_utilisateur'])) {
    // On affecte les données de notre utilisateur dans notre super globale $_SESSION
    $_SESSION['utilisateur'] = $utilisateur;
    // Le header permet d'effectuer une requête HTTP, la valeur Location permet la redirection vers un autre fichier
    header('Location:'. $_POST['url_referer']);
    
}
} else {
    unset($_SESSION['utilisateur']);
}
?>