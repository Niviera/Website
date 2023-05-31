<?php
include "db_Verbindung.php";

/* Query */
$query = "SELECT * FROM Nutzer LEFT JOIN Stadt ON Nutzer.PLZ = Stadt.PLZ WHERE ID = ";
if (isset($_GET['id'])) {
    $query = $query . $_GET['id'];
} else {
    $query = $query . $_SESSION['UID'];
}


$ergebnis = $verbindung->query($query);
$ergebnis = $ergebnis->fetch();
?>