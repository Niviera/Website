<?php
include "db_Verbindung.php";

/* Query */
$query = "SELECT * FROM Nutzer WHERE ID = " . $_GET['id'];

$ergebnis = $verbindung->query($query);
$ergebnis = $ergebnis->fetch();
?>