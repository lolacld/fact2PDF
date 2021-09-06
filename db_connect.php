<?php

/**
 * PDO avantage
 *  a une classe d'exception pour gérer tous les problèmes qui peuvent survenir dans nos requêtes de DB
 */

$servername = "localhost";
$username = "root";
$password = "";
$db = "fact2pdf";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connecté avec succès ! ";

?>