<!DOCTYPE html>
<html>
  <head>
    <title>Meine erste Seite!</title>
    <link rel="stylesheet" href="css/profile.css" />
  </head>
  <body style="background-color: #dcf0ff; min-width: 600px">
    <!-- Header -->
    <?php
      include "header.php"
    ?>
    <!-- Navigation -->
    <?php
      include "nav.php";
    ?>
    <!-- Seiteninhalt -->
    <div class="profileContainer">
    <img class="picture" src="Bilder/Lucas.jpeg" />
    <p class="nameForm"> Name: </p>
    <p class="vorname">Lucas</p>
    <p class="nachname">Christoffers</p>
    <p class="straßeForm">Straße:</p>
    <p class="straße">Igelstraße 9a</p>
    <p class="stadtForm">Stadt:</p>
    <p class="plz">26655</p>
    <p class="stadt">Westerstede</p>
    <p class="telForm">Tel-Nr.:</p>
    <p class="tel">04488 764278</p>
    <p class="mobileForm">M-Nr.:</p>
    <p class="mobile">0172 8617731</p>
    <p class="emailForm">Mail:</p>
    <!-- Mail quelle: https://www.tutorialspoint.com/de/html/html_email_links.htm -->
    <a class="mail" href="mailto:lucaschristoffers1@gmail.com">lucaschristoffers1@gmail.com</p>
    </div>


    <!-- Footer -->
    <?php
      include "footer.php";
    ?>
  </body>
</html>
