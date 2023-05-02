<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <link rel="stylesheet" type="text/css" href="CSS/registrierung.css">
</head>

<body>
    <div class="RegisterContainerMain">
        <!-- Header -->
        <?php
        include "Ressourcen/header.php";
        ?>
        <!-- Steiten inhalt -->
        <h3>Registrierung:</h3>
        <form>
            <div class="ContainerRubrik">
                <legend style="margin-top: 10px;">Persönliche Daten:</legend>
                <label for="vorname">Vorname:</label>
                <input id="vorname" type="text" required>
                <br>
                <label for="nachname">Nachname:</label>
                <input id="nachname" type="text">
                <br>
                <label for="tele">Tele.Nr.:</label>
                <input id="tele" type="number">
                <br>
                <label for="straße">Straße:</label>
                <input id="straße" type="text">
                <br>
                <label for="plz">PLZ:</label>
                <input id="plz" type="number">
                <br>
                <label for="stadt">Stadt:</label>
                <input id="stadt" type="text">
            </div>

            <div class="ContainerRubrik">
                <legend>Konto:</legend>
                <label for="eMail">E-Mail:</label>
                <input id="eMail" type="email" required>
                <br>
                <label for="eMailwdh">E-Mail:</label>
                <input id="eMailwdh" type="email" required>
                <br>
                <label for="passwort">Passwort:</label>
                <input id="passwort" type="password" required>
                <br>
                <label for="passwortwdh">Passwort:</label>
                <input id="passwortwhd" type="password" required>
            </div>
            <div class="ContainerButtons">
                <button class="zurueckButton">Registrieren</button>
                <a href="index.php" class="zurueckButton">Abbrechen</a>
            </div>
        </form>

    </div>
    <!-- footer -->
    <footer>
        <?php
        include "Ressourcen/footer.php";
        ?>
    </footer>

</body>

</html>