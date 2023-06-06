<?php
include "db_Verbindung.php";

/* Abfrage eigener Angebote */
$query = $verbindung->prepare("SELECT Hilfsgesuch.ID AS ID, Hilfsgesuch.Beschreibung, Hilfsgesuch.Titel, Kategorie.Name FROM Hilfsgesuch
LEFT JOIN Kategorie ON Hilfsgesuch.Kategorie = Kategorie.ID WHERE Hilfsgesuch.Ersteller = ?");
$query->bindValue(1, $_SESSION['UID']);

$query->execute();

$ergebnis = $query->fetchAll();
