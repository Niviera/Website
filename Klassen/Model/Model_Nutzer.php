<?php

class Model_Nutzer{
    private $db;
    private $erg;
    /* Allgemeine funktionen */
    public function __construct($pfad){
        //$db = new Datenbank($pfad);
        //$this->verbindung = $db->erstelleVerbindung();
        include "../Datenbank/db_Verbindung.php";
        $this->db = $verbindung;
    }

    public function get_Daten(){
        return $this->erg;
    }

    /* Neue Eintragungen */
    public function neuer_Nutzer($email, $vorname, $nachname, $straße, $plz, $tele, $pw, $bild){
        try{
            $query = $this->db->prepare("INSERT INTO Nutzer(EMail, Vorname, Nachname, Addresse, PLZ, telnr, passwort, bild) 
            VALUES (?,?,?,?,?,?,?,?)");

            $query->bindValue(1, $email);
            $query->bindValue(2, $vorname);
            $query->bindValue(3, $nachname);
            $query->bindValue(4, $straße);
            $query->bindValue(5, $plz);
            $query->bindValue(6, $tele);
            $query->bindValue(7,$pw);
            $query->bindValue(8, $bild);

            $query->execute();

        }catch(Exception $e){

        }
    }

    public function neue_Stadt($plz, $name){
        try{
            $query = $this->db->prepare("INSERT INTO Stadt(PLZ, Name) VALUES (?,?)");
            $query->bindValue(1, $_POST['plz']);
            $query->bindValue(2, $_POST['stadt']);
            $query->execute();
        }catch(Exception $e){
            return false;
        }
    }

    /* Kontroll abfragen */
    public function kontrolliere_Email($email){
        try{
            $query = $this->db->prepare("SELECT COUNT(*) FROM Nutzer WHERE EMail = ?");
            $query->execute([$email]);
            $this->erg = $query->fetch();
            return $this->erg;
        }catch(Exception $e){

        }
    }

    public function kontrolliere_Stadt($plz){
        try{
            $query = $this->db->prepare("SELECT COUNT(*) FROM Stadt WHERE PLZ = ?");
            $query->execute([$plz]);
            $this->erg = $query->fetch();
            return true;
        }catch(Exception $e){
            return false;
        }
    }

    /* Abfragen nach Daten */
    public function get_User_Data($email){
        try{
            $query = $this->db->prepare("SELECT * FROM Nutzer WHERE EMail = ?");
            $query->execute([$email]);
            $this->erg = $query->fetch();
            return $this->erg;
        }catch(Exception $e){
            return false;
        }
    }

    public function get_User_Date_ID($id){
        try{
            $query = $this->db->prepare("SELECT * FROM Nutzer LEFT JOIN Stadt ON Nutzer.PLZ = Stadt.PLZ WHERE ID = ?");
            $query->execute([$id]);
            $this->erg = $query->fetch();
            return true;
        }catch(Exception $e){
            return false;
        }
    }

    /* Update von Daten */
    public function update_User_Data($id, $vorname, $nachname, $straße, $plz, $email){
        try{
            $query = $this->db->prepare("UPDATE Nutzer SET Vorname = ?, Nachname = ?, Addresse = ?, PLZ = ?, EMail = ? WHERE ID = ?");
            $query->bindValue(1, $vorname);
            $query->bindValue(2, $nachname);
            $query->bindValue(3, $straße);
            $query->bindValue(4, $plz);
            $query->bindValue(5, $email);
            $query->bindValue(6, $id);

            $query->execute();
            return true;
        }catch(Exception $e){
            return false;
        }

    }


}

?>