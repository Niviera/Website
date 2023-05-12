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
        <form>

            <div class="layout">
                <h1> Eigenes Konto </h1>
                <label for="vorname">Vorname:</label><input id="vorname" type="text" value="Lucas">
                <label for="nachname">Nachname:</label><input id="nachname" type="text" value="Christoffers">
                <label for="straße">Straße:</label><input id="straße" type="text" value="Igelstraße 9a">
                <label for="plz">PLZ:</label><input id="plz" type="text" value="26655">
                <label for="stadt">Stadt:</label><input id="stadt" type="text" value="Westerstede">
                <label for="email">Email:</label><input id="email" type="email" value="lucaschristoffers1@gmail.com">
                <label for="bearbeiten">Daten bearbeiten:</label><input id="bearbeiten" type="checkbox" required>
                <button type="submit">Ändern</button>
            </div>
        </form>
    </div>
    <!-- footer -->
    <?php
    include "../Ressourcen/footer.php";
    ?>
</body>

</html>