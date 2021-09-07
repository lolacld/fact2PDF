<?php
    include_once('/wamp64/www/fac2PDF/fact2PDF/class/facture.php');
    include_once('/wamp64/www/fac2PDF/fact2PDF/config/database.php');

     $data = $_GET; 

     // explication du _GET pour la creation car impossibilité d'utiliser POST

    // Instanciation Class facture pour manipuler notre objet Facture 
    $Fac = new Facture();

    // on initialiise les variables
    $Fac->montant = $data['montant'];
    $Fac->description = $data['description'];
    $Fac->tva = $data['tva'];
    $Fac->quantite = $data['quantite'];
    $Fac->id_produit = $data['id_produit'];
    
    if($Fac->createFacture()){
        echo 'Facture créé avec succès.';
    } else{
        echo 'Probleme creation facture.';
    }
?>