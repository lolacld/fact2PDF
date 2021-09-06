<?php
    // header("Access-Control-Allow-Origin: *");
    // header("Content-Type: application/json; charset=UTF-8");
    // header("Access-Control-Allow-Methods: POST");
    // header("Access-Control-Max-Age: 3600");
    // header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    include_once('/wamp64/www/fac2PDF/fact2PDF/class/facture.php');
    include_once('/wamp64/www/fac2PDF/fact2PDF/config/database.php');

    // Instanciation de notre classe Database pour la connexion et nos requetes
    $database = new Database();
    $db = $database->getConnexion();

    $data = json_decode(file_get_contents("php://input"));

    // Instanciation Class facture pour manipuler notre objet Facture 
    $Fac = new Facture($db);

    // on initialiise les variables
    $Fac->id = $data->id;
    $Fac->montant = $data->montant;
    $Fac->description = $data->description;
    $Fac->tva = $data->tva;
    $Fac->quantite = $data->quantite;
    $Fac->Id_produit = $data->ID_produit;
    
    if($Fac->createFacture()){
        echo 'Facture créé avec succès.';
    } else{
        echo 'Probleme creation facture.';
    }
?>