<?php

/**
 * Créer une facture
 * 
* @return void
*/

public function creer(){

// Ecriture de la requête SQL en y insérant le nom de la table
$sql = "INSERT INTO " . $this->table . " SET nom=:nom, prix=:prix, description=:description, categories_id=:categories_id, created_at=:created_at";

// Préparation de la requête
$query = $this->connexion->prepare($sql);

// Protection contre les injections
$this->nom = htmlspecialchars(strip_tags($this->nom));
$this->prix = htmlspecialchars(strip_tags($this->prix));
$this->description = htmlspecialchars(strip_tags($this->description));
$this->categories_id = htmlspecialchars(strip_tags($this->categories_id));
$this->created_at = htmlspecialchars(strip_tags($this->created_at));

// Ajout des données protégées
$query->bindParam(":nom", $this->nom);p
$query->bindParam(":prix", $this->prix);
$query->bindParam(":description", $this->description);
$query->bindParam(":categories_id", $this->categories_id);
$query->bindParam(":created_at", $this->created_at);

// Exécution de la requête
if($query->execute()){
    return true;
}
return false;
}


/**
 * Ajouter un client
 * 
* @return void
*/

public function creer(){

    // Ecriture de la requête SQL en y insérant le nom de la table
    $sql = "INSERT INTO " . $this->table . " SET nom=:nom, prix=:prix, description=:description, categories_id=:categories_id, created_at=:created_at";
    
    // Préparation de la requête
    $query = $this->connexion->prepare($sql);
    
    // Protection contre les injections
    $this->nom = htmlspecialchars(strip_tags($this->nom));
    $this->prix = htmlspecialchars(strip_tags($this->prix));
    $this->description = htmlspecialchars(strip_tags($this->description));
    $this->categories_id = htmlspecialchars(strip_tags($this->categories_id));
    $this->created_at = htmlspecialchars(strip_tags($this->created_at));
    
    // Ajout des données protégées
    $query->bindParam(":nom", $this->nom);
    $query->bindParam(":prix", $this->prix);
    $query->bindParam(":description", $this->description);
    $query->bindParam(":categories_id", $this->categories_id);
    $query->bindParam(":created_at", $this->created_at);
    
    // Exécution de la requête
    if($query->execute()){
        return true;
    }
    return false;
    }
    

