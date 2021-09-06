<?php
    // header("Access-Control-Allow-Origin: *");
    // header("Content-Type: application/json; charset=UTF-8");
    // header("Access-Control-Allow-Methods: POST");
    // header("Access-Control-Max-Age: 3600");
    // header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    include_once '../config/database.php';
    include_once '../class/facture.php';

    
    $database = new Database();
    $db = $database->getConnexion();

    $data = json_decode(file_get_contents("php://input"));

// creation 
    $fac = new Facture($db);

    // on initianilise les variables
    $fac->id = $data->id;
    $fac->montant = $data->montant;
    $fac->description = $data->description;
    $fac->tva = $data->tva;
    $fac->quantite = $data->quantite;
    $fac->Id_produit = $data->ID_produit;
    
    if($fac->createFacture()){
        echo 'Facture créé avec succès.';
    } else{
        echo 'Probleme creation facture.';
    }
?>