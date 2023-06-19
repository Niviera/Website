<?php

class Kontroller_Ajax{

    private $model_Gesuche;
    private $model_Kategorien;
    private $view;

    public function __construct($pfad){
        $this->$pfad = $pfad;
        $this->model_Gesuche = new Model_Hilfsgesuche("../Datenbank/");
        $this->model_Kategorien = new Model_Kategorien("../Datenbank/");
        $this->view = new View_Allgmemein();
    }

    public function display_Hilfsangebote_Ajax(){
        if($this->model_Gesuche->hilfsgesuche($_GET['kategorie'], $_GET['sucheingabe'])){
            $this->view = new View_Allgmemein();
            $erg = $this->model_Gesuche->get_ergebnisse();
            foreach($erg as $row){
                $this->view->set_Hilfsgesuche($row['ID'], $row['nutzerID'], $row['Titel'], $row['Vorname'], $row['Nachname'], $row['Beschreibung']);
            }
            return $this->view->lade_Template("tp_Angebot_Box");
        }else{
            /* TODO: Error bei Hilfsangebot abfrage */
        }
    }

}


?>