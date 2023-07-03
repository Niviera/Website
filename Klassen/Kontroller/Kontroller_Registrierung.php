<?php
class Kontroller_Registrierung{
    private $template = "tp_Register_Form";
    private $template_erfolg = "tp_Sucess";
    private $model;
    private $view;
    

    public function __construct(){
        $this->model = new Model_Nutzer("../Datenbank/");
        $this->view = new View_Allgmemein();
    }

    public function validate(){
       
        if($_SESSION['UID'] != ""){
            $this->view->set_nachricht("Wilkommen");
            $this->view->set_alte_Werte("vorname", $_SESSION['UName']);           
            $this->view->set_alte_Werte("nachname", $_SESSION['UNachname']);         
            return $this->view->lade_Template($this->template_erfolg);
        }
        
        if(isset($_POST['email']) && isset($_POST['eMailwdh']) && 
            isset($_POST['nachname']) && isset($_POST['vorname']) &&
            isset($_POST['plz']) && isset($_POST['stadt']) && isset($_POST['tele']) &&
            isset($_POST['passwort']) && isset($_POST['passwortwdh'])
            && isset($_POST['straße'])
            ){
                /* True alles Daten vorhanden */
                if(!$this->check_Email($_POST['email'], $_POST['eMailwdh'])){
                    /* Email falsch! */
                    $this->view->set_nachricht("Fehlerhafte Eingabe! Kontrolliere die Email");
                    include "../Klassen/utility/fehler_behandlung_Register.php";
                    return $this->view->lade_Template($this->template);
                }

                if(!$this->check_Password($_POST['passwort'], $_POST['passwortwdh'])){
                    /* Passwort nicht identisch! */
                    $this->view->set_nachricht("Fehlerhafte Eingabe! Passwörter unterschiedlich");
                    include "../Klassen/utility/fehler_behandlung_Register.php";
                    return $this->view->lade_Template($this->template);

                }
                /* Kümmere um die Stadt */
                $this->stadt($_POST['plz'],$_POST['stadt']);
       

                /* Behandlung des Bildes */

                $bild = "standart.jpeg";
                $erlaubteTypen = array(IMAGETYPE_PNG, IMAGETYPE_JPEG);
        
                /* Handhabung von Bildern unique() für namen */
                if ($_FILES['dateiHochladen']['name'] != "") {
                    $fileType = exif_imagetype($_FILES['dateiHochladen']['tmp_name']);
                    if (in_array($fileType, $erlaubteTypen)) {
                        $bild = $_FILES['dateiHochladen']['name'];
                        move_uploaded_file(
                            $_FILES['dateiHochladen']['tmp_name'],
                            '../Bilder/profile/' . $_FILES['dateiHochladen']['name']

                            /*TODO: Fix Bildupload */
                        );
                    } else {
                        /* Fehlerhaftes Bildformat! */
                        $this->view->set_nachricht("Fehlerhafte Eingabe! Falsches Bildformat");
                        return $this->view->lade_Template($this->template);
                    }
                }

                /* Eintragung des neuen Nutzers */
                $pw = password_hash($_POST['passwort'], PASSWORD_DEFAULT);
                $this->model->neuer_Nutzer( $_POST['email'], $_POST['vorname'], $_POST['nachname'], 
                                            $_POST['straße'], $_POST['plz'], $_POST['tele'], 
                                            $pw, $bild);

                
                /* Speichere Nutzerdaten in Session */
                $erg = $this->model->get_User_Data($_POST['email']);
                $_SESSION['UID'] = $erg['ID'];
                $_SESSION['UName'] = $_POST['vorname'];
                $_SESSION['UTOKEN'] = uniqid();

                
                $this->view->set_nachricht("Wilkommen");
                $this->view->set_alte_Werte("vorname", $_POST['vorname']);           
                $this->view->set_alte_Werte("nachname", $_POST['nachname']);


                header('Location: konto_erstellen.php');
                return $this->view->lade_Template($this->template_erfolg);
               
        }else{
                /* Eine Sache minumum nicht gesetzt */
                return $this->view->lade_Template($this->template);
        }
    }

    /* Hilfsfunktionen */
    private function check_Email($mail, $mailwdh){
        /* Funktion prüft nur ob die gültig, identisch oder vergeben ist --> return value true oder false */
        /* Kontrolle ob beides Emails sind */
        if (!filter_var($mail, FILTER_VALIDATE_EMAIL) || !filter_var($mailwdh, FILTER_VALIDATE_EMAIL)){
            return false;
        }
        /* Kontrolle ob identisch */
        if ($mail != $mailwdh){
            return false;
        }
        /* Kontrolle ob in der Datenbank bereits vorhanden */
        $erg = $this->model->kontrolliere_Email($mail);
        if(intval($erg['COUNT(*)']) >= 1){
            return false;
        }

        return true;

    }

    private function check_Password($pw, $pwwdh){
        if($pw != $pwwdh){
            return false;
        }
        return true;
    }

    private function stadt($plz, $name){
        if($this->model->kontrolliere_Stadt($plz)){
            $erg = $this->model->get_Daten();
            if(intval($erg['COUNT(*)']) == 0){
                return $this->model->neue_Stadt($plz, $name);
            }
            return true;
        }else{
            return false;
        }

    }

}
