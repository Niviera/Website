<?php

/* Verninde */
include "db_Verbindung.php";

/* Query */
$query = $verbindung->prepare("SELECT * FROM Kategorie");

$query->execute();
$query = $query->fetchAll();

?>