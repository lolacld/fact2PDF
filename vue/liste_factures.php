<?php

require_once('/wamp64/www/fact2PDF/global/header.html');
require_once('/wamp64/www/fact2PDF/model/factureModel.php');
require_once('/wamp64/www/fact2PDF/model/database.php');
?>


<body>
 <h1>Liste des factures</h1>
 <table>
   <thead>
     <tr>
       <th>ID</th>
       <th>Nom</th>
       <th>Adresse mail</th>
       <th>Téléphone</th>
     </tr>
   </thead>
   <body>
     
     <tr>
         <?php


         $Facture = new Facture();
         
    if($Facture->getAllFactures()){
        echo "Voici la liste des factures clients.";
    } else {
      echo "probleme visualisation des factures";
    } 

       // echo json_encode();
            //blablabla
        ?>
     </tr>
    
   </tbody>
 </table>
</body>
</html>