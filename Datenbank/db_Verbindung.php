<?php
$host = 'localhost';
$benutzer = 'Lucas';
$passwort = '6vgW.pyxaGckAKW5';
$datenbank = 'Nachbarschaftshilfe';

$verbindung = new mysqli($host, $benutzer, $passwort, $datenbank);

if ($verbindung->connect_error) {
    die("Connection failed: " . $verbindung->connect_error);
}
?>