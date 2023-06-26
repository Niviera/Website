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

    public function hilfsgesuch_Detailed($id){
        try{
            $query = "SELECT * FROM Hilfsgesuch LEFT JOIN Nutzer ON Hilfsgesuch.Ersteller = Nutzer.ID WHERE Hilfsgesuch.ID = ?";
            $query = $this->db->prepare($query);
            $query->bindValue(1, $id);
            $query->execute();
        
            $this->erg = $query->fetch();
            return true;
        }catch(Exception $e){
            return false;
        }      
    }
    public function get_Nächste_ID($id){
        try{
            $query = "SELECT ID FROM Hilfsgesuch WHERE ID > ? ORDER BY ID LIMIT 1";
            $query = $this->db->prepare($query);
            $query->execute([$id]);
            $this->erg = $query->fetch();
            return true;
        }catch(Exception $e){
            return false;
        }
    }

    public function get_Vorherige_ID($id){
        try{
            $query = "SELECT ID FROM Hilfsgesuch WHERE ID < ? ORDER BY ID DESC LIMIT 1";
            $query = $this->db->prepare($query);
            $query->execute([$id]);
            $this->erg = $query->fetch();
            return true;
        }catch(Exception $e){
            return false;
        }
    }

    public function get_ID(){
        try{
            $query = "SELECT ID FROM Hilfsgesuch";
            $query = $this->db->prepare($query);
            $query->execute();
            $this->erg = $query->fetchAll();
            return true;
        }catch(Exception $e){
            return false;
        }
    }

    public function hilfsgesuche($kategorie, $sucheingabe){
        try{
            $query = "SELECT Hilfsgesuch.ID as ID, Titel, SUBSTRING(Hilfsgesuch.Beschreibung, 1, 100) AS Beschreibung, Kategorie ,Nutzer.ID as nutzerID, Vorname, Nachname 
            FROM Hilfsgesuch LEFT JOIN Nutzer on Hilfsgesuch.Ersteller = Nutzer.ID";

            /* TODO: Überarbeite die Sucheingabe! */
            $query_Zusatz_1 = "";
            $query_Zusatz_2 = "";

            /* Such abfrage spezifizieren */
            if ($sucheingabe != '') {
            $query_Zusatz_1 = "Beschreibung LIKE '%" . $sucheingabe . "%' 
                        OR Vorname LIKE '%" . $sucheingabe . "%'
                        OR Nachname LIKE '%" . $sucheingabe . "%'
                        OR Titel LIKE '%" . $sucheingabe . "%'
                        ";
            }
            if ($kategorie != '' && $kategorie != '0') {
            $query_Zusatz_2 = "Kategorie = " . $kategorie;
            }

            /* Query bauen */
            if ($query_Zusatz_1 != '' && $query_Zusatz_2 != '') {
            $query = $query . " WHERE (" . $query_Zusatz_1 . ") AND (" . $query_Zusatz_2 . ")";
            } else if ($query_Zusatz_1 != '' || $query_Zusatz_2 != '') {
            $query = $query . " WHERE " . $query_Zusatz_1 . "" . $query_Zusatz_2;
            }

            $query = $this->db->prepare($query);
            $query->execute();
            $this->erg = $query->fetchAll();
            return true;
        }catch(Exception $e){
            return false;
        }

    }

    public function angebot_aendern($titel, $beschreibung, $kategorie, $id){
        try{
            $query = "UPDATE Hilfsgesuch SET Titel=?,Beschreibung=?, Kategorie=? WHERE ID = ?";
            $query = $this->db->prepare($query);
            $query->bindValue(1, $titel);
            $query->bindValue(2, $beschreibung);
            $query->bindValue(3, $kategorie);
            $query->bindValue(4, $id);
            $query->execute();
            return true;
        }catch(Exception $e){
            return false;
        }
        
    }

}