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

  <!-- Auflistung aller Angebote. -->
  <!-- Trennstrich -->
  <div class="needAName">
    <div class="suche">
      <form>
        <div class="suche_layout">
          <label for="sucheingabe">Suche:</label>
          <input id="sucheingabe" type="text" class="suchEingabe" placeholder="Auf '...' Suchen">
          <button id="suche" name="suche"></button>
        </div>
      </form>
    </div>
  </div>

  <!-- Box für Liste Angebote -->
  <div style="display: flex;">
    <!-- erweiterte Suche -->
    <div class="erweitertes_Such_Navi">
      <!-- Suche -->
      <ul>
        <li> <a>Garten</a> </li>
        <li><a>Zu verschenken</a> </li>
      </ul>
    </div>
    <!-- Angebote -->
    <div class="Container_kleineAngebote_und_Buttons">
      <div class="Container_kleine_Angebote">
        <!-- Angebot 1 -->
        <div>
          <p class="ueberschrift"> Hallo </p>
          <a class="beschreibung" href="Pins/angebot_eins.php"> Dies ist ein kleiner beispieltext zum Testen </a>
          <a class="autor" href="Konto/konto_uebersicht.php">Lucas Christoffers</a>
        </div>
        <!-- Angebot 2 -->
        <div>
          <p class="ueberschrift"> Hallo </p>
          <a class="beschreibung" href="Pins/angebot_eins.php"> Dies ist ein kleiner beispieltext zum Testen </a>
          <a class="autor" href="Konto/konto_uebersicht.php">Lucas Christoffers</a>
        </div>
        <!-- Angebot 3 -->
        <div>
          <p class="ueberschrift"> Hallo </p>
          <a class="beschreibung" href="Pins/angebot_eins.php"> Dies ist ein kleiner beispieltext zum Testen </a>
          <a class="autor" href="Konto/konto_uebersicht.php">Lucas Christoffers</a>
        </div>
        <!-- Angebot 4 -->
        <div>
          <p class="ueberschrift"> Hallo </p>
          <a class="beschreibung" href="Pins/angebot_eins.php"> Dies ist ein kleiner beispieltext zum Testen </a>
          <a class="autor" href="Konto/konto_uebersicht.php">Lucas Christoffers</a>
        </div>
        <!-- Angebot 5 -->
        <div>
          <p class="ueberschrift"> Hallo </p>
          <a class="beschreibung" href="Pins/angebot_eins.php"> Dies ist ein kleiner beispieltext zum Testen </a>
          <a class="autor" href="Konto/konto_uebersicht.php">Lucas Christoffers</a>
        </div>
        <!-- Angebot 6 -->
        <div>
          <p class="ueberschrift"> Hallo </p>
          <a class="beschreibung" href="Pins/angebot_eins.php"> Dies ist ein kleiner beispieltext zum Testen </a>
          <a class="autor" href="Konto/konto_uebersicht.php">Lucas Christoffers</a>
        </div>
        <!-- Angebot 7 -->
        <div>
          <p class="ueberschrift"> Hallo </p>
          <a class="beschreibung" href="Pins/angebot_eins.php"> Dies ist ein kleiner beispieltext zum Testen </a>
          <a class="autor" href="Konto/konto_uebersicht.php">Lucas Christoffers</a>
        </div>
        <!-- Angebot 8 -->
        <div>
          <p class="ueberschrift"> Hallo </p>
          <a class="beschreibung" href="Pins/angebot_eins.php"> Dies ist ein kleiner beispieltext zum Testen </a>
          <a class="autor" href="Konto/konto_uebersicht.php">Lucas Christoffers</a>
        </div>
        <!-- Angebot 9 -->
        <div>
          <p class="ueberschrift"> Hallo </p>
          <a class="beschreibung" href="Pins/angebot_eins.php"> Dies ist ein kleiner beispieltext zum Testen </a>
          <a class="autor" href="Konto/konto_uebersicht.php">Lucas Christoffers</a>
        </div>
        <!-- Angebot 10 -->
        <div>
          <p class="ueberschrift"> Hallo </p>
          <a class="beschreibung" href="Pins/angebot_eins.php"> Dies ist ein kleiner beispieltext zum Testen </a>
          <a class="autor" href="Konto/konto_uebersicht.php">Lucas Christoffers</a>
        </div>
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