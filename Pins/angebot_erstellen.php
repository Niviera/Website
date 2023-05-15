<?php
include "../Datenbank/db_AngebotErstellen.php";
?>

<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Angebot erstellen</title>


    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="../CSS/style.css">
    <link rel="stylesheet" type="text/css" href="../CSS/Pins/angeboterstellen.css">
</head>

<body>
    <!-- Header -->
    <?php
    include "pfad_angabe.php";
    include "../Ressourcen/header.php";
    ?>
    <!-- Content -->
    <div class="Container_Main_Erstellen">

        <form action="angebot_erstellen.php" method="POST">
            <div class="layout">
                <h1>Angebot erstellen:</h1>
                <!-- TODO: Ändere Ersteller auf Richtigen, vermutlich erst mit Sessions! -->
                <label for="ersteller" hidden>ersteller</label><input id="ersteller" name="ersteller" value="1" hidden>
                <label for="title">Titel:</label><input id="title" name="titel" type="text" required>
                <label for="kategorie">Kategorie:</label><select name="kategorie" id="kategorie" required>
                    <?php
                    include "../Datenbank/db_Kategorien.php";
                    ?>
                </select>
                <label for="beschreibung">Beschreibung:</label><textarea id="beschreibung" name="beschreibung"
                    type="text" required></textarea>
                <button type="submit" name="abgeschickt" value="abgeschickt">Erstellen</button>
            </div>
        </form>
    </div>
    <!-- footer -->
    <?php
    include "../Ressourcen/footer.php";
    ?>
</body>

</html>