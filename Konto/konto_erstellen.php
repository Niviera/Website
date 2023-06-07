<?php
/* Einbindung der Klassen */
include "../Klassen/Kontroller/Kontroller_Registrierung.php";
include "../Klassen/Model/Model_Nutzer.php";
include "../Klassen/View/View_Registrierung.php";


session_start();
$Kontroller = new Kontroller_Registrierung();
?>
<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrieren</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="../CSS/style.css">
    <link rel="stylesheet" type="text/css" href="../CSS/Konto/registrierung.css">
</head>

<body>
    <!-- Header -->
    <?php
    include "pfad_angabe.php";
    include "../Ressourcen/header.php";
    ?>
    <div id="RegisterContainerMain" class="RegisterContainerMain">
        <?php
            echo $Kontroller->validate();
        ?>
    </div>


    <!-- footer -->
    <?php
    include "../Ressourcen/footer.php";
    ?>

</body>

</html>