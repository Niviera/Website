<?php
include "db_Verbindung.php";
$pw = sha1($_POST['passwort']);
$email = $_POST['email'];
$query = $verbindung->prepare("SELECT COUNT(ID), ID FROM Nutzer WHERE EMail = '" . $email . "' AND passwort = '" . $pw . "'");
$query->execute();
$query = $query->fetch();
$nachricht = "Einloggen fehlgeschlagen. Falsche Daten?";

if ($query['COUNT(ID)'] == '1') {
    $_SESSION['UID'] = $query['ID'];
    $nachricht = "Einloggen Erfolgreich.";
}
?>