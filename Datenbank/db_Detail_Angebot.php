<?php
include "db_Verbindung.php";
try{
    $query = "SELECT * FROM Hilfsgesuch LEFT JOIN Nutzer ON Hilfsgesuch.Ersteller = Nutzer.ID WHERE Hilfsgesuch.ID = ?";
    $query = $verbindung->prepare($query);
    $query->bindValue(1, $_GET['id']);
    $query->execute();

    $ergebnis = $query->fetch();
}catch(Exception $e){

}

?>