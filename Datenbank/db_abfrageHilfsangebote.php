<?php
include "db_Verbindung.php";


/* Such anfrage */
$query = "SELECT Hilfsgesuch.ID, Hilfsgesuch.Titel, Hilfsgesuch.Beschreibung, Nutzer.ID as ID2, Nutzer.Vorname, Nutzer.Nachname FROM Hilfsgesuch , Nutzer";
$ergebnisse = $verbindung->query($query);
while ($reihe = $ergebnisse->fetch_assoc()) {
  echo '<div>
        <p class="ueberschrift"> ' . $reihe['Titel'] . ' </p>
        <a class="beschreibung" href="Pins/angebot_eins.php"> ' . $reihe['Beschreibung'] . '
        <a class="autor" href="Konto/konto_uebersicht.php">' . $reihe['Vorname'] . ' ' . $reihe['Nachname'] . '</a>
      </div>';

}

$verbindung->close();
?>