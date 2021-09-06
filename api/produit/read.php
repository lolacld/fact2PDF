<?php

    //header("Content-Type: application/json; charset=UTF-8");
    
    include_once('/wamp64/www/fac2PDF/fact2PDF/class/produit.php');
    include_once('/wamp64/www/fac2PDF/fact2PDF/config/database.php');


    $database = new Database();
    $db = $database->getConnexion();

    $produit = new Produit($db);

    $stmt = $produit->getAllProduits();
    $itemCount = $stmt->RowCount();

    if($stmt) {
       echo json_encode($itemCount); // affiche le nombre de nos enregistrements
    }

    if($itemCount > 0){
        
        $produitArr = array();
        $produitArr["body"] = array();
        $produitArr["itemCount"] = $itemCount;

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            
            extract($row);
            $e = array(
                "nom" => $nom,
                "ref" => $ref,
                "description" => $description, 
                "prix" => $prix,
            );

            array_push($produitArr["body"], $e);
        }
        echo json_encode($produitArr);
    } else{
        http_response_code(404);
        echo json_encode(
            array("message" => "Aucun enregistrements trouve")
        );
    }
?>