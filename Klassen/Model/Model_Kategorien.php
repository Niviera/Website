<?php

class Model_Kategorien{
    private $db;
    private $erg;
    public function __construct($pfad){
        //$db = new Datenbank($pfad);
        //$this->verbindung = $db->erstelleVerbindung();
        include "../Datenbank/db_Verbindung.php";
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