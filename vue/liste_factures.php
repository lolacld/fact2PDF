<?php

// include_once('/wamp64/www/fac2PDF/fact2PDF/config/database.php');
// structure html css
include_once('/wamp64/www/fac2PDf/fact2PDF/global/scriptsJS/scriptCommun.html');
include_once('/wamp64/www/fac2PDf/fact2PDF/global/header.html');
include_once('/wamp64/www/fac2PDf/fact2PDF/class/facture.php');

// Variable 
?>
<table>
    <tr>
        <th>Montant</th>
        <th>Description</th>
        <th>tva</th>
        <th>quantite</th>
        <th>id_produit</th>
        <th>created</th>
    </tr>
    <!-- <?php
   $facture = new Facture($db);
    
    foreach ($factures as $facture)
     {
         print '<table>';
        print '<tr>';
        print '<td>'.$facture->montant.'</td>';
        print '<td>'.$facture->description.'</td>';
        print '<td>'.$facture->tva.'</td>';
        print '<td>'.$facture->quantite.'</td>';
        print '<td>'.$facture->id_produit.'</td>';
        print '<td>'.$facture->created.'</td>';
        print '</tr>';
        print '</table>';
    } 












// include_once('wamp64/fac2PDf/fact2PDF/global/footer.html');

