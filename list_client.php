<?php
require_once('connect.php');
include('commun/header.html');
include('commun/scriptsJS/scriptCommun.html');

// Listes des clients

//affichage de la liste des clients 

print"<h3>Liste des clients</h3>";

$rq1 = mysqli_query($conn, "select * from tb_client ");
print'<table border="1" class="tab">
    <tr>
    <th>Contact client</th>
    <th>Nom client</th></tr>';

while ($rst = mysqli_fetch_assoc($rq1)) {
    print"<tr>";
    echo "<td>" . $rst['contact_client'] . "</td>";
    echo "<td>" . $rst['nom_client'] . "</td>";
    print"</tr>";
}
print'</table>';

// Récupérer les donnees en base et afficher a l'aide d'une boucle while les enregistremetns

// voir pour a partir du client -> creer directmeent une facture
?>
<!-- Footer -->
<?php include('commun/footer.html'); ?>

</body>
</html>