<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="CSS/navigation.css">
</head>

<body style="background-color: #dcf0ff;">
    <!-- Header -->
    <?php
    include "Ressourcen/header.php";
    ?>
    <!-- nav -->
    <?php
    include "Ressourcen/nav.php";
    ?>
    <!-- Seiten inhalt -->
    <!-- Überschrift -->
    <div style="width: 100%; text-align:center;">
        <h3>Kontodaten: </h3>
    </div>
    <div style="display: flex">
        <!-- Profilbild -->
        <div style="float:left; width:200px; height:auto">
            <img src="Bilder/Lucas.jpeg" alt="Profilbild" style="width: 175px; height: 175px; border-radius:75px">

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
                    <th>Peterstaße 84</th>
                    </th>
                <tr>
                    <th>PLZ, Stadt: </th>
                    <th>19203 Oldenburg</th>
                </tr>
                <tr>
                    <th>Festnetznummer: </th>
                    <th>0172 8293813</th>
                </tr>
                <tr>
                    <th>E-mail: </th>
                    <th><a href="mailto:lucaschristoffers1@gmail.com">lucaschristoffers1@gmail.com</a></th>
                </tr>
            </table>
        </div>
    </div>
    <!-- footer -->
    <?php
    include "Ressourcen/footer.php";
    ?>
</body>

</html>