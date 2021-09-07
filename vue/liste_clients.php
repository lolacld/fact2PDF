<?php

require_once('/wamp64/www/fact2PDF/global/header.html');
require_once('/wamp64/www/fact2PDF/model/clientModel.php');
require_once('/wamp64/www/fact2PDF/model/database.php');
?>

<body>
 <h1>Liste des clients</h1>
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
         $Client = new Client($db);
         
    if($Client->getAllClients()){
        echo "Voici la liste des clients.";
    } else {
      echo "probleme visualisation des clients";
    } 

       // echo json_encode();
            //blablabla
        ?>
     </tr>
    
   </tbody>
 </table>
</body>
</html>