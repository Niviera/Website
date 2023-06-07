<?php

/* Verninde */
include "db_Verbindung.php";

/* Query */
try{
    $query = $verbindung->prepare("SELECT * FROM Kategorie");

    $query->execute();
    $query = $query->fetchAll();
}catch(Exception $e){

}

?>