<?php

    //header("Content-Type: application/json; charset=UTF-8");
    
    include_once('/wamp64/www/fac2PDF/fact2PDF/class/facture.php');
    include_once('/wamp64/www/fac2PDF/fact2PDF/config/database.php');


    $database = new Database();
    $db = $database->getConnexion();

    $facture = new Facture($db);

    $stmt = $facture->getAllFactures();
    $itemCount = $stmt->RowCount();

    if($stmt) {
       echo json_encode($itemCount); // affiche le nombre de nos enregistrements
    }

    if($itemCount > 0){
        
        $facArr = array();
        $facArr["body"] = array();
        $facArr["itemCount"] = $itemCount;

        // 
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($row);
            $e = array(
               // "id" => $id,
                "montant" => $montant,
                "description" => $description,
               // "tva" => $tva,
                "quantite" => $quantite,
                "created" => $created
            );

            array_push($facArr["body"], $e);
        }
        echo json_encode($facArr);
    } else{
        http_response_code(404);
        echo json_encode(
            array("message" => "Aucun enregistrements trouve")
        );
    }
?>