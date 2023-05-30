<?php
include "db_Verbindung.php";

$query = $verbindung->prepare("UPDATE Hilfsgesuch(Titel, Beschreibung, Kategorie, Ersteller) VALUES (?,?,?,?)");
$query->bindValue(1, $_POST['titel']);
$query->bindValue(2, $_POST['beschreibung']);
$query->bindValue(3, $_POST['kategorie']);
$query->bindValue(4, $_SESSION['UID']);

$query->execute();

$query = $verbindung->prepare("DELETE FROM Hilfsgesuch WHERE id = ?");
$query->bindValue(1, $_POST['titel']);


$query->execute();
?>