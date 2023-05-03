<?php


    if(empty($_GET['filtre'])){
        $produits = $bdd->query('SELECT * FROM produits')->fetchAll();
        foreach ($produits as $produit) {            
        echo '<article>
        <img src="../images/imagesProduits/' . $produit['image_produit'] .'" class="imgBoutique"> 
        <p class="boutiqueNomProduit">' . $produit['nom_produit'] . '</p>
        <p class="boutiquePrix">' . number_format($produit['prix_produit'], 2, ',', ' ') . ' €</p>
        <a href="pageProduit.php?selectionner='. $produit['id_produit'] .'" "class="ajouter">Afficher le produit</a> 
        </article>';          
        }
    }   
    elseif($_GET['filtre'] == 'miels'){
        $produits = $bdd->query('SELECT * FROM produits WHERE id_categorie = 1')->fetchAll();
        foreach ($produits as $produit) {            
            echo '<article>
            <img src="../images/imagesProduits/' .$produit['image_produit'] .'" class="imgBoutique"> 
            <p class="boutiqueNomProduit">' . $produit['nom_produit'] . '</p>
            <p class="boutiquePrix">' . number_format($produit['prix_produit'], 2, ',', ' ') . '€</p>
            <a href="pageProduit.php?selectionner='. $produit['id_produit'] .'" "class="ajouter">Afficher le produit</a> 
            </article>';          
        }
        }
    elseif($_GET['filtre'] == 'ruche'){
        $produits = $bdd->query('SELECT * FROM produits WHERE id_categorie = 2')->fetchAll();
        foreach ($produits as $produit) {            
            echo '<article>
            <img src="../images/imagesProduits/' .$produit['image_produit'] .'" class="imgBoutique"> 
            <p class="boutiqueNomProduit">' . $produit['nom_produit'] . '</p>
            <p class="boutiquePrix">' . number_format($produit['prix_produit'], 2, ',', ' ') . '€</p>
            <a href="pageProduit.php?selectionner='. $produit['id_produit'] .'" "class="ajouter">Afficher le produit</a> 
            </article>';          
        }
        }
        elseif($_GET['filtre'] == 'coffrets'){
        $produits = $bdd->query('SELECT * FROM produits WHERE id_categorie = 3')->fetchAll();
        foreach ($produits as $produit) {            
            echo '<article>
            <img src="../images/imagesProduits/' .$produit['image_produit'] .'" class="imgBoutique"> 
            <p class="boutiqueNomProduit">' . $produit['nom_produit'] . '</p>
            <p class="boutiquePrix">' . number_format($produit['prix_produit'], 2, ',', ' ') . '€</p>
            <a href="pageProduit.php?selectionner='. $produit['id_produit'] .'" "class="ajouter">Afficher le produit</a> 
            </article>';          
        }
    }
    // echo gettype($produit['prix_produit']);
    // $prix = floatval($produit['prix_produit']);
    // echo gettype($prix);
    // echo  $prix  ;
    // setlocale(LC_MONETARY, 'fr_FR');
    // echo money_format('%i', $prix);