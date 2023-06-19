<?php
session_start();
include "Klassen/Kontroller/Kontroller_Index.php";
include "Klassen/Model/Model_Kategorien.php";
include "Klassen/Model/Model_Hilfsgesuche.php";
include "Klassen/View/View_Index.php";
$Kontroller = new Kontroller_Index("");
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

  <!-- JavaScript -->
  <script src="JavaScript/Index_Suche.js" async></script>

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
          <input id="sucheingabe" name="sucheingabe" type="text" class="suchEingabe" placeholder="<?php echo $_GET['sucheingabe'] ?>" onkeyup="dynamische_Suche(this.value)">
          
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
        echo $Kontroller->display_Index_Kategorien();
        ?>
      </ul>
    </div>
    <!-- Angebote -->
    <div class="Container_kleineAngebote_und_Buttons">
      <div id="Container_Pins" class="Container_kleine_Angebote">
        <?php
          echo $Kontroller->display_Hilfsangebote();
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