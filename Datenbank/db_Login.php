<?php
include "db_Verbindung.php";
$email = $_POST['email'];
try{
    $query = $verbindung->prepare("SELECT COUNT(ID), ID, Vorname, passwort FROM Nutzer WHERE EMail = ?");
    $query->bindValue(1, $email);
    $query->execute();
    $query = $query->fetch();
    $nachricht = "Einloggen fehlgeschlagen. Falsche Daten?";

if ($query['COUNT(ID)'] == '1' && password_verify($_POST['passwort'], $query['passwort'])) {
    $_SESSION['UID'] = $query['ID'];
    $_SESSION['UName'] = $query['Vorname'];
    $nachricht = "Login erfolgreich. <br> Wilkommen, " . $_SESSION['UName'];
}

}catch(Exception $e){

}

?>