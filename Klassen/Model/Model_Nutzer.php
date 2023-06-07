<?php

class Model_Nutzer{
    private $db;
    private $erg;
    public function __construct($pfad){
        //$db = new Datenbank($pfad);
        //$this->verbindung = $db->erstelleVerbindung();
        include "../Datenbank/db_Verbindung.php";
        $this->db = $verbindung;
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
            return $this->erg;
        }catch(Exception $e){

        }
    }

    /* Abfragen nach Daten */
    public function get_User_ID($email){
        try{
            $query = $this->db->prepare("SELECT * FROM Nutzer WHERE EMail = ?");
            $query->execute([$email]);
            $this->erg = $query->fetch();
            return $this->erg;
        }catch(Exception $e){

        }

    }

    /*  */

    /* Update von Daten */


}

?>