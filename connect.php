<?php

/**
 * PDO avantage
 *  a une classe d'exception pour gérer tous les problèmes qui peuvent survenir dans nos requêtes de DB
 */

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connecté avec succès ! ";

?>