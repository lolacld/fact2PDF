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
    private $dsn = 'mysql:host=fac2PDF;dbname=fac2pdf;charset=utf8'; // vhost
    private $username = "root";
    private $password = "";
    private $db_name = "fac2pdf";

    // On commence par fermer la connexion si elle existait
   protected $connexion = null;

    // getter pour la connexion
    public function _construct() {
        // On essaie de se connecter
        try{
            $this->connexion = new PDO("mysql:host=" . $this->dsn . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->connexion->exec("set names utf8"); // On force les transactions en UTF-8
        }
        catch(PDOException $exception)
        { // On gère les erreurs éventuelles
            throw new Exception($exception->getMessage());
        }
        // On retourne la connexion
        return $this->connexion;
    }
}
 ?>