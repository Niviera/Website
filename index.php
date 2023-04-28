<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Stylesheets -->
  <link rel="stylesheet" type="text/css" href="CSS/startseite.css">
  <title>Document</title>
</head>

<body style="background-color: #dcf0ff;">
  <!-- Header -->
  <?php
  include "Ressourcen/header.php";
  ?>
  <!-- nav -->
  <?php
  include "Ressourcen/nav.php";
  ?>

  <!-- Neueste Angebote -->
  <!-- Bereich des neuesten Angebots -->
  <div style="height: 600px; display: flex; align-items: center;">
    <!-- Style Container für Angebot -->
    <div
      style="height: 400px; width: 800px; display: flex; margin-left:300px; border: 1px solid black; border-radius:75px">
      <!-- Container Bild mit Namen-->
      <div style="width: 200px; float:left; margin:10px">
        <img src="Bilder/Lucas.jpeg" alt="Profil Bild" style="width:200px; height: 200px; border-radius:75px">
        <center>
          <p>Lucas Christoffers</p>
        </center>
      </div>
      <!-- Container für Angebots Details -->
      <div style="580px">
        <h1 style="text-align: center; width:100%"> zu Verschenken </h1>
        <p style="text-align: left; width: 100%">Hey dies ist ein einfach demonstrationstext und hat keinerlei bedeutung
        </p>
      </div>
    </div>
  </div>

  <!-- Auflistung aller Angebote. -->
  <!-- Trennstrich -->
  <div style="background-color: #74c4ff; height:30px"></div>
  <!-- Box für Liste Angebote -->
  <div style="height: auto; display: flex">
    <!-- erweiterte Suche -->
    <div class="erweitertes_Such_Navi">
      <!-- Suche -->
      <form>
        Suche: <input type="text">
      </form>
      <ul>
        <li> <a>Garten</a> </li>
        <li><a>Zu Verschenken</a> </li>
      </ul>

    </div>
    <!-- Angebote -->
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
    </div>
    <!-- footer -->
    <?php
    include "Ressourcen/footer.php";
    ?>
</body>

</html>