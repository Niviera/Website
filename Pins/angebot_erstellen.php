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

        <form>
            <div class="layout">
                <h1>Angebot erstellen:</h1>
                <label for="title">Titel:</label><input id="title" type="text" required>
                <label for="kategorie">Kategorie:</label><input id="kategorie" type="text" required>
                <label for="beschreibung">Beschreibung:</label><textarea id="beschreibung" type="text"
                    required></textarea>
                <button type="submit">Erstellen</button>
            </div>
        </form>
    </div>
    <!-- footer -->
    <?php
    include "../Ressourcen/footer.php";
    ?>
</body>

</html>