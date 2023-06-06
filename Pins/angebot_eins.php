<?php
$pfad = "../Datenbank/";
session_start();
include "../Datenbank/db_Detail_Angebot.php";
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
</head>

<body>
    <!-- Header -->
    <?php
    include "pfad_angabe.php";
    include "../Ressourcen/header.php";
    ?>
    <!-- Content -->

    <div id="angeboteins">

        <!-- Title -->
        <div class="Container_Angebot">
            <div class="box3">
                <h1> <?php echo $ergebnis['Titel'] ?> </h1>
            </div>
            <div class="box1">
                <img src= <?php  echo '../Bilder/profile/'. $ergebnis['bild'] ?> alt="Profil Bild">
                <!-- Name -->
                <p><?php echo $ergebnis['Vorname']. ' '. $ergebnis['Nachname'] ?></p>

            </div>

            <!-- Beschreibung -->
            <div class="box2">
                <p>
                    <?php echo $ergebnis['Beschreibung'] ?>
                </p>
            </div>
            <div class="box4">
                <a href= <?php echo "mailto:".$ergebnis['EMail']?>>Nachricht</a>
            </div>
        </div>
    </div>
    <!-- footer -->
    <?php
    include "../Ressourcen/footer.php";
    ?>

</body>


</html>