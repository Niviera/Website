<?php 
    include "../Klassen/Kontroller/Kontroller_Ajax.php";
    include "../Klassen/Model/Model_Kategorien.php";
    include "../Klassen/Model/Model_Hilfsgesuche.php";
    include "../Klassen/View/View_Allgemein.php";

    $Kontroller = new Kontroller_Ajax("../");

    echo $Kontroller->display_Hilfsangebote_Ajax();

?>