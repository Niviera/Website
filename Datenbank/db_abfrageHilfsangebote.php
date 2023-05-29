<?php
include "db_Verbindung.php";
$query = "SELECT Hilfsgesuch.ID, Titel, SUBSTRING(Hilfsgesuch.Beschreibung, 1, 100) AS Beschreibung, Kategorie ,Nutzer.ID as nutzerID,Vorname, Nachname 
            FROM Hilfsgesuch LEFT JOIN Nutzer on Hilfsgesuch.Ersteller = Nutzer.ID";
$query_Zusatz_1 = "";
$query_Zusatz_2 = "";


/* Such abfrage spezifizieren */
if ($_GET['sucheingabe'] != '') {
  $query_Zusatz_1 = "Beschreibung LIKE '%" . $_GET['sucheingabe'] . "%' 
            OR Vorname LIKE '%" . $_GET['sucheingabe'] . "%'
            OR Nachname LIKE '%" . $_GET['sucheingabe'] . "%'
            OR Titel LIKE '%" . $_GET['sucheingabe'] . "%'
            ";
}
if ($_GET['kategorie'] != '') {
  $query_Zusatz_2 = "Kategorie = " . $_GET['kategorie'];
}

/* Query bauen */
if ($_GET['sucheingabe'] != '' && $_GET['kategorie'] != '') {
  $query = $query . " WHERE (" . $query_Zusatz_1 . ") AND (" . $query_Zusatz_2 . ")";
} else if ($_GET['sucheingabe'] != '' || $_GET['kategorie'] != '') {
  $query = $query . " WHERE " . $query_Zusatz_1 . "" . $query_Zusatz_2;
}
$query = $verbindung->prepare($query);
$query->execute();
$query = $query->fetchAll();
?>