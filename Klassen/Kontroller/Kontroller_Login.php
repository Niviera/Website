<?php
class Kontroller_Login{
    private $template_base = "tp_Login_Form";
    private $template_erfolg = "tp_Sucess";
    private $model;
    private $view;
    private $nachricht = "Herzlich Wilkommen";
    

    public function __construct(){
        $this->model = new Model_Nutzer("../Datenbank/");
        $this->view = new View_Allgmemein();
    }

    public function validate(){
        /* Zurzeit eine Fehlervermeidung --> Links passen sich zurzeit nicht Sofort an */
        if($_SESSION['UID'] != ""){      
            $this->view->set_nachricht($this->nachricht);
            $this->view->set_alte_Werte("vorname", $_SESSION['UName']);
            $this->view->set_alte_Werte("nachname", $_SESSION['UNachname']);
            return $this->view->lade_Template($this->template_erfolg);
        }

        if(isset($_POST['email']) && $_POST['passwort']){
            /* Überprüfe auf gültige Email */
            if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                $this->view->set_nachricht("Fehlerhafte Eingabe. Überprüfen sie diese.");
                return $this->view->lade_Template($this->template_base);
            }
            /* Überprüfe ob Email Registriert ist */
            $erg = $this->model->kontrolliere_Email($_POST['email']);
            if(intval($erg['COUNT(*)']) == 0){
                $this->view->set_nachricht("Fehlerhafte Eingabe. Überprüfen sie diese.");
                return $this->view->lade_Template($this->template_base);
            }

            /* Überprüfe Nutzerdaten --> Passwort */
            $erg = $this->model->get_User_Data($_POST['email']);
            if(!password_verify($_POST['passwort'], $erg['passwort'])){
                $this->view->set_nachricht("Fehlerhafte Eingabe. Überprüfen sie diese.");
                return $this->view->lade_Template($this->template_base);
            }

            /* Setze alle Relevanten Infos für den Nutzer */
            $_SESSION['UID'] = $erg['ID'];
            $_SESSION['UName'] = $erg['Vorname'];
            $_SESSION['UNachname'] = $erg['Nachname'];

            $this->view->set_nachricht($this->nachricht);
            $this->view->set_alte_Werte("vorname", $erg['Vorname']);
            $this->view->set_alte_Werte("nachname", $erg['Nachname']);
            return $this->view->lade_Template($this->template_erfolg);

        }else{
            /* Login Bereich normal */
            return $this->view->lade_Template($this->template_base);
        }
        
    }
    /* Hilfsfunktionen */
    private function generriere_Sucess_View($vorname, $nachname){

            
    }

}