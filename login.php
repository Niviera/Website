<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="background-color: #dcf0ff;">
    <!-- header -->
    <?php
    include "header.php";
    ?>
    <!-- nav -->
    <?php
    include "nav.php";
    ?>
    <!-- Content -->
    <div style="width:100%; text-align:center">
        <h3>Login: </h3>
    </div>
    <center>
        <form>
            <table>
                <tr>
                    <th>Nutzername/Email:</th>
                    <th><input type="text" required></th>
                </tr>
                <tr>
                    <th>Password:</th>
                    <th><input type="password" required></th>
                </tr>
                <tr>
                    <th><button> Login </button></th>
                    <th><button>Registrieren </button></th>
                </tr>
            </table>
        </form>
    </center>
    <!-- footer -->
    <?php
    include "footer.php";
    ?>
</body>

</html>