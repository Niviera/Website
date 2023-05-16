<?php
if (isset($_POST['abgeschickt'])) {
    /* Verbindung */
    include "db_Verbindung.php";

    /* Querrys */
    $query = $verbindung->prepare("INSERT INTO Hilfsgesuch(Titel, Beschreibung, Kategorie, Ersteller) VALUES (?,?,?,?)");

    /* Eintragen der Werte */
    $query->bindValue(1, $_POST['titel']);
    $query->bindValue(2, $_POST['beschreibung']);
    $query->bindValue(3, $_POST['kategorie']);
    $query->bindValue(4, $_POST['ersteller']);

    /* Eintragung des Hilfsangebots */
    $query->execute();

}
?>