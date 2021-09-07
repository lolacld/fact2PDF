<?php

// structure html css
require_once('/wamp64/www/fac2PDf/fact2PDF/global/scriptsJS/scriptCommun.html');
include('/wamp64/www/fac2PDf/fact2PDF/global/header.html');

//require_once('../config/database.php');

require_once('/wamp64/www/fac2PDf/fact2PDF/class/client.php');
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