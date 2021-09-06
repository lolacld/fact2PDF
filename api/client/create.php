<?php
    
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    include_once('/wamp64/www/fac2PDF/fact2PDF/class/client.php');
    include_once('/wamp64/www/fac2PDF/fact2PDF/config/database.php');
    
    $database = new Database();
    $db = $database->getConnexion();

    $client = new Client($db);

    $data = json_decode(file_get_contents("php://input"));

    // on initianilise les variables
    $client->nom = $data->nom;
    $client->email = $data->email;
    $client->telephone = $data->telephone;
    $client->adresse = $data->adresse;
    
    
    if($fac->createClient()){
        echo 'client créé avec succès.';
    } else{
        echo 'Probleme creation client.';
    }
?>