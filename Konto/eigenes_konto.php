<?php
$pfad = "../Datenbank/";
session_start();
include "../Datenbank/db_Daten_aendern.php";
include "../Datenbank/db_KontoInformationAbfrage.php"
    ?>
<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konto bearbeiten</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="../CSS/style.css">
    <link rel="stylesheet" type="text/css" href="../CSS/Konto/eigenes_konto.css">
</head>

<body>
    <!-- Header -->
    <?php
    include "pfad_angabe.php";
    include "../Ressourcen/header.php";
    ?>
    <!-- Content -->
    <div class="Container_Main_Eigenes">
        <form method="POST" action="eigenes_konto.php">
            <div class="layout">
                <h1> Eigenes Konto </h1>
                <div class="profil_Bild">
                    <img src=<?php echo "../Bilder/profile/" . $ergebnis['bild'] ?> alt="Profil Bild">
                </div>
                <div class="Container_konto">
                    <label for="vorname">Vorname:</label><input id="vorname" name="vorname" type="text" value=<?php echo $ergebnis['Vorname'] ?>>
                    <label for="nachname">Nachname:</label><input id="nachname" name="nachname" type="text" value=<?php echo $ergebnis['Nachname'] ?>>
                    <label for="straße">Straße:</label><input id="straße" name="straße" type="text" value="<?php echo $ergebnis['Addresse'] ?>">
                    <label for="plz">PLZ:</label><input id="plz" name="plz" type="text" value=<?php echo $ergebnis['PLZ'] ?>>
                    <label for="stadt">Stadt:</label><input id="stadt" name="stadt" type="text" value=<?php echo $ergebnis['Name'] ?>>
                    <label for="email">Email:</label><input id="email" name="email" type="email" value=<?php echo $ergebnis['EMail'] ?>>
                    <label for="bearbeiten">Daten bearbeiten:</label><input id="bearbeiten" name="bestaetigt" type="checkbox" required>
                </div>
                <button type="submit" name="aendern">Ändern</button>
            </div>
        </form>
    </div>
    <!-- footer -->
    <?php
    include "../Ressourcen/footer.php";
    ?>
</body>

</html>