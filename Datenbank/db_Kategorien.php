<?php
/* Verninde */
include "db_Verbindung.php";

/* Query */
$query_Kategorien = "SELECT * FROM Kategorie";

$ergebnis = $verbindung->query($query_Kategorien);

if ($ergebnis->num_rows > 0) {
    while ($zeile = $ergebnis->fetch_assoc()) {
        echo "<option value=" . $zeile["ID"] . ">" . $zeile["Name"] . "</option>";
    }
}

$verbindung->close();
?>