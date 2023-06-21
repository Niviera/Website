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
        <!-- Steiten inhalt -->
        <h3>Registrierung:</h3>
        <form action="konto_angelegt.php" method="POST" enctype="multipart/form-data">
            <div class="ContainerRubrik">
                <div class="legend">Persönliche Daten:</div>
                <label for="vorname">Vorname:</label>
                <input id="vorname" name="vorname" type="text" required>
                <br>
                <label for="nachname">Nachname:</label>
                <input id="nachname" name="nachname" type="text">
                <br>
                <label for="tele">Tele.Nr.:</label>
                <input id="tele" name="tele" type="number">
                <br>
                <label for="straße">Straße:</label>
                <input id="straße" name="straße" type="text">
                <br>
                <label for="plz">PLZ:</label>
                <input id="plz" name="plz" type="number">
                <br>
                <label for="stadt">Stadt:</label>
                <input id="stadt" name="stadt" type="text">
            </div>
            <div class="ContainerRubrik">
                <div class="legend">Kontodaten:</div>
                <label for="email">E-Mail:</label>
                <input id="email" name="email" type="email" required>
                <script>
                    function isValidEmail(email) {
                        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                        return emailRegex.test(email);
                        window.alert("Die E-Mail ist nicht gültig");
                    }
                </script>
                <br>
                <label for="eMailwdh">E-Mail:</label>
                <input id="eMailwdh" type="email" required>
                <script>
                    const form = document.getElementById('email-form');

                    form.addEventListener('submit', (event) => {
                        event.preventDefault(); // Verhindert das Standardverhalten des Formulars

                        const email = document.getElementById('email').value;
                        const eMailwdh = document.getElementById('eMailwdh').value;

                        if (isValidEmail(email) && email === emailRepeat) {

                            console.log(`Die E-Mail-Adresse ${email} ist gültig.`);


                        } else {
                            // Geben Sie eine Fehlermeldung aus und fordern Sie den Benutzer auf, die E-Mail-Adresse erneut einzugeben
                            console.error(`Die E-Mail-Adressen stimmen nicht überein oder sind ungültig.`);
                        }
                    });
                </script>
                <br>
                <label for="passwort">Passwort:</label>
                <input id="passwort" name="passwort" type="password" required>
                <br>
                <label for="passwortwdh">Passwort:</label>
                <input id="passwortwdh" name="passwortwdh" type="password" required>
            </div>
            <div class="ContainerRubrik">
                <div class="legend">Bild hochladen:</div>
                <label for="dateiHochladen">Datei:</label>
                <input id="dateiHochladen" name="dateiHochladen" type="file">
            </div>
            <div class="ContainerButtons">
                <button type="submit" name="abgeschickt" value="abgeschickt"
                    class="buttonDesign allgemeinesDesign">Registrieren</button>
                <div class="zurueckButton allgemeinesDesign"><a href="index.php" class="pseudoButton">Abbrechen</a>
                </div>
            </div>
        </form>

    </div>


    <!-- footer -->
    <?php
    include "../Ressourcen/footer.php";
    ?>

</body>

</html>