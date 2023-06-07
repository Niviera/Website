<?php
class Kontroller_Hiflsgesuch_Erstellen{
    private $template = "tp_Hilfsgesuch_Erstellen";
    private $model_Gesuche;
    private $model_Kategorien;
    private $view;

    public function __construct(){
        $this->model_Gesuche = new Model_Hilfsgesuche("../Datenbank/");
        $this->model_Kategorien = new Model_Kategorien("../Datenbank/");
        $this->view = new View_Hilfsgesuch();
    }

    public function validate(){
        /* Hole Kategorien aus der Datenbank */
        $this->display_Kategorien();

        if(isset($_POST['titel'])&& isset($_POST['kategorie']) && isset($_POST['beschreibung'])){
            /* Kontrolliere Title */
            if(!is_string($_POST['titel'])){
                $this->view->set_nachricht("Überprüfe bitte den Titel");
                return $this->view->lade_Template($this->template);
            }
            if(strlen($_POST['titel']) >= 41){
                $this->view->set_nachricht("Titel zu lang!");
                return $this->view->lade_Template($this->template);
            }

            /* Kontrolliere Kategorie */
            if(!is_string($_POST['kategorie'])){
                $this->view->set_nachricht("Überprüfe bitte die Kategorie");
                return $this->view->lade_Template($this->template);
            }
            /* Kontrolliere Beschreibnung */
            if(!is_string($_POST['beschreibung'])){
                $this->view->set_nachricht("Überprüfe bitte den Titel");
                return $this->view->lade_Template($this->template);
            }
            if(strlen($_POST['beschreibung']) >= 1201){
                $this->view->set_nachricht("Beschreibung zu lang!");
                return $this->view->lade_Template($this->template);
            }

            if($this->model_Gesuche->neues_Hilfsgesuch($_POST['titel'], $_POST['beschreibung'], $_POST['kategorie'])){
                $this->view->set_nachricht("Die Eintragung war Erfolgreich");
            }else{
                $this->view->set_nachricht("Bei der Eintragung ist etwas Schiefgelaufen");
            }

            return $this->view->lade_Template($this->template);

        }else{
            return $this->view->lade_Template($this->template);
        }
    }

    /* Hilfsfunktionen */
    private function display_Kategorien(){
        if($this->model_Kategorien->get_Kategorien()){
            $erg = $this->model_Kategorien->get_erg();
            foreach($erg as $rslt){
                $this->view->set_Werte($rslt['ID'], $rslt['Name']);
            }
            
        }
    }
}
