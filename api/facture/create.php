<?php
    include('/wamp64/www/fact2PDF/global/header.html');

    require_once('/wamp64/www/fact2PDF/model/factureModel.php');
    require_once('/wamp64/www/fact2PDF/model/database.php');

    $data = $_GET; 
    
    // Instanciation Class facture pour manipuler notre objet Facture 
    $Fac = new Facture();

    // on initialiise les variables
    $Fac->montant = $data['montant'];
    $Fac->description = $data['description'];
    $Fac->tva = $data['tva'];
    $Fac->quantite = $data['quantite'];
    $Fac->id_produit = $data['id_produit'];
    
    // var_dump($data);
    
    if($Fac->createFacture()){
        echo 'Facture créé avec succès.';
    } else{
        echo 'Probleme creation facture.';
    }
?>