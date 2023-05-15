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
        <div class="Container_Liste">
            <!-- Überschrift -->
            <div class="ueberschrift">Nummer:</div>
            <div class="ueberschrift">Titel:</div>
            <div class="ueberschrift Kategorie_aktiv">Kategorie:</div>
            <div class="ueberschrift">Loeschen:</div>
            <div class="ueberschrift">Aendern:</div>
            <!-- Listeneinträge -->
            <!-- Angebot 1 -->
            <div class="eintrag">1</div>
            <div class="eintrag">abzugeben</div>
            <div class="eintrag Kategorie_aktiv">abzugeben</div>
            <div class="eintrag"><input type="checkbox" id="löschen" name="löschen" value="löschen">
            </div>
            <div class="eintrag"> <button type="button">Ändern </button></div>
            <!-- Angebot 2 -->
            <div class="eintrag">2</div>
            <div class="eintrag">abzugeben</div>
            <div class="eintrag Kategorie_aktiv">abzugeben</div>
            <div class="eintrag"><input type="checkbox" id="löschen" name="löschen" value="löschen">
            </div>
            <div class="eintrag"> <button type="button">Ändern</button></div>
            <!-- Angebot 3 -->
            <div class="eintrag">3</div>
            <div class="eintrag">abzugeben</div>
            <div class="eintrag Kategorie_aktiv">abzugeben</div>
            <div class="eintrag"><input type="checkbox" id="löschen" name="löschen" value="löschen">
            </div>
            <div class="eintrag"> <button type="button">Ändern </button> </div>

        </div>
    </div>
    <!-- footer -->
    <?php
    include "../Ressourcen/footer.php";
    ?>

</body>

</html>