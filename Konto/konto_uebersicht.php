<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontodaten</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="../CSS/style.css">
    <link rel="stylesheet" type="text/css" href="../CSS/eigenes_konto.css">
</head>

<body>
    <!-- Header -->
    <?php
    include "pfad_angabe.php";
    include "../Ressourcen/header.php";
    ?>
    <!-- Seiteninhalt -->
    <div class="Main_Container_Konto_Uebersicht">
        <div class="layout_Konto_Uebersicht">
            <h3>Eigene Daten:</h3>
            <!-- Bild-->
            <div class="profil_Bild">
                <img src="Bilder/profile/Lucas.jpeg" alt="Profil Bild">
            </div>
            <!-- Kontoinformationen -->
            <div class="kontoinformationen">
                <div class="layout_kategorie schrift">
                    <div class="kategorie">Vorname</div>
                    <div class="doppelpunkt">:</div>
                </div>
                <div class="info schrift">Lucas</div>
                <div class="layout_kategorie schrift">
                    <div class="kategorie">Nachname</div>
                    <div class="doppelpunkt">:</div>
                </div>
                <div class="info schrift">Christoffers</div>
                <div class="layout_kategorie schrift">
                    <div class="kategorie">Straße</div>
                    <div class="doppelpunkt">:</div>
                </div>
                <div class="info schrift">Igelstraße 9a</div>
                <div class="layout_kategorie schrift">
                    <div class="kategorie">PLZ</div>
                    <div class="doppelpunkt">:</div>
                </div>
                <div class="info schrift">26655</div>
                <div class="layout_kategorie schrift">
                    <div class="kategorie">Stadt</div>
                    <div class="doppelpunkt">:</div>
                </div>
                <div class="info schrift">Westerstede</div>
                <div class="layout_kategorie schrift">
                    <div class="kategorie">Tel-Nr.</div>
                    <div class="doppelpunkt">:</div>
                </div>
                <div class="info schrift">123214214</div>
                <div class="layout_kategorie schrift">
                    <div class="kategorie">E-Mail</div>
                    <div class="doppelpunkt">:</div>
                </div>
                <div class="info schrift">lucaschristoffers1@gmail.com</div>


            </div>

        </div>
    </div>
    <!-- footer -->
    <?php
    include "Ressourcen/footer.php";
    ?>
</body>

</html>