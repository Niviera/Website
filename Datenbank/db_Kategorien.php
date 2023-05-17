<?php
/* Verninde */
include "db_Verbindung.php";

/* Query */
$query = $verbindung->prepare("SELECT * FROM Kategorie");

$query->execute();
$ergebnis = $query->fetchAll();

foreach ($ergebnis as $reihe) {
    $wert = htmlentities($reihe["ID"]);
    $bezeichnung = htmlentities($reihe["Name"]);
    echo "<option value=" . $wert . ">" . $bezeichnung . "</option>";
}
?>