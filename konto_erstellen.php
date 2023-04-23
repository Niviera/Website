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
    <?php
    include "header.php";
    ?>

    <!-- Navi -->
    <?php
    include "nav.php";
    ?>
    <!-- Steiten inhalt -->
    <form>
        <table>
            <tr>
                <th>Kontaktdaten:</th>
                <th></th>
                <th></th>
            </tr>
            <tr>
                <th>Vorname:</th>
                <th><input type="text"></th>
                <th></th>
            </tr>
            <tr>
                <th>Nachname:</th>
                <th><input type="text"></th>
                <th></th>
            </tr>
            <tr>
                <th>Straße:</th>
                <th><input type="text"></th>
                <th></th>
            </tr>
            <tr>
                <th>PLZ, Stadt:</th>
                <th><input type="number"></th>
                <th><input type="number"></th>
            </tr>
            <tr>
                <th>Telefonnummer:</th>
                <th><input type="number"></th>
                <th></th>
            </tr>
            <tr>
                <th>E-Mail:</th>
                <th><input type="email"></th>
                <th></th>
            </tr>
            <tr>
                <th> E-Mail wdh.: </th>
                <th><input type="email"></th>
                <th></th>
            </tr>
            <tr>
                <th> Password: </th>
                <th> <input type="password"></th>
                <th></th>
            </tr>
            <tr>
                <th>Password wdh.:</th>
                <th><input type="password"></th>
                <th></th>
            </tr>
            <tr>
                <th></th>
                <th><input type="submit"></th>
                <th></th>
            </tr>
        </table>
    </form>
    <!-- footer -->
    <?php
    include "footer.php";
    ?>
</body>

</html>