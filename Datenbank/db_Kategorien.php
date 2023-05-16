<?php
/* Verninde */
include "db_Verbindung.php";

/* Query */
$query = "SELECT * FROM Kategorie";
$ergebnis = $verbindung->query($query);
$ergebnis = $ergebnis->fetchAll();

foreach ($ergebnis as $reihe) {
    $wert = htmlentities($reihe["ID"]);
    $bezeichnung = htmlentities($reihe["Name"]);
    echo "<option value=" . $wert . ">" . $bezeichnung . "</option>";
}
?>