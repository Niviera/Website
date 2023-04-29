<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="CSS/navigation.css">
</head>

<body style="background-color: #dcf0ff;">
    <!-- header -->
    <?php
    include "Ressourcen/header.php";
    ?>
    <!-- Content -->
    <div style="height: 500px; border: 2px solid Black">
        <!-- Title -->
        <h1 style="width: 100%; height: 20px; text-align: center; margin: 20px: margin-bottom: 40px"> Zu Verschenken
        </h1>
        <!-- Beschreibung -->
        <p>
            Hey dies ist mal wieder ein einfach quatsch text der ausgedacht worden ist. Denn damit soll einfach getestet
            werden
            wie der Text tatsächlich aussieht und wie man damit herumspielen kann. Besonders wichtig ist es sobald er
            mal ein klein
            wenig länger aussfällt. Aber irgendwie wird es immer schwerer sich quatsch auszudenken... vieleicht hätte
            ich einfach
            versuchen sollen einen richtigen text zu schreiben, nun bin aber schon relativ weit hiermit und höre
            bestimmt nicht auf.
            Also setzen wir diesen sinnlosen Roman fort und das nur für den simplen grund um längere Texte mal
            auszuprobieren.
        </p>
        <!-- Ersteller -->
        <div style="height:200px;width:400px ;display: flex">
            <!-- Bild -->
            <img src="Bilder/Lucas.jpeg" alt="Profil Bild"
                style="width:175px; height: 175px; border-radius:75px; float:left">
            <!-- Name -->
            <p style="float: right; margin-top:75px; margin-left: 10px">Lucas Christoffers</p>
            <div style=""><a href="mailto:">Nachricht</a></div>
        </div>
    </div>
    <!-- footer -->
    <?php
    include "Ressourcen/footer.php";
    ?>
</body>

</html>