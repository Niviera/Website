<!DOCTYPE html>
<html>
  <head>
    <title>Meine erste Seite!</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/highlight.css">
    <link rel="stylesheet" href="css/offers.css">

  </head>
  <body style="background-color: #dcf0ff; min-width: 600px">
    <!-- Header -->
    <?php
          include "header.php";
      ?>

    <!-- Navigation -->
      <?php
          include "nav.php";
      ?>
    <!-- 
            Higlights 
            Center Quelle: "https://www.freecodecamp.org/news/how-to-center-anything-with-css-align-a-div-text-and-more/"
        -->
    <div class="highlights">
      <!-- Build for the Higlight -->
      <div class="dynamicHighlight">
        <!-- Bild -->
        <div class="highlightProfilePic">
          <img class="picture" src="Bilder/Lucas.jpeg" alt="Profil Bild"/>
          <p class="highlightName" onclick="location.href='profile.php';">Lucas Christoffers</p>
        </div>
        <!-- Nachricht -->
        <div class="highlightMessage">
          <p class="highlightTitle">Sachen abzugeben</p>
          <p class="highlightShortDescription">
            Hey, ich habe ein paar Sachen übrig und diese könnte ihr einfach von
            meiner Hofeinfahrt nehmen. Es sind ein paar alte Bücher sowie ein
            wenig Brennholz, sollte es nicht mitgenommen werden kommt es ins
            Sperrmüll.
          </p>
          <div class="highlightButtons">
            <div class="highlightButton1 highlightButton">Nachricht</div>
            <div class="highlightButton2 highlightButton">Anschauen</div>
          </div>
        </div>
      </div>
    </div>

    <!-- All Offers Bisher nur extra Seite späteres Ziel das es Immer erneuert -->
    <div class="navi"></div>
    <div class="overview">
      <!-- Menu advancend search -->
      <div class="advancendSearch"></div>
      <!-- kleinere Darstellung aller Angebote. Zurzeit Placeholder!
        Quelle um div in link = https://stackoverflow.com/questions/796087/make-a-div-into-a-link
        -->
      <div class="offers">
        <div class="offersSmall">
          <div onclick="location.href='http://www.google.com';">
            <div class="offerKategorie">Gartenarbeit</div>
            <div class="offerDescripton">
              Hey, ich kann beim Rasenmähen am Sonntag helfen.
            </div>
            <br />
          </div>
          <div
            class="offerFrom"
            onclick="location.href='profile.php';"
          >
            Lucas Christoffers
          </div>
        </div>
        <!-- Neues Angebot -->
        <div class="offersSmall">
          <div onclick="location.href='http://www.google.com';">
            <div class="offerKategorie">Reperaturen</div>
            <div class="offerDescripton">
              Hallo ich könnte dir im Haus helfen etwas zu reparieren
            </div>
          </div>
          <div
            class="offerFrom"
            onclick="location.href='http://www.example.com';"
          >
            Max Mustermann
          </div>
        </div>
        <!-- Neues Angebot -->
        <div class="offersSmall">
          <div onclick="location.href='http://www.google.com';">
            <div class="offerKategorie">Reperaturen</div>
            <div class="offerDescripton">
              Hallo ich könnte dir im Haus helfen etwas zu reparieren
            </div>
          </div>
          <div
            class="offerFrom"
            onclick="location.href='http://www.example.com';"
          >
            Max Mustermann
          </div>
        </div>
        <!-- Neues Angebot -->
        <div class="offersSmall">
          <div onclick="location.href='http://www.google.com';">
            <div class="offerKategorie">Verschenken</div>
            <div class="offerDescripton">
              Bei mir liegt Holz, einfach an der Straße wegnehmen.
            </div>
          </div>
          <div
            class="offerFrom"
            onclick="location.href='http://www.example.com';"
          >
            Peter Wagner
          </div>
        </div>
      </div>
    </div>
    <!-- Footer -->
    <?php
      include "footer.php";
    ?>
    
  </body>
</html>
