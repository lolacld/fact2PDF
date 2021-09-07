<?php

require_once('/wamp64/www/fac2PDF/fact2PDF/global/header.html');

include_once('/wamp64/www/fac2PDF/fact2PDF/model/factureModel.php');
include('/wamp64/www/fac2PDF/fact2PDF/model/database.php');

    $facture = new Facture();

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