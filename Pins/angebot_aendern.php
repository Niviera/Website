<?php
session_start();
include "../Klassen/Kontroller/Kontroller_Hilfsgesuch_Erstellen.php";
include "../Klassen/Model/Model_Kategorien.php";
include "../Klassen/Model/Model_Hilfsgesuche.php";
include "../Klassen/View/View_Hilfsgesuch.php";
$Kontroller = new Kontroller_Hiflsgesuch_Erstellen("../Datenbank/");
?>

<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Angebot ändern</title>


    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="../CSS/style.css">
    <link rel="stylesheet" type="text/css" href="../CSS/Pins/angeboterstellen.css">
    <link rel="stylesheet" type="text/css" href="../CSS/erfolg_fehlermeldungen.css">
    <link rel="stylesheet" type="text/css" href="../CSS/Pins/map.css">

    <!-- JavaScript -->
</head>

<body>
    <!-- Header -->
    <?php
    include "pfad_angabe.php";
    include "../Ressourcen/header.php";
    ?>
    <!-- Content -->
    <div class="Container_Main_Erstellen">

        <form action="angebot_aendern.php" method="POST">
            <?php echo $Kontroller->angebot_Aendern() ?>
        </form>
    <script src="../JavaScript/map.js" async></script>
    </div>
    <!-- footer -->
    <?php
    include "../Ressourcen/footer.php";
    ?>
</body>

</html>