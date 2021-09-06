<?php

/* Voici notre classe de couche d'accès à la base de données, 
qui nous permet d'établir une connexion à la base de données MySQL. 

Ce fichier contient des méthodes génériques telles que selectet executeStatement
qui nous permettent de sélectionner des enregistrements dans une base de données. 
Nous allons créer des classes de modèle correspondantes qui étendent la 
Databaseclasse.
*/

// Utilisation de l'extension PDO (evite contr einjection SQL et XSS)

class Database{

    // Propriétés de la base de données
    private $host = "localhost";
    private $database_name = "fac2pdf";
    private $username = "root";
    private $password = "";

    public $conn;

    public function getConnexion(){
    // On commence par fermer la connexion si elle existait
   $this->conn = null;
    try 
    {
        $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->database_name, $this->username, $this->password);
        $this->conn->exec("set names utf8"); // On force les transactions en UTF-8
    } catch(PDOException $exception){
        echo "Pas de connexion possible: " . $exception->getMessage();
    }
    return $this->conn;
}
}  
 ?>