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
                <legend>Persönliche Daten:</legend>
                <label>Vorname:</label>
                <input id="vorname" name="vorname" type="text" required>
                <br>
                <label for="nachname">Nachname:</label>
                <input id="nachname" name="nachname" type="text">
                <br>
                <label for="tele">Tele.Nr.:</label>
                <input id="tele" name="tele" type="number">
                <br>
                <label for="straße">Straße:</label>
                <input id="straße" name="straße" type="text">
                <br>
                <label for="plz">PLZ:</label>
                <input id="plz" name="plz" type="number">
                <br>
                <label for="stadt">Stadt:</label>
                <input id="stadt" name="stadt" type="text">
            </div>
            <div class="ContainerRubrik">
                <legend>Kontodaten:</legend>
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
            <div class="ContainerRubrik">
                <legend>Bild hochladen</legend>
                <label for="dateiHochladen">Datei:</label>
                <input id="dateiHochladen" name="dateiHochladen" type="file">
            </div>
            <div class="ContainerButtons">
                <button class="buttonDesign allgemeinesDesign">Registrieren</button>
                <a href="index.php" class="zurueckButton allgemeinesDesign">Abbrechen</a>
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