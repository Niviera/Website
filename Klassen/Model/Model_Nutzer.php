<?php

class Model_Nutzer{
    private $verbindung;

    public function __construct($pfad){
        //$db = new Datenbank($pfad);
        //$this->verbindung = $db->erstelleVerbindung();
        include "../Datenbank/db_Verbindung.php";
        $this->verbindung = $verbindung;
    }

    /* Neue Eintragungen */
    public function neuer_Nutzer($email, $vorname, $nachname, $straße, $plz, $tele, $pw, $bild){
        try{
            $query = $this->verbindung->prepare("INSERT INTO Nutzer(EMail, Vorname, Nachname, Addresse, PLZ, telnr, passwort, bild) 
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
            $query = $this->verbindung->prepare("INSERT INTO Stadt(PLZ, Name) VALUES (?,?)");
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
            $query = "SELECT COUNT(*) FROM Nutzer WHERE EMail = ".$email;
            $query = $this->verbindung->prepare($query);
            $query->execute();
            return $query->fetch();
        }catch(Exception $e){

        }
    }

    public function kontrolliere_Stadt($plz){
        try{
            $query = "SELECT COUNT(*) FROM Stadt WHERE PLZ = ?";
            $query = $this->verbindung->prepare($query);
            $query->bindValue(1, $plz);
            $query->execute();
            return $query->fetch();
        }catch(Exception $e){

        }
    }

    /* Abfragen nach Daten */
    public function get_User_Data_EMail($email){
        try{
            $query = "SELECT * FROM Nutzer LEFT JOIN Stadt ON Nutzer.PLZ = Stadt.PLZ WHERE ID = ".$email;
            $query = $this->verbindung->prepare($query);
            $query->execute();
            return $query->fetch();
        }catch(Exception $e){

        }

    }

    /* Update von Daten */


}

?>