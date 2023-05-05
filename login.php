<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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
        <div id="login" class="login">
            <h3>Login: </h3>
            <form>

                <label for="E-Mail">E-Mail</label>
                <div id="E-Mail" class="login">
                    <label for="Password"> Password </label>
                    <div id="Password" class="Password">

                    </div>
                </div>
        </div>

        </form>
    </div>
    <!-- footer -->
    <?php
    include "Ressourcen/footer.php";
    ?>
</body>

</html>