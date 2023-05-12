<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="../CSS/style.css">
    <link rel="stylesheet" type="text/css" href="../CSS/Pins/angeboteins.css">
</head>

<body>
    <!-- Header -->
    <?php
    include "pfad_angabe.php";
    include "../Ressourcen/header.php";
    ?>
    <!-- Content -->

    <div id="angeboteins">

        <!-- Title -->
        <div class="Container_Angebot">
            <div class="box3">
                <h1> Zu verschenken </h1>
            </div>
            <div class="box1">
                <img src="../Bilder/profile/Lucas.jpeg" alt="Profil Bild">
                <!-- Name -->
                <p>Lucas Christoffers</p>

            </div>

            <!-- Beschreibung -->
            <div class="box2">
                <p>
                    Hey, dies ist mal wieder ein einfach quatsch Text, der ausgedacht worden ist. Denn damit soll
                    einfach getestet werden, wie der Text tatsächlich aussieht und wie man damit herumspielen kann.
                    Besonders wichtig ist es, sobald er mal ein klein wenig länger ausfällt. Aber irgendwie wird es
                    immer schwerer sich quatsch auszudenken... vielleicht hätte ich einfach versuchen sollen einen
                    richtigen Text zu schreiben, nun bin aber schon relativ weit hiermit und höre bestimmt nicht auf.
                    Also setzen wir diesen sinnlosen Roman fort und dass nur für den simplen Grund, um längere Texte mal
                    auszuprobieren.
                </p>
            </div>
            <div class="box4">
                <a href="mailto:">Nachricht</a>
            </div>
        </div>
    </div>
    <!-- footer -->
    <?php
    include "Ressourcen/footer.php";
    ?>

</body>


</html>