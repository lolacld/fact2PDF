<?php
    
    include_once('/wamp64/www/fac2PDF/fact2PDF/class/produit.php');
    include_once('/wamp64/www/fac2PDF/fact2PDF/config/database.php');

   //La méthode GET est utilisée ici car nous ne pouvions pas utiliser POST (casse)
    $data = $_GET; 
    
    // Instanciation Class client pour manipuler notre objet Client 
    $Produit = new Produit();

    // on initialiise les variables
    $Produit->id = $data['id'];

    if($Produit->deleteProduit()){
        echo "Le produit a bien ete supprime.";
    } else{
        "Probleme suppresion du produit";
    }
        
?>