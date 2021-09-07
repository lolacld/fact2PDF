<?php

// include_once('/wamp64/www/fac2PDF/fact2PDF/config/database.php');
// structure html css
include_once('/wamp64/www/fac2PDf/fact2PDF/global/scriptsJS/scriptCommun.html');
include('/wamp64/www/fac2PDF/fact2PDF/global/header.html');
include_once('/wamp64/www/fac2PDf/fact2PDF/class/facture.php');
?>

<html>
 <head>
		<meta charset="UTF-8">
		<title>FAC2PDF</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<link rel="stylesheet" href="../fact2PDF/global/css/style.css" />
</head>
<?php


// Variable 
?>
<h1>Liste des factures</h1>
 <table>
   <thead>
     <tr>
       <th>Montant</th>
       <th>Description</th>
       <th>tva</th>
       <th>quantite</th>
       <th>created</th>
     </tr>
   </thead>
   <tbody>
     <?php
     
      ?>
     <tr>
       <td>
           <?php 
        //    $database = new Database();
        //    $db = $database->getConnexion();

           $facture = new Facture($db);
                // liste des factures
                $listFactures = $facture->getAllFactures();
                echo '<pre>'.json_encode($listFactures).'</pre>';
           ?>
       </td>
     </tr>
   </tbody>
 </table>
</body>
</html>

<?php
include_once('/wamp64/www/fac2PDf/fact2PDF/global/footer.html');
?>


