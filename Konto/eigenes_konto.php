<?php
session_start();
include "../Klassen/Kontroller/Kontroller_Konto_Uebersicht.php";
include "../Klassen/Model/Model_Nutzer.php";
include "../Klassen/View/View_Allgemein.php";
$Kontroller = new Kontroller_Konto_Uebersicht();
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
    <link rel="stylesheet" type="text/css" href="../CSS/erfolg_fehlermeldungen.css">
</head>

<body>
    <!-- Header -->
    <?php
    include "pfad_angabe.php";
    include "../Ressourcen/header.php";
    ?>
    <!-- Content -->
    <div class="Container_Main_Eigenes">
    <?php 
             $Kontroller->update();
        echo $Kontroller->work(); 
    ?>
    </div>
    <!-- footer -->
    <?php
    include "../Ressourcen/footer.php";
    ?>
</body>

</html>