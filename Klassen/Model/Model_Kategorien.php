<?php

class Model_Kategorien{
    private $db;
    private $erg;
    public function __construct($pfad){
        include $pfad."db_Verbindung.php";
        $this->db = $verbindung;
    }

    public function get_Kategorien(){
        try{
            $query = $this->db->prepare("SELECT * FROM Kategorie");
            $query->execute();
            $this->erg =  $query->fetchAll();
            return true;
        }catch(Exception $e){
            return false;
        }
    }

    public function get_erg(){
        return $this->erg;
    }

    
}