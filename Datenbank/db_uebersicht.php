<?php
include "db_Verbindung.php";

$query = $verbindung->prepare("DELETE FROM Hilfsgesuch WHERE id = ?");
$query->bindValue(1, $_POST['titel']);


$query->execute();

?>