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
  include "Ressourcen/header.php";
  ?>

  <!-- Neueste Angebote -->
  <!-- TODO: Überarbeiten -- austauschen gegen "About this Site"-->
  <!-- Bereich des neuesten Angebots -->
  <div class="Bereich_Neueste_Nachricht">
    <!-- Style Container für Angebot -->
    <div class="Container_Neueste_Nachricht">
      <!-- Container Bild mit Namen-->
      <div class="Container_Bild_Name">
        <img src="Bilder/Lucas.jpeg" alt="Profil Bild" class="profile_Pic">
        <p>Lucas Christoffers</p>
      </div>
      <!-- Container für Angebots Details -->
      <div class="Container_Angebot_Details">
        <h1> zu verschenken </h1>
        <p>Hey dies ist ein einfacher demonstrations text und hat keinerlei bedeutung
        </p>
      </div>
    </div>
  </div>

  <!-- Auflistung aller Angebote. -->
  <!-- Trennstrich -->
  <div class="needAName">
    <div class="suche">
      <form>
        <div>
          <label for="sucheingabe">Suche:</label>
          <input id="sucheingabe" type="text" class="suchEingabe" placeholder="Auf '...' Suchen">
          <button id="suche" name="suche">Suchen</button>
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
          <p class="beschreibung"> Dies ist ein kleiner beispieltext zum Testen </p>
          <p class="autor">Lucas Christoffers</p>
        </div>
        <!-- Angebot 2 -->
        <div>
          <p class="ueberschrift"> Hallo </p>
          <p class="beschreibung"> Dies ist ein kleiner beispieltext zum Testen </p>
          <p class="autor">Lucas Christoffers</p>
        </div>
        <!-- Angebot 3 -->
        <div>
          <p class="ueberschrift"> Hallo </p>
          <p class="beschreibung"> Dies ist ein kleiner beispieltext zum Testen </p>
          <p class="autor">Lucas Christoffers</p>
        </div>
        <!-- Angebot 4 -->
        <div>
          <p class="ueberschrift"> Hallo </p>
          <p class="beschreibung"> Dies ist ein kleiner beispieltext zum Testen </p>
          <p class="autor">Lucas Christoffers</p>
        </div>
        <!-- Angebot 5 -->
        <div>
          <p class="ueberschrift"> Hallo </p>
          <p class="beschreibung"> Dies ist ein kleiner beispieltext zum Testen </p>
          <p class="autor">Lucas Christoffers</p>
        </div>
        <!-- Angebot 6 -->
        <div>
          <p class="ueberschrift"> Hallo </p>
          <p class="beschreibung"> Dies ist ein kleiner beispieltext zum Testen </p>
          <p class="autor">Lucas Christoffers</p>
        </div>
        <!-- Angebot 7 -->
        <div>
          <p class="ueberschrift"> Hallo </p>
          <p class="beschreibung"> Dies ist ein kleiner beispieltext zum Testen </p>
          <p class="autor">Lucas Christoffers</p>
        </div>
        <!-- Angebot 8 -->
        <div>
          <p class="ueberschrift"> Hallo </p>
          <p class="beschreibung"> Dies ist ein kleiner beispieltext zum Testen </p>
          <p class="autor">Lucas Christoffers</p>
        </div>
        <!-- Angebot 9 -->
        <div>
          <p class="ueberschrift"> Hallo </p>
          <p class="beschreibung"> Dies ist ein kleiner beispieltext zum Testen </p>
          <p class="autor">Lucas Christoffers</p>
        </div>
        <!-- Angebot 10 -->
        <div>
          <p class="ueberschrift"> Hallo </p>
          <p class="beschreibung"> Dies ist ein kleiner beispieltext zum Testen </p>
          <p class="autor">Lucas Christoffers</p>
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