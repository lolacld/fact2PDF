<?php
    
    include_once('/wamp64/www/fac2PDF/fact2PDF/class/facture.php');
    include_once('/wamp64/www/fac2PDF/fact2PDF/config/database.php');

   //La méthode GET est utilisée ici car nous ne pouvions pas utiliser POST (casse)
    $data = $_GET; 
    
    // Instanciation Class client pour manipuler notre objet Client 
    $Facture = new Facture();

    // on initialiise les variables
    $Facture->id = $data['id'];

    if($Facture->deleteFacture()){
        echo "La facture a bien ete supprime.";
    } else{
        "Probleme suppresion de la facture";
    }
        
?>