<?php
if (isset($_POST['abgeschickt'])) {
    /* Verbindung */
    include "db_Verbindung.php";

    /* Datenbank eintrag */
    /* Überbrüfen ob Daten übermittelt worden sind */

    /* Überprüfe auf "Angriffe" */
    $titel = mysqli_real_escape_string($verbindung, $_POST['titel']);
    $kategorie = mysqli_real_escape_string($verbindung, $_POST['kategorie']);
    $beschreibung = mysqli_real_escape_string($verbindung, $_POST['beschreibung']);
    $ersteller = mysqli_real_escape_string($verbindung, $_POST['ersteller']);


    /* Querrys */
    $query = "INSERT INTO Hilfsgesuch(Titel, Beschreibung, Kategorie, Ersteller)
     VALUES ('$titel','$beschreibung ','$kategorie','$ersteller')";

    /* Eintragung des Hilfsangebots */
    $verbindung->query($query);


    $verbindung->close();
}
?>