<?php
/* TODO: Rename zu Kontroller_Hilfsgesuche.php --> es steuert alles Hilfsgesuch spezifisches! */
class Kontroller_Hiflsgesuch_Erstellen{
    private $template = "tp_Hilfsgesuch_Erstellen";
    private $model_Gesuche;
    private $model_Kategorien;
    private $view;

    public function __construct($pfad){
        $this->model_Gesuche = new Model_Hilfsgesuche($pfad);
        $this->model_Kategorien = new Model_Kategorien($pfad);
        $this->view = new View_Hilfsgesuch();
    }

    public function validate(){
        /* Hole Kategorien aus der Datenbank */
        $this->display_Kategorien();
        $this->view->set_error("");
        $this->view->set_success("");
        $this->view->reset_alte_Formular_Werte();
        $this->view->set_alte_Formular_Werte($_SESSION['UTOKEN']);

        $lat = NULL;
        $lon = NULL;

        if(isset($_POST['titel'], $_POST['kategorie'], $_POST['beschreibung'], $_POST['UTOKEN'])){
            /* kontrolliere Token */
            if($_POST['UTOKEN'] != $_SESSION['UTOKEN']){
                $this->view->set_error("Überprüfe bitte den Titel");
                return $this->view->lade_Template($this->template);
            }

            /* Kontrolliere Title */
            if(!is_string($_POST['titel'])){
                $this->view->set_error("Überprüfe bitte den Titel");
                return $this->view->lade_Template($this->template);
            }
            if(strlen($_POST['titel']) >= 41){
                $this->view->set_error("Titel zu lang!");
                $this->view->set_alte_Formular_Werte($_POST['titel']);
                $this->view->set_alte_Formular_Werte($_POST['beschreibung']);
                return $this->view->lade_Template($this->template);
            }

            /* Kontrolliere Kategorie */
            if(!is_string($_POST['kategorie'])){
                $this->view->set_error("Überprüfe bitte die Kategorie");
                return $this->view->lade_Template($this->template);
            }
            /* Kontrolliere Beschreibnung */
            if(!is_string($_POST['beschreibung'])){
                $this->view->set_error("Überprüfe bitte den Titel");
                return $this->view->lade_Template($this->template);
            }
            if(strlen($_POST['beschreibung']) >= 1201){
                $this->view->set_error("Beschreibung zu lang!");
                $this->view->set_alte_Formular_Werte($_POST['titel']);
                $this->view->set_alte_Formular_Werte($_POST['beschreibung']);
                return $this->view->lade_Template($this->template);
            }

            if(isset($_POST['lat'], $_POST['lon'])){
                $lat = $_POST['lat'];
                $lon = $_POST['lon'];
            }

            if($lat != ""){
                if($this->model_Gesuche->neues_Hilfsgesuch($_POST['titel'], $_POST['beschreibung'], $_POST['kategorie'], $lat, $lon)){
                    $this->view->set_success("Die Eintragung war Erfolgreich");
                }else{
                    $this->view->set_error("Bei der Eintragung ist etwas Schiefgelaufen");
                }
            }else{
                if($this->model_Gesuche->neues_Hilfsgesuch($_POST['titel'], $_POST['beschreibung'], $_POST['kategorie'], NULL, NULL)){
                    $this->view->set_success("Die Eintragung war Erfolgreich");
                }else{
                    $this->view->set_error("Bei der Eintragung ist etwas Schiefgelaufen");
                }
            }

            

            return $this->view->lade_Template($this->template);

        }else{
            return $this->view->lade_Template($this->template);
        }
    }

    public function display_Detailed_Angebot(){
        /* Kontrolliere ob eine ID gesetzt ist */
        $id = 0;
        if(!isset($_GET['id']) && $_SESSION['CurrentID'] == ''){
            /* liefere Fehler --> keine ID gesetzt */
            $this->view->set_nachricht("Fehler: Kein Angebot ausgewählt.");
            /* TODO: Setze ein Template dafür */
            return;
        }else{
            if(isset($_GET['id'])){
                $_SESSION['CurrentID']= $id = $_GET['id'];
                
            }else{
                $id = $_SESSION['CurrentID'];
            }
            
        }
        if(isset($_GET['richtung'])){
            $richtung = intval($_GET['richtung']);
            switch($richtung){
                case 1:
                    if($this->model_Gesuche->get_Nächste_ID($id)){
                        $erg = $this->model_Gesuche->get_ergebnisse();
                        if($erg['ID'] != ''){
                            $id = $erg['ID'];
                        }else{
                            $this->view->set_nachricht("Es gibt hier nach keine Hilfsgesuche mehr!");
                        }        
                    }
                    break;
                case 0:
                    if($this->model_Gesuche->get_vorherige_ID($id)){
                        $erg = $this->model_Gesuche->get_ergebnisse();
                        if($erg['ID'] != ''){
                            $id = $erg['ID'];
                        }else{
                            $this->view->set_nachricht("Es gibt vorher keine Hilfsgesuche mehr!");
                        }                        
                    }
                    break;
                default:
            }


                $_SESSION['CurrentID'] = $id;


        }

        if(!$this->model_Gesuche->hilfsgesuch_Detailed($id)){
            $this->view->set_nachricht("Fehler: Es ist ein Fehler beim Abfragen des Angebots passiert.");
            /* TODO: Setze ein Template dafür */
            return;
        }

        $erg = $this->model_Gesuche->get_ergebnisse();
        $this->view->set_alte_Werte("titel", $erg['Titel']);
        $this->view->set_alte_Werte("bild", $erg['bild']);
        $this->view->set_alte_Werte("beschreibung", $erg['Beschreibung']);

        $this->view->set_alte_Werte("vorname", $erg['Vorname']);
        $this->view->set_alte_Werte("nachname", $erg['Nachname']);
        $this->view->set_alte_Werte("email", $erg['EMail']);

        $this->view->set_alte_Werte("lon", $erg['lon']);
        $this->view->set_alte_Werte("lat", $erg['lat']);

        return $this->view->lade_Template("tp_detailed_Angebot");
    }

    public function angebot_Aendern(){
        $titel = "";
        $kategorie = "";
        $id = "";
        $bezeichnung = "";
        $lat = "";
        $lon = "";
        $utoken = "";

        /* Hole richtige ID */
        if (isset($_GET['ID'])) {
            $id = $_GET['ID'];
        } else {
            $id = $_POST['ID'];
        }

        /* Kategorien */
        $this->display_Kategorien();

        /* Hohle aktuelle Angebot details */
        if($this->model_Gesuche->hilfsgesuch_Detailed($id)){
            $erg = $this->model_Gesuche->get_ergebnisse();

            if($erg['Ersteller'] != $_SESSION['UID']){
                $this->view->set_error("Es ist ein Fehler passiert.");
                return $this->view->lade_Template("tp_Angebot_Aendern");
            }

            $lat = $erg['lat'];
            $lon = $erg['lon'];
            $titel = $erg['Titel'];
            $bezeichnung = $erg['Beschreibung'];
            $kategorie = intval($erg['Kategorie']);
            $utoken = $_POST['UTOKEN'];
            
            
            
        }else{
            $this->view->set_error("Kein Angebot gefunden.");
            return $this->view->lade_Template("tp_Angebot_Aendern");
        } 

        /* Änderungen des Angebots */
        if(isset($_POST['ID'], $_POST['titel'], $_POST['beschreibung'], $_POST['kategorie']) || $_POST['UTOKEN'] == $_SESSION['UTOKEN']){
            /* Kontrolle Kategorie */
            $kategorie = intval($_POST['kategorie']);
            /* Kontrolle Titel */
            if(strlen($_POST['titel']) < 41){
                $titel = $_POST['titel'];
            }else{
                $this->view->set_error("Der Titel ist zu lang!");
            }
            /* Kontrolle Beschreibung */
            if(strlen($_POST['beschreibung']) < 1201){
                $bezeichnung = $_POST['beschreibung'];
            }else{
                $this->view->set_error("Die Beschreibung ist zu lang");             
            }

            if($_POST['lat'] == ""){
                $lat = NULL;
            }else{
                $lat = $_POST['lat'];
            }

            if($_POST['lon'] == ""){
                $lon = NULL;
            }else{
                $lon = $_POST['lon'];
            }
            
            /* Angebot Ändern */
            if($this->model_Gesuche->angebot_aendern($titel, $bezeichnung, $kategorie, $id, $lat, $lon)){
                $this->view->set_success("Das Angebot wurde Erfolgreich angepasst.");
            }else{
                $this->view->set_error("Bei der änderung ist ein fehler passiert.");      
            }  
        }

        /* Updaten der View */
        
        $this->view->set_alte_Formular_Werte($titel);
        $this->view->set_alte_Formular_Werte($bezeichnung);
        $this->view->set_alte_Formular_Werte($id);
        $this->view->set_alte_Formular_Werte($lat);
        $this->view->set_alte_Formular_Werte($lon);
        $this->view->set_alte_Formular_Werte($utoken);
        
        $this->view->set_selected($kategorie);
        return $this->view->lade_Template("tp_Angebot_Aendern");
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
