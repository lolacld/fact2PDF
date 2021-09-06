<?php
require_once('db_connect.php');
$request_method = $_SERVER["REQUEST_METHOD"];
include('commun/header.html');
include('commun/scriptsJS/scriptCommun.html');

// Listes des clients

//affichage de la liste des clients 

print"<h3>Liste des clients</h3>";

/*$rq1 = mysqli_query($conn, "select * from tb_client ");
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
print'</table>';*/

// Récupérer les donnees en base et afficher a l'aide d'une boucle while les enregistremetns

// voir pour a partir du client -> creer directmeent une facture

switch ($request_method) {
    case 'GET':
        if (!empty($_GET["id"])) {
            // Récupérer un seul client
            $id = intval($_GET["id"]);
            getClient($id);
        } else {
            // Récupérer tous les clients
            getClients();
        }
        break;
    default:
        // Requête invalide
        header("HTTP/1.0 405 Method Not Allowed");
        break;
}
?>

<?php
function getClients()
{
    global $conn;
    $query = "SELECT * FROM client";
    $response = array();
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_array($result)) {
        $response[] = $row;
    }
    header('Content-Type: application/json');
    echo json_encode($response, JSON_PRETTY_PRINT);
}

function getClient($id = 0)
{
    global $conn;
    $query = "SELECT * FROM client";
    if ($id != null) {
        $query .= " WHERE id=" . $id . " LIMIT 1";
    }
    $response = array();
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_array($result)) {
        $response[] = $row;
    }
    header('Content-Type: application/json');
    echo json_encode($response, JSON_PRETTY_PRINT);
}
?>
<!-- Footer -->
<?php include('commun/footer.html'); ?>