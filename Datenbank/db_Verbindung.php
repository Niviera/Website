<?php
$host = 'localhost';
$benutzer = 'Lucas';
$passwort = '6vgW.pyxaGckAKW5';
$datenbank = 'Nachbarschaftshilfe';

try {
    $verbindung = new PDO('mysql:host=' . $host . ';dbname=' . $datenbank . ';charset=utf8', $benutzer, $passwort);
} catch (Exception $e) {
    echo $e->getMessage();
}

?>