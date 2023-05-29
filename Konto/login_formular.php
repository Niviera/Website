<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="../CSS/style.css">
    <link rel="stylesheet" type="text/css" href="../CSS/Konto/login.css">
</head>

<body>
    <!-- Header -->
    <?php
    include "pfad_angabe.php";
    include "../Ressourcen/header.php";
    ?>
    <!-- Content -->
    <div id="Container_Main_Login">
        <form action="Login.php" method="POST">
            <div id="layout">
                <h1>Login:</h1>
                <div class="Container_Label_doppelpunkt">
                    <label for="email">E-Mail:</label>
                </div>
                <input id="email" name="email" type="email">
                <div class="Container_Label_doppelpunkt">
                    <label for="passwort">Passwort:</label>
                </div>
                <input id="passwort" name="passwort" type="password">
                <div id="Container_Buttons">
                    <button type="submit" class="allgemeines_Button_Design ">Login</button>
                    <div class="allgemeines_Button_Design button_Abbruch"><a href="konto_erstellen.php"
                            class="pseudo_Button">Registrieren?</a></div>
                    <div id="pwvergessen"><a>Passwort vergessen</a></div>
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