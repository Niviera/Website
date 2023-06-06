<?php
    if(isset($_POST['loeschen'])){
        $kommaCheck = '';
        include "db_Verbindung.php";
        $query_Loeschen = "DELETE FROM Hilfsgesuch WHERE ID IN (";
        foreach($_SESSION['CheckDelete'] as $kontrolle){
            if(isset($_POST[$kontrolle]))
                if('' != $kommaCheck){
                    $query_Loeschen = $query_Loeschen . ',';
                }
                $query_Loeschen = $query_Loeschen . $_POST[$kontrolle];
                $kommaCheck = $_POST[$kontrolle];
            }
            try{
                $query_Loeschen = $query_Loeschen . ')';
                $query_Loeschen = $verbindung->prepare($query_Loeschen);
                $query_Loeschen->execute();     
            }catch(Exception $e){

            }
    }

