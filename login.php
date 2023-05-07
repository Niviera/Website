<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
</head>

<body>
    <!-- header -->
    <?php
    include "Ressourcen/header.php";
    ?>
    <!-- Content -->
    <div style="width:100%; text-align:center">
        <h3>Login: </h3>
    </div>
    <center>
        <form>
            <table>
                <tr>
                    <th>Email:</th>
                    <th><input type="text" required></th>
                </tr>
                <tr>
                    <th>Password:</th>
                    <th><input type="password" required></th>
                </tr>
                <tr>
                    <th><button> Login </button></th>

                    <th><a href="konto_erstellen.php">Registrieren </a></th>
                </tr>
            </table>
        </form>
    </center>
    <!-- footer -->
    <?php
    include "Ressourcen/footer.php";
    ?>
</body>

</html>