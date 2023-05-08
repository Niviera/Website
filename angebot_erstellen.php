<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Angebot erstellen</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <link rel="styleshee" type="text/css" href="CSS/angebot_erstellen.css">
</head>

<body>
    <!-- header -->
    <?php
    include "Ressourcen/header.php";
    ?>
    <!-- Content -->
    <div style="width: 100%; text-align: center">
        <h3> Angebot erstellen: </h3>
    </div>
    <div id="Angebot" class="Angebot">

        <tr>
            <th>Title: </th>
            <th><input type="text" required></th>
        </tr>
        <tr>
            <!-- TODO: Kategorie sollte später durch datenbank vorgegeben werden (Auswahl liste)-->
            <th>Kategorie: </th>
            <th><input type="text" required></th>
        </tr>
        <tr>
            <th>Beschreibung: </th>
            <th><textarea required></textarea></th>
        </tr>
        <tr>
            <th></th>
            <th><button> Erstellen </button></th>
        </tr>
    </div>
    <!-- footer -->
    <?php
    include "Ressourcen/footer.php";
    ?>
</body>

</html>