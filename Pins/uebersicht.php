<?php
$pfad = "../Datenbank/";
session_start();
include "../Datenbank/db_Angebot_Loeschen.php";
include "../Datenbank/db_Abfrage_Eigene_Angebote.php";
$_SESSION['CheckDelete'] = array();
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
    <link rel="stylesheet" type="text/css" href="../CSS/Pins/uebersicht.css">
</head>

<body>
    <!-- Header -->
    <?php
    include "pfad_angabe.php";
    include "../Ressourcen/header.php";
    ?>
    <!-- Content -->

    <div id="Container_Main_uebersicht">
        <h3> Uebersicht: </h3>
        <form class="Container_Liste" action="uebersicht.php" method="POST">
            <!-- Überschrift -->
            <div class="ueberschrift">Titel:</div>
            <div class="ueberschrift Kategorie_aktiv">Kategorie:</div>
            <div class="ueberschrift">Loeschen:</div>
            <div class="ueberschrift">Aendern:</div>
            <!-- Listeneinträge -->
            <?php
            foreach ($ergebnis as $row) {
                array_push($_SESSION['CheckDelete'], 'entferne' . $row['ID']);
                echo
                    '<div class="eintrag">' . $row['Titel'] . '</div>
                <div class="eintrag Kategorie_aktiv">' . $row['Name'] . '</div>
                <div class="eintrag"><input type="checkbox" id="id" name="entferne' . $row['ID'] . '" value="' . $row['ID'] . '">
                </div>
                <div class="eintrag"> <a class="fakeButton" href="angebot_aendern.php?ID=' . $row['ID'] . '">Ändern</a></div>';
            }
            ?>
            <div class="Container_Button">
                <button type="submit" value="loeschen" name="loeschen"> Löschen </button>
            </div>
        </form>
    </div>
    <!-- footer -->
    <?php
    include "../Ressourcen/footer.php";
    ?>

</body>

</html>