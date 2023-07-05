<?php
class Kontroller_Konto_Uebersicht{
    private $model;
    private $view;

    public function __construct(){
        $this->model = new Model_Nutzer("../Datenbank/");
        $this->view = new View_Allgmemein();
    }

    
    public function work(){
        /* Entscheide ob eigenes Konto oder Fremdkonto erfragt wird */
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $template = "tp_Fremd_Konto_Uebersicht";

        }else{
            $id = $_SESSION['UID'];
            $template = "tp_Konto_Uebersicht";
        }

        /* Lade konto Uebersicht */
        if($this->model->get_User_Date_ID($id)){
            $erg = $this->model->get_Daten();
            $this->view->set_alte_Werte("email", $erg['EMail']);
            $this->view->set_alte_Werte("vorname", $erg['Vorname']);
            $this->view->set_alte_Werte("nachname", $erg['Nachname']);
            $this->view->set_alte_Werte("adresse", $erg['Addresse']);
            $this->view->set_alte_Werte("bild", $erg['bild']);
            $this->view->set_alte_Werte("plz", $erg['PLZ']);
            $this->view->set_alte_Werte("stadt", $erg['Name']);
            $this->view->set_alte_Werte("tele", $erg['telnr']);
            $this->view->set_alte_Werte("utoken", $_SESSION['UTOKEN']);


            return $this->view->lade_Template($template);
            
        }else{
            /* TODO: Fehlerbehandlung konnte keine Daten auslesen! */
            
            
        }

    }

    public function update(){
        /* TODO: Überprüfe ob der Nutzer noch excistiert --> Stichwort Transaktionen, Constraints */
        /* Überprüfe ob Daten geupdatet werden sollen! */
        if(isset($_POST['bestaetigt'])){
            if(isset($_POST['vorname'], $_POST['nachname'], $_POST['straße'], $_POST['plz'], $_POST['stadt'], $_POST['email'], $_POST['UTOKEN']))
            {
                /* Überprüfe auf User Token */
                if($_POST['UTOKEN'] != $_SESSION['UTOKEN']){
                    $this->view->set_error("Fehler: Ihre Daten konnten nicht geupdatet werden.");
                    return;
                }

                /* Überpfüfe ob die Stadt bisher eingetragen ist */
                if($this->model->kontrolliere_Stadt($_POST['plz'])){
                    $test = $this->model->get_Daten();
                    if(intval($test['COUNT(*)']) == 0){
                        $this->model->neue_Stadt($_POST['plz'], $_POST['stadt']);
                    }                       
                    }else{
                        /*TODO: Etwas ist bei der Abfrage schiefgelaufen! */
                        
                    }
                    /* Update Nutzerdaten */
                    /* Überprüfe ob eine EMail verwendet werden soll --> ob sie belegt ist */
                    if( $_SESSION['UMail'] != $_POST['email']){
                        $test = $this->model->kontrolliere_Email($_POST['email']);
                        if(intval($test['COUNT(*)']) != 0){
                            $this->view->set_error("Fehler: Ihre Daten konnten nicht geupdatet werden.");
                            return;
                        }
                    }
                    /* Kontrolliere den Vornamen */
                    if(strlen($_POST['vorname']) >= 41){
                        $this->view->set_error("Fehler: Der Vorname ist zu lang");
                        return;
                    }
                    /* Kontrolliere den Vornamen */
                    if(strlen($_POST['nachname']) >= 41){
                        $this->view->set_error("Fehler: Der Nachname ist zu lang.");
                        return;
                    }
                    /* Kontrolliere den Vornamen */
                    if(strlen($_POST['straße']) >= 41){
                        $this->view->set_error("Fehler: Die Adresse ist zu lang.");
                        return;
                    }

                    if($this->model->update_User_Data($_SESSION['UID'], $_POST['vorname'], $_POST['nachname'], $_POST['straße'], $_POST['plz'], $_POST['email'])){
                        $this->view->set_success("Erfolg: Ihre Daten wurden geupdatet.");
                    }else{
                        $this->view->set_error("Fehler: Ihre Daten konnten nicht erfolgreich geupdatet werden.");
                    }
        
            }else{
                $this->view->set_error("Fehler: Ihre Daten sind nicht vollständig");
            }
        }

    }
}

