<?php
/* TODO: Liste:
    - Testen ob Nutzer bereits vorhanden ist --> email Registriert
    - Überlegung auto Login oder weiterführen zur Login Seite?
    - Überlegung wo wird auf Richtige Daten getestet?
*/
/* Verbindung */
include "db_Verbindung.php";

/* Datenbank eintrag */
/* Überbrüfen ob Daten übermittelt worden sind */

if (isset($_POST['abgeschickt'])) {
    /* Überprüfe auf "Angriffe" */
    $vorname = mysqli_real_escape_string($verbindung, $_POST['vorname']);
    $nachname = mysqli_real_escape_string($verbindung, $_POST['nachname']);
    $adresse = mysqli_real_escape_string($verbindung, $_POST['straße']);
    $telnr = mysqli_real_escape_string($verbindung, $_POST['tele']);
    $plz = mysqli_real_escape_string($verbindung, $_POST['plz']);
    $stadt = mysqli_real_escape_string($verbindung, $_POST['stadt']);
    $email = mysqli_real_escape_string($verbindung, $_POST['email']);
    $passwort = sha1(mysqli_real_escape_string($verbindung, $_POST['passwort']));

    /* Querrys */
    $querry_Eintrag_Nutzer = "INSERT INTO `Nutzer`(`EMail`, `Vorname`, `Nachname`, `Addresse`, `PLZ`, `telnr`, `passwort`) 
                              VALUES ('" . $email . "','" . $vorname . "','" . $nachname . "','" . $adresse . "','" . $plz . "','" . $telnr . "','" . $passwort . "')";
    $querry_Stadt_Kontrolle = "SELECT * FROM Stadt WHERE PLZ = " . $plz . "";
    $querry_Eintrag_Stadt = "INSERT INTO `Stadt`(`PLZ`, `Name`) VALUES ('" . $plz . "','" . $stadt . "')";

    /* Kontrolle ob Stadt bereits bekannt ist */
    $abfrage = $verbindung->query($querry_Stadt_Kontrolle);
    if ($abfrage->num_rows == 0) {
        $verbindung->query($querry_Eintrag_Stadt);
    }
    /* Eintragung des Nutzers */
    $verbindung->query($querry_Eintrag_Nutzer);


    $verbindung->close();
    echo "Erfolg!";
} else {
    echo "Nichts vorhanden!";
}
?>