<?php
$host = 'localhost';
$benutzer = 'Lucas';
$passwort = '6vgW.pyxaGckAKW5';
$datenbank = 'Nachbarschaftshilfe';

try {
    $verbindung = new PDO('mysql:host=' . $host . ';dbname=' . $datenbank, $benutzer, $passwort);
} catch (Exception $e) {
    echo $e->getMessage();
}

?>