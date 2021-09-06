<?php
require_once "model/database.php";
 
class UserModel extends Database
{
    public function getUsers($limit)
    {
        return $this->select("SELECT * FROM utilisateur ORDER BY id_utilisateur ASC LIMIT ?", ["i", $limit]);
    }
}