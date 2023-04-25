<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="background-color: #dcf0ff;">
    <?php
    include "Ressourcen/header.php";
    ?>
    <!-- nav -->
    <?php
    include "Ressourcen/nav.php";
    ?>
    <!-- Content -->
    <center>
        <div>
            <h3> Übersicht: </h3>
        </div>
        <div>
            <table style="border: 1px solid black; padding: 8px">
                <tr>
                    <th>Nummer: </th>
                    <th>Titel: </th>
                    <th>Kategorie: </th>
                    <th>Löschen: </th>
                    <th></th>
                </tr>
                <tr>
                    <th>1 </th>
                    <th><a href="angebot_eins.php">zu verschenken</a> </th>
                    <th> zu verschenken </th>
                    <th><input type="checkbox"></input></th>
                </tr>
            </table>
            <th><button type="button">Löschen</button></th>
        </div>

    </center>
    <!-- footer -->
    <?php
    include "Ressourcen/footer.php";
    ?>

</body>

</html>