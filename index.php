<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
</head>

<body style="background-color: #dcf0ff;">
  <!-- Header -->
  <?php
  include "Ressourcen/header.php";
  phpversion();
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
    <div style="width: 20%; height: auto;background-color: #74c4ff">
      <!-- Suche -->
      Suche: <input type="text">
      <br>
      zu Verschenken
      <br>
      Garten
      <br>

    </div>
    <!-- Angebote -->
    <div style="width: 80%; height: auto;border: 2px solid #A4B4BF;">
      <table>
        <tr>
          <!-- Angebot 1 -->
          <th>
            <div style="width: 175px; height: 175px; margin: 20px; border: 2px solid black">
              <!-- Kategorie -->
              <div style="width: 171px; height: 23px; text-align:center; margin: 2px"> zu Verschenken </div>
              <!-- kurzbeschreibung -->
              <div style="width: 171px; height: 121px; text-align:left; margin: 2px"> Hey, dies ist ein einfacher
                beispiel text </div>
              <!-- Ersteller -->
              <div style="width: 171px; height: 23px; text-align:right; margin: 2px">Lucas Christoffers</div>
            </div>
          </th>
          <!-- Angebot 2 -->
          <th>
            <div style="width: 175px; height: 175px; margin: 20px; border: 2px solid black">
              <!-- Kategorie -->
              <div style="width: 171px; height: 23px; text-align:center; margin: 2px"> zu Verschenken </div>
              <!-- kurzbeschreibung -->
              <div style="width: 171px; height: 121px; text-align:left; margin: 2px"> Hey, dies ist ein einfacher
                beispiel text </div>
              <!-- Ersteller -->
              <div style="width: 171px; height: 23px; text-align:right; margin: 2px">Lucas Christoffers</div>
            </div>
          </th>
          <!-- Angebot 3 -->
          <th>
            <div style="width: 175px; height: 175px; margin: 20px; border: 2px solid black">
              <!-- Kategorie -->
              <div style="width: 171px; height: 23px; text-align:center; margin: 2px"> zu Verschenken </div>
              <!-- kurzbeschreibung -->
              <div style="width: 171px; height: 121px; text-align:left; margin: 2px"> Hey, dies ist ein einfacher
                beispiel text </div>
              <!-- Ersteller -->
              <div style="width: 171px; height: 23px; text-align:right; margin: 2px">Lucas Christoffers</div>
            </div>
          </th>
          <!-- Angebot 4 -->
          <th>
            <div style="width: 175px; height: 175px; margin: 20px; border: 2px solid black">
              <!-- Kategorie -->
              <div style="width: 171px; height: 23px; text-align:center; margin: 2px"> zu Verschenken </div>
              <!-- kurzbeschreibung -->
              <div style="width: 171px; height: 121px; text-align:left; margin: 2px"> Hey, dies ist ein einfacher
                beispiel text </div>
              <!-- Ersteller -->
              <div style="width: 171px; height: 23px; text-align:right; margin: 2px">Lucas Christoffers</div>
            </div>
          </th>
          <!-- Angebot 5 -->
          <th>
            <div style="width: 175px; height: 175px; margin: 20px; border: 2px solid black">
              <!-- Kategorie -->
              <div style="width: 171px; height: 23px; text-align:center; margin: 2px"> zu Verschenken </div>
              <!-- kurzbeschreibung -->
              <div style="width: 171px; height: 121px; text-align:left; margin: 2px"> Hey, dies ist ein einfacher
                beispiel text </div>
              <!-- Ersteller -->
              <div style="width: 171px; height: 23px; text-align:right; margin: 2px">Lucas Christoffers</div>
            </div>
          </th>
        </tr>
      </table>
    </div>
  </div>
  <!-- footer -->
  <?php
  include "Ressourcen/footer.php";
  ?>
</body>

</html>