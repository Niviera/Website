<?php
class Kontroller_Index{
    private $template = "tp_Hilfsgesuch_Erstellen";
    private $model_Gesuche;
    private $model_Kategorien;
    private $view;

    public function __construct($pfad){
        $this->model_Gesuche = new Model_Hilfsgesuche($pfad);
        $this->model_Kategorien = new Model_Kategorien($pfad);
        $this->view = new View_Index();
    }


    public function display_Hilfsangebote(){
        if($this->model_Gesuche->hilfsgesuche($_GET['kategorie'], $_GET['sucheingabe'])){
            $this->view = new View_Index();
            $erg = $this->model_Gesuche->get_ergebnisse();
            foreach($erg as $row){
                $this->view->set_Hilfsgesuche($row['ID'], $row['nutzerID'], $row['Titel'], $row['Vorname'], $row['Nachname'], $row['Beschreibung']);
            }
            return $this->view->lade_Template("tp_Angebot_Box");
        }else{
            /* TODO: Error bei Hilfsangebot abfrage */
        }
    }

    public function display_Index_Kategorien(){
        if($this->model_Kategorien->get_Kategorien()){
            $erg = $this->model_Kategorien->get_erg();
            $such_eingabe = "";
            if($_GET['sucheingabe'] != ''){
                $such_eingabe = $_GET['sucheingabe'];
            }
            /* Füge sämtliche Kategorien hinzu */
            foreach($erg as $rslt){
                $active = "";
                if ($_GET['kategorie'] == $rslt['ID']) {
                    $active = "active";
                }
                $this->view->set_Kategorie_Index($rslt['ID'], $rslt['Name'], $active, $such_eingabe);
            }    
        }
       return $this->view->lade_Template("tp_Kategorien_Index");

    }
}

?>