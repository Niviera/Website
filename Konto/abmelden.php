<?php
session_start();
$name = $_SESSION['UName'];
$_SESSION['UID'] = "";
session_destroy();
?>
<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konto erstellt</title>
    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="../CSS/style.css">
    <link rel="stylesheet" type="text/css" href="../CSS/Konto/konto_angelegt.css">
</head>

<body>
    <!-- Header -->
    <?php
    include "pfad_angabe.php";
    include "../Ressourcen/header.php";
    ?>
    <!-- Inhalt -->
    <div class="Container_Main">
        <div class="nachricht">
            <h1>
                Abmeldung erfolgreich. <br>
                <?php echo "Aufwiedersehen, " . $name ?>
            </h1>
        </div>
    </div>
    <!-- footer -->
    <?php
    include "../Ressourcen/footer.php";
    ?>
</body>

</html>