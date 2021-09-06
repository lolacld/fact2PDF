<?php


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

    // Methode SELECT et executeStatement pour séléectionner nos enregistrements dans la bdd
    public function select($query = "" , $params = [])
    {
        try {
            $stmt = $this->executeStatement( $query , $params );
            $result = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);               
            $stmt->close();
            return $result;

        } catch(Exception $e) {
            throw New Exception( $e->getMessage() );
        }
        return false;
    }

     
    private function executeStatement($query = "" , $params = [])
    {
        try {
            $stmt = $this->connection->prepare( $query );
 
            if($stmt === false) {
                throw New Exception("Unable to do prepared statement: " . $query);
            }
 
            if( $params ) {
                $stmt->bind_param($params[0], $params[1]);
            }
 
            $stmt->execute();
 
            return $stmt;
        } catch(Exception $e) {
            throw New Exception( $e->getMessage() );
        }   
    }
}
 ?>