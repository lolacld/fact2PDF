<?php

require_once('connect.php');
include('commun/header.html');
include('commun/scriptsJS/scriptCommun.html');
?>

    <form method='POST' action='add_facture.php'>

        <!-- Liste des factures en base -->
<?php
print"<h3>Liste des factures</h3>";

$rq2 = mysqli_query($conn, "select * from tb_service ");

print'<table border="1" class="tab">
	<tr>
		<th>Type service</th>
		<th>Description service</th>
		<th>Montant service (fcfa)</th>
		<th>Date service</th>
		<th>Contact client</th>
		<th>ID facture</th>
	</tr>';

while ($rst2 = mysqli_fetch_assoc($rq2)) {
    print"<tr>";
    echo "<td>" . $rst2['type_service'] . "</td>";
    echo "<td>" . $rst2['description_srv'] . "</td>";
    echo "<td>" . $rst2['montant_srv'] . "</td>";
    echo "<td>" . $rst2['date_srv'] . "</td>";
    echo "<td>" . $rst2['client_num'] . "</td>";
    echo "<td>" . $rst2['id_service'] . "</td>";
    print"</tr>";
}
print'</table>';
?>