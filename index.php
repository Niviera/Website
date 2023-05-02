<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Stylesheets -->
  <link rel="stylesheet" type="text/css" href="CSS/style.css">

  <title>Document</title>
</head>

<body>
  <!-- Header -->
  <?php
  include "Ressourcen/header.php";
  ?>

  <!-- Neueste Angebote -->
  <!-- Bereich des neuesten Angebots -->
  <div class="BereichNeuesteNachricht">
    <!-- Style Container für Angebot -->
    <div class="ContainerNeuesteNachricht">
      <!-- Container Bild mit Namen-->
      <div class="ContainerBildName">
        <img src="Bilder/Lucas.jpeg" alt="Profil Bild" class="profilePic">
        <p>Lucas Christoffers</p>
      </div>
      <!-- Container für Angebots Details -->
      <div class="ContainerAngebotDetails">
        <h1> zu Verschenken </h1>
        <p>Hey dies ist ein einfach demonstrationstext und hat keinerlei bedeutung
        </p>
      </div>
    </div>
  </div>

  <!-- Auflistung aller Angebote. -->
  <!-- Trennstrich -->
  <div class="needAName">
    <div class="suche">
      <form>
        <input type="text" class="suchEingabe" placeholder="Auf '...' Suchen">
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
        <li><a>Zu Verschenken</a> </li>
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
        <div style="height:30px; width: 20%; background-color:pink; float:left;"></div>
        <div style="height:30px; width: 80%;"></div>
        <div style="height:30px; width: 20%; background-color:pink; float:right;"></div>
      </div>
    </div>
  </div>
  <!-- footer -->
  <?php
  include "Ressourcen/footer.php";
  ?>
</body>

</html>