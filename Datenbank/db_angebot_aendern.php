<?php
include "db_Verbindung.php";
if (isset($_POST["ID"])) {
    $query = "UPDATE Hilfsgesuch SET Titel= '".$_POST['titel']."',Beschreibung='".$_POST['beschreibung']."', Kategorie=".$_POST['kategorie']." WHERE ID = ".$_POST['ID'];
    $query = $verbindung->prepare($query);
    $query->execute();
}

$id;
if (isset($_GET['ID'])) {
    $id = $_GET['ID'];
} else {
    $id = $_POST['ID'];
}
try{
    $query = $verbindung->prepare("SELECT * FROM Hilfsgesuch WHERE Hilfsgesuch.ID = ?");
    $query->bindValue(1, $id);
    $query->execute();
    $ergebnis = $query->fetch();
}catch(Exception $e){

}


?>