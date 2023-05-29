<?php
session_start();
?>

<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Stylesheets -->
  <link rel="stylesheet" type="text/css" href="CSS/style.css">
  <link rel="stylesheet" type="text/css" href="CSS/index.css">

  <title>Startseite</title>
</head>

<body>
  <!-- Header -->
  <?php
  $start = "";
  $konto = "Konto/";
  $pins = "Pins/";
  include "Ressourcen/header.php";
  ?>

  <!-- Neueste Angebote -->
  <!-- Bereich des "About Us" -->
  <div class="Bereich_Neueste_Nachricht">
    <!-- Style Container für "About Us" -->
    <div class="Container_Neueste_Nachricht">
      <div class="willkommen">Moin Moin!</div>
      <div class="info">
        Hier kannst du schnell und einfach deinem Nachbarn helfen.
        Scroll dafür einfach zum Schwarzen Brett.
        Natürlich darfst du ebenfalls um Hilfe bitten.
      </div>
      <div class="nachricht">
        <div>Viel Spaß!</div>
      </div>
    </div>
  </div>
  <!-- Schwarzes Brett -->
  <!-- Auflistung aller Angebote. -->
  <!-- Trennstrich -->
  <div class="needAName">
    <div class="suche">
      <form name="test" action="index.php" method="GET">
        <div class="suche_layout">
          <label for="sucheingabe">Suche:</label>
          <input id="sucheingabe" name="sucheingabe" type="text" class="suchEingabe" placeholder="<?php echo $_GET['sucheingabe'] ?>">
          <button type="submit" value="suche" id="suche"></button>
        </div>
      </form>
    </div>
  </div>

  <!-- Box für Liste Angebote -->
  <div class="Container_Schwarzes_Brett">
    <!-- erweiterte Suche -->
    <div class="erweitertes_Such_Navi">
      <!-- Suche -->
      <ul>
        <?php
        include "Datenbank/db_abfrage_Kategorien.php";
        /* Darstellung */
        $active = "";
        if ($_GET['kategorie'] == '') {
          $active = "active";
        }
        echo '<li> <a class="' . $active . '" href="index.php?sucheingabe=' . $_GET['sucheingabe'] . '&kategorie=">Alles</a></li>';

        foreach ($query as $reihe) {
          $wert = htmlentities($reihe["ID"]);
          $bezeichnung = htmlentities($reihe["Name"]);
          $active = "";
          if ($_GET['kategorie'] == $wert) {
            $active = "active";
          }
          echo '<li> <a class="' . $active . '" href="index.php?sucheingabe=' . $_GET['sucheingabe'] . '&kategorie=' . $wert . '">' . $bezeichnung . '</a> </li>';
        }
        ?>
      </ul>
    </div>
    <!-- Angebote -->
    <div class="Container_kleineAngebote_und_Buttons">
      <div class="Container_kleine_Angebote">
        <?php
        include "Datenbank/db_abfrageHilfsangebote.php";
        /* Darstellung */
        foreach ($query as $reihe) {
          $titel = htmlentities($reihe['Titel']);
          $pin_ID = htmlentities($reihe['ID']);
          $beschreibung = htmlentities($reihe['Beschreibung']);
          $nutzer_ID = htmlentities($reihe['nutzerID']);
          $vorname = htmlentities($reihe['Vorname']);
          $nachname = htmlentities($reihe['Nachname']);

          echo '<div>
                <p class="ueberschrift"> ' . $titel . ' </p>
                <a class="beschreibung" href="Pins/angebot_eins.php?id=' . $pin_ID . '"> ' . $beschreibung . '...</a>
                <a class="autor" href="Konto/konto_uebersicht.php?id=' . $nutzer_ID . '">' . $vorname . ' ' . $nachname . '</a>
              </div>';
        }

        ?>
      </div>
      <!-- Buttons -->
      <div class="Container_Buttons">
        <button id="zurueck" name="zurueck" class="buttonLinks">Zurück</button>
        <button id="weiter" name="weiter" class="buttonRechts">Weiter</button>
      </div>
    </div>
  </div>
  <!-- footer -->
  <?php
  include "Ressourcen/footer.php";
  ?>
</body>

</html>