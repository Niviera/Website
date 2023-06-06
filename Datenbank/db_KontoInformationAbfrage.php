<?php
include "db_Verbindung.php";
try{
    /* Query */
    $query = "SELECT * FROM Nutzer LEFT JOIN Stadt ON Nutzer.PLZ = Stadt.PLZ WHERE ID = ";
    if (isset($_GET['id'])) {
        $query = $query . $_GET['id'];
    } else {
        $query = $query . $_SESSION['UID'];
    }


    $ergebnis = $verbindung->prepare($query);
    $ergebnis->execute();
    $ergebnis = $ergebnis->fetch();
}catch(Exception $e){

}


?>