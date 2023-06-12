<?php

class Model_Hilfsgesuche{
    private $db;
    private $erg;
    public function __construct($pfad){
        //$db = new Datenbank($pfad);
        //$this->verbindung = $db->erstelleVerbindung();
        include "../Datenbank/db_Verbindung.php";
        $this->db = $verbindung;
    }

    public function neues_Hilfsgesuch($titel, $beschreibung, $kategorie){
        try{
            /* Querrys */
            $query = $this->db->prepare("INSERT INTO Hilfsgesuch(Titel, Beschreibung, Kategorie, Ersteller) VALUES (?,?,?,?)");

            /* Eintragen der Werte */
            $query->bindValue(1, $titel);
            $query->bindValue(2, $beschreibung);
            $query->bindValue(3, $kategorie);
            $query->bindValue(4, $_SESSION['UID']);

            /* Eintragung des Hilfsangebots */
            $query->execute();

            return true;
        }catch(Exception $e){
            return false;
        }
    }

}