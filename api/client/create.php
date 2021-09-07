<?php
    
    include_once('/wamp64/www/fac2PDF/fact2PDF/class/client.php');
    include_once('/wamp64/www/fac2PDF/fact2PDF/config/database.php');
    
    header('Content-Type: application/json');
    // Instanciation de notre classe Database pour la connexion et nos requetes
    $database = new Database();
    $db = $database->getConnexion();

    // Instanciation Class client pour manipuler notre objet client
    $client = new Client($db);

    //$result = $client->getAllClients();

    //$num = $result->rowCount();

    // if($num>0){
    //     $client_arr = array();
    //     $client_arr['data'] = array();

    //     while($row = $result->fetch(PDO::FETCH_ASSOC)) {
    //         extract($row);

    //         $facture_item = array(
    //             'id' => $id,
    //             'montant' => $montant,
    //             'description' => $description,
    //             'tva' => $tva,
    //             'quantite' => $quantite, 
    //             'created' => $created
    //         );
    //         // push array
    //         array_push($client_arr['data'], $facture_item);
    //     }
    //     echo json_encode($client_arr);
    // } else {
    //     // pas de clients
    //     echo json_encode(
    //         array('message' => 'no post found')
    //     );
    // }

    if($client->createClient()){
        echo 'client créé avec succès.';
    } else{
        echo "ko";
    }
        
?>