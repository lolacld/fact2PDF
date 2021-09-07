<?php
// include_once('/wamp64/www/fac2PDF/fact2PDF/config/database.php');
// structure html css
include_once('/wamp64/www/fac2PDf/fact2PDF/global/scriptsJS/scriptCommun.html');
include_once('/wamp64/www/fac2PDf/fact2PDF/global/header.html');
include_once('/wamp64/www/fac2PDf/fact2PDF/class/client.php');
include_once('../config/database.php');

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
         $database = new Database();
         $db = $database->getConnexion();

        echo json_encode();
            //blablabla
        ?>
     </tr>
    
   </tbody>
 </table>
</body>
</html>