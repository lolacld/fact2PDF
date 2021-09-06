<?php


/*
 — Rend la connexion à la base de données prête.
getAllFactures() — Obtenez tous les enregistrements.
getSingleFacture() — Obtenez des enregistrements uniques.
createFacture () — Créer un enregistrement.
updateFacture() — Mettre à jour l'enregistrement.
deleteFacture() — Supprime un enregistrement.
*/

class Facture {
    
        // Connection
        private $conn;

        // Table
        private $db_table = "factures";

        // Columns
        public $ID;
        public $montant;
        public $description;
        public $tva;
        public $quantite;
        public $ID_produit;

        // Db connection
        public function __construct($db){
            $this->conn = $db;
        }

        // GET ALL
        public function getAllFactures(){
            $sqlQuery = "SELECT * FROM factures";
            $stmt = $this->conn->prepare($sqlQuery);
            $stmt->execute();
            return $stmt;
        }

        // CREATE
        public function createFacture(){
            $sqlQuery = "INSERT INTO
                        factures
                    SET
                        id = :id,
                        montant = :montant, 
                        description = :description, 
                        tva = :tva, 
                        quantite = :quantite, 
                        id_produit = :id_produit";
        
            $stmt = $this->conn->prepare($sqlQuery);
        
            // sanitize
            $this->ID = htmlspecialchars(strip_tags($this->ID));
            $this->montant = htmlspecialchars(strip_tags($this->montant));
            $this->description = htmlspecialchars(strip_tags($this->description));
            $this->tva = htmlspecialchars(strip_tags($this->tva));
            $this->quantite = htmlspecialchars(strip_tags($this->quantite));
            $this->ID_produit = htmlspecialchars(strip_tags($this->ID_produit));
        
            // bind data
            $stmt->bindParam(":montant", $this->ID);
            $stmt->bindParam(":montant", $this->montant);
            $stmt->bindParam(":description", $this->description);
            $stmt->bindParam(":tva", $this->tva);
            $stmt->bindParam(":quantite", $this->quantite);
            $stmt->bindParam(":id_produit", $this->id_produit);
        
            if($stmt->execute()){
               return true;
            }
            return false;
        }

        // READ single
        public function getSingleFacture(){
            $sqlQuery = "SELECT
                        id, 
                        montant, 
                        description, 
                        tva, 
                        quantite, 
                        id_produit
                      FROM
                        ". $this->db_table ."
                    WHERE 
                       id = ?
                    LIMIT 0,1";

            $stmt = $this->conn->prepare($sqlQuery);

            $stmt->bindParam(1, $this->id);

            $stmt->execute();

            $dataRow = $stmt->fetch(PDO::FETCH_ASSOC);
            
            $this->ID = $dataRow['ID'];
            $this->montant = $dataRow['montant'];
            $this->description = $dataRow['description'];
            $this->tva = $dataRow['tva'];
            $this->quantite = $dataRow['quantite'];
            $this->ID_produit = $dataRow['id_produit'];
        }        

        // UPDATE facture
        public function updateFacture(){
            $sqlQuery = "UPDATE
                        ". $this->db_table ."
                    SET
                        ID = :ID,
                        montant = :montant, 
                        description = :description, 
                        tva = :tva, 
                        quantite = :quantite, 
                        Id_produit = :Id_produit,
                    WHERE 
                        id = :id";
        
            $stmt = $this->conn->prepare($sqlQuery);
        
            $this->Id=htmlspecialchars(strip_tags($this->Id));
            $this->montant=htmlspecialchars(strip_tags($this->montant));
            $this->description=htmlspecialchars(strip_tags($this->description));
            $this->tva=htmlspecialchars(strip_tags($this->tva));
            $this->quantite=htmlspecialchars(strip_tags($this->quantite));
            $this->ID_produit=htmlspecialchars(strip_tags($this->ID_produit));
        
            // bind data
            $stmt->bindParam(":ID", $this->ID);
            $stmt->bindParam(":montant", $this->montant);
            $stmt->bindParam(":description", $this->description);
            $stmt->bindParam(":tva", $this->tva);
            $stmt->bindParam(":quantite", $this->quantite);
            $stmt->bindParam(":Id_produit", $this->ID_produit);
        
            if($stmt->execute()){
               return true;
            }
            return false;
        }

        // DELETE
        function deleteFacture(){
            $sqlQuery = "DELETE FROM " . $this->db_table . " WHERE id = ?";
            $stmt = $this->conn->prepare($sqlQuery);
        
            $this->ID=htmlspecialchars(strip_tags($this->ID));
        
            $stmt->bindParam(1, $this->id);
        
            if($stmt->execute()){
                return true;
            }
            return false;
        }

    }
?>
