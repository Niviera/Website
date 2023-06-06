<?php
include "db_Verbindung.php";

if(isset($_POST['bestaetigt'])){
    /* TODO: Lagere Stadt abfrage aus */
    /* Kontrolle ob Stadt bereits bekannt ist */
    $querry_Stadt_Kontrolle = $verbindung->prepare("SELECT COUNT(PLZ) as anzahl FROM Stadt WHERE PLZ = ?");
    $querry_Stadt_Kontrolle->bindValue(1, $_POST['plz']);
    $querry_Stadt_Kontrolle->execute();
    $querry_Stadt_Kontrolle = $querry_Stadt_Kontrolle->fetch();
    if ($querry_Stadt_Kontrolle['anzahl'] == '0') {
        /* Stadt eintragen */
        $querry_Eintrag_Stadt = $verbindung->prepare("INSERT INTO Stadt(PLZ, Name) VALUES (?,?)");
        $querry_Eintrag_Stadt->bindValue(1, $_POST['plz']);
        $querry_Eintrag_Stadt->bindValue(2, $_POST['stadt']);
    }
    /*  */
    $query = "UPDATE Nutzer SET ID = ".$_SESSION['UID'];
    if(isset($_POST['vorname'])){
        $query = $query . ", Vorname = '". $_POST['vorname'] ."'";
    }
    if(isset($_POST['nachname'])){
        $query = $query . ", Nachname = '". $_POST['nachname'] ."'";
    }
    if(isset($_POST['straße'])){
        $query = $query . ", Addresse = '". $_POST['straße'] ."'";
    }
    if(isset($_POST['email'])){
        $query = $query . ", EMail = '". $_POST['email']. "'";
    }
    if(isset($_POST['plz'])){
        $query = $query . ", PLZ = ". $_POST['plz'];
    }
    $query = $query . " WHERE ID = ".$_SESSION['UID'];

    try{
        $query = $verbindung->prepare($query);
        $query->execute();
    }catch(Exception $e){

    }


}
?>