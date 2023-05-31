<?php
include "db_Verbindung.php";

/* Abfrage eigener Angebote */
$query = $verbindung->prepare("SELECT Hilfsgesuch.ID as ID, Beschreibung,Titel ,Kategorie.Name FROM Hilfsgesuch LEFT JOIN Kategorie ON Hilfsgesuch.Kategorie = Kategorie.ID WHERE Ersteller = ?");
$query->bindValue(1, $_SESSION['UID']);

$query->execute();

$ergebnis = $query->fetchAll();
