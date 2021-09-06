<?php
    
    include_once('/wamp64/www/fac2PDF/fact2PDF/class/client.php');
    include_once('/wamp64/www/fac2PDF/fact2PDF/config/database.php');
    
    // Instanciation de notre classe Database pour la connexion et nos requetes
    $database = new Database();
    $db = $database->getConnexion();

    // Instanciation Class client pour manipuler notre objet client
    $client = new Client($db);

    $data = json_decode(file_get_contents("php://input"));

    // on initianilise les variables à la creation
    $client->nom = $data->nom;
    $client->email = $data->email;
    $client->telephone = $data->telephone;
    $client->adresse = $data->adresse;
    
    
    if($client->createClient()){
        echo 'client créé avec succès.';
    } else{
        echo 'Probleme creation client.';
    }
?>