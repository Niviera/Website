<?php

class Model_Hilfsgesuche{
    private $db;
    private $erg;
    public function __construct($pfad){
        //$db = new Datenbank($pfad);
        //$this->verbindung = $db->erstelleVerbindung();
        include $pfad."db_Verbindung.php";
        $this->db = $verbindung;
    }

    public function get_ergebnisse(){
        return $this->erg;
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

    public function hilfsgesuche(){
        try{
            $query = "SELECT Hilfsgesuch.ID as ID, Titel, SUBSTRING(Hilfsgesuch.Beschreibung, 1, 100) AS Beschreibung, Kategorie ,Nutzer.ID as nutzerID, Vorname, Nachname 
            FROM Hilfsgesuch LEFT JOIN Nutzer on Hilfsgesuch.Ersteller = Nutzer.ID";
            $query = $this->db->prepare($query);
            $query->execute();
            $this->erg = $query->fetchAll();
            return true;
        }catch(Exception $e){
            return false;
        }

    }

}