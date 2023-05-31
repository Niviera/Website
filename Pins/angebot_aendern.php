<?php
session_start();
include "../Datenbank/db_angebot_aendern.php";

?>

<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Angebot ändern</title>


    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="../CSS/style.css">
    <link rel="stylesheet" type="text/css" href="../CSS/Pins/angeboterstellen.css">
</head>

<body>
    <!-- Header -->
    <?php
    include "pfad_angabe.php";
    include "../Ressourcen/header.php";
    ?>
    <!-- Content -->
    <div class="Container_Main_Erstellen">

        <form action="angebot_aendern.php" method="POST">
            <div class="layout">
                <h1>Angebot ändern:</h1>
                <label for="title">Titel:</label><input id="title" name="titel" type="text" required value="<?php echo $ergebnis['Titel'] ?>">
                <label for="kategorie">Kategorie:</label><select name="kategorie" id="kategorie" required>
                    <?php
                    include "../Datenbank/db_abfrage_Kategorien.php";
                    /* Darstellung */
                    $zaehler = 0;
                    foreach ($query as $reihe) {
                        $wert = htmlentities($reihe["ID"]);
                        $bezeichnung = htmlentities($reihe["Name"]);
                        $zaehler++;
                        if($zaehler == intval($ergebnis["Kategorie"])){
                            echo "<option selected value=" . $wert . ">" . $bezeichnung . "</option>";
                        }else{
                            echo "<option value=" . $wert . ">" . $bezeichnung . "</option>";
                        }                   
                    }
                    ?>
                </select>
                <label for="beschreibung">Beschreibung:</label><textarea id="beschreibung" name="beschreibung"
                    type="text" required><?php echo $ergebnis['Beschreibung'] ?></textarea>
                <button type="submit" name="ID" value="<?php echo $id ?>">Ändern</button>
            </div>
        </form>
    </div>
    <!-- footer -->
    <?php
    include "../Ressourcen/footer.php";
    ?>
</body>

</html>