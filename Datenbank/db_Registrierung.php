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

    $bild = "standart.jpeg";
    $erlaubteTypen = array(IMAGETYPE_PNG, IMAGETYPE_JPEG);

    /* Handhabung von Bildern */
    if ($_FILES['dateiHochladen']['name'] <> "") {
        $fileType = exif_imagetype($_FILES['dateiHochladen']['tmp_name']);
        if (in_array($fileType, $erlaubteTypen)) {
            $bild = $_FILES['dateiHochladen']['name'];
            move_uploaded_file(
                $_FILES['dateiHochladen']['tmp_name'],
                '../Bilder/profile/' . $_FILES['dateiHochladen']['name']
            );
        } else {
            echo "Es wurde ein Falsches Bildformat verwendet!";
        }
    }

    /* Querrys */
    $querry_Eintrag_Nutzer = $verbindung->prepare("INSERT INTO Nutzer(EMail, Vorname, Nachname, Addresse, PLZ, telnr, passwort, bild) 
                              VALUES (?,?,?,?,?,?,?,?)");
    $querry_Stadt_Kontrolle = $verbindung->prepare("SELECT COUNT(PLZ) as anzahl FROM Stadt WHERE PLZ = ?");


    /* Kontrolle ob Stadt bereits bekannt ist */
    $querry_Stadt_Kontrolle->bindValue(1, $_POST['plz']);
    $querry_Stadt_Kontrolle->execute();
    $querry_Stadt_Kontrolle = $querry_Stadt_Kontrolle->fetch();
    if ($querry_Stadt_Kontrolle['anzahl'] == '0') {
        /* Stadt eintragen */
        $querry_Eintrag_Stadt = $verbindung->prepare("INSERT INTO Stadt(PLZ, Name) VALUES (?,?)");
        $querry_Eintrag_Stadt->bindValue(1, $_POST['plz']);
        $querry_Eintrag_Stadt->bindValue(2, $_POST['stadt']);
    }

    /* Nutzer eintragen */
    $querry_Eintrag_Nutzer->bindValue(1, $_POST['email']);
    $querry_Eintrag_Nutzer->bindValue(2, $_POST['vorname']);
    $querry_Eintrag_Nutzer->bindValue(3, $_POST['nachname']);
    $querry_Eintrag_Nutzer->bindValue(4, $_POST['straße']);
    $querry_Eintrag_Nutzer->bindValue(5, $_POST['plz']);
    $querry_Eintrag_Nutzer->bindValue(6, $_POST['tele']);
    $querry_Eintrag_Nutzer->bindValue(7, sha1($_POST['passwort']));
    $querry_Eintrag_Nutzer->bindValue(8, $bild);

    $querry_Eintrag_Nutzer->execute();

    echo "Erfolg!";
} else {
    echo "Nichts vorhanden!";
}
?>