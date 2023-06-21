<?php
session_start();
include "../Klassen/Kontroller/Kontroller_Hilfsgesuch_Erstellen.php";
include "../Klassen/Model/Model_Kategorien.php";
include "../Klassen/Model/Model_Hilfsgesuche.php";
include "../Klassen/View/View_Hilfsgesuch.php";
$Kontroller = new Kontroller_Hiflsgesuch_Erstellen("../Datenbank/");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="../CSS/style.css">
    <link rel="stylesheet" type="text/css" href="../CSS/Pins/angeboteins.css">


    <!-- JavaScripte -->
    <script src="../JavaScript/Links_und_Rechts_Swipe.js" async></script>
    <script src="../JavaScript/Links_und_Rechts_Arrow.js" async></script>
</head>

<body>
    <!-- Header -->
    <?php
    include "pfad_angabe.php";
    include "../Ressourcen/header.php";
    ?>
    <?php    
        echo $Kontroller->display_Detailed_Angebot();
    ?>
    <!-- footer -->
    <?php
    include "../Ressourcen/footer.php";
    ?>



</body>


</html>