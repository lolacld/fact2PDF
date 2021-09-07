<?php
    include_once('/wamp64/www/fac2PDF/fact2PDF/class/facture.php');
    include_once('/wamp64/www/fac2PDF/fact2PDF/config/database.php');

    //La méthode GET est utilisée par le navigateur pour demander au serveur de renvoyer une 
    // certaine ressource. Dans ce cas, le navigateur envoie un corps vide.
    // Les données envoyées au serveur sont ajoutées à l'URL
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