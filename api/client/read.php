<?php

    //header("Content-Type: application/json; charset=UTF-8");
    
    include_once('/wamp64/www/fac2PDF/fact2PDF/class/client.php');
    include_once('/wamp64/www/fac2PDF/fact2PDF/config/database.php');
        // script js et jsquery
    include('/wamp64/www/fac2PDF/fact2PDF/global/scriptsJS/scriptCommun.html');
    // structure html css
    include('/wamp64/www/fac2PDF/fact2PDF/global/header.html');
   

    $database = new Database();
    $db = $database->getConnexion();

    $client = new Client($db);

    $stmt = $client->getAllClients();
    $itemCount = $stmt->RowCount();

    if($stmt) {
       echo json_encode($itemCount); // affiche le nombre de nos enregistrements
    }

    if($itemCount > 0){
        
        $clientArr = array();
        $clientArr["body"] = array();
        $clientArr["itemCount"] = $itemCount;

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            
            extract($row);
            $e = array(
                "id" => $id,
                "nom" => $nom,
                "email" => $email,
                "adresse" => $adresse
            );

            array_push($clientArr["body"], $e);
        }
        echo json_encode($clientArr);
    } else{
        http_response_code(404);
        echo json_encode(
            array("message" => "Aucun enregistrements trouve")
        );
    }

    //footer
    include('/wamp64/www/fac2PDF/fact2PDF/global/footer.html');
?>