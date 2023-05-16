<?php
include "db_Verbindung.php";


/* Such anfrage */
$query = "SELECT Hilfsgesuch.ID, Titel, Beschreibung, Nutzer.ID as nutzerID,Vorname, Nachname 
          FROM Hilfsgesuch LEFT JOIN Nutzer on Hilfsgesuch.Ersteller = Nutzer.ID";

foreach ($verbindung->query($query) as $reihe) {
  $titel = htmlentities($reihe['Titel']);
  $pin_ID = htmlentities($reihe['ID']);
  $beschreibung = htmlentities($reihe['Beschreibung']);
  $nutzer_ID = htmlentities($reihe['nutzerID']);
  $vorname = htmlentities($reihe['Vorname']);
  $nachname = htmlentities($reihe['Nachname']);

  echo '<div>
        <p class="ueberschrift"> ' . $titel . ' </p>
        <a class="beschreibung" href="Pins/angebot_eins.php?id=' . $pin_ID . '"> ' . $beschreibung . '</a>
        <a class="autor" href="Konto/konto_uebersicht.php?id=' . $nutzer_ID . '">' . $vorname . ' ' . $nachname . '</a>
      </div>';

}

?>