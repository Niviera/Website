<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="background-color: #dcf0ff;">
    <!-- Header -->
    <header>
        <?php
        include "header.php";
        ?>

        <!-- Navi -->
        <?php
        include "nav.php";
        ?>
    </header>
    <!-- Seiten inhalt -->
    <!-- Überschrift -->
    <div style="width: 100%; text-align:center;">
        <h3>Kontodaten: </h3>
    </div>
    <div style="display: flex">
        <!-- Profilbild -->
        <div style="float:left; width:200px; height:auto">
            <img src="Bilder/Lucas.jpeg" style="width: 175px; height: 175px; border-radius:75px">
            <button type="button" oncklick="mailto:lucaschristoffers1@gmail.com">Nachricht</button>
        </div>
        <!-- Benutzerdaten: -->
        <div style="height:200px">
            <table style="text-align:left">
                <tr>
                    <th>Name: </th>
                    <th>Lucas Christoffers</th>
                </tr>
                <tr>
                    <th>Straße: </th>
                    <th>Igelstraße 9a</th>
                    </th>
                <tr>
                    <th>PLZ, Stadt: </th>
                    <th>26655 Westerstede</th>
                </tr>
                <tr>
                    <th>Festnetznummer: </th>
                    <th>04488 764278</th>
                </tr>
                <tr>
                    <th>Mobil: </th>
                    <th> 0172 8617731</th>
                </tr>
                <tr>
                    <th>E-mail: </th>
                    <th>lucaschristoffers1@gmail.com</th>
                </tr>
            </table>
        </div>
    </div>
    <!-- footer -->
    <?php
    include "footer.php";
    ?>
</body>

</html>