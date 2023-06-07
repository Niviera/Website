<?php
session_start();
class Kontroller_Registrierung{
    private $model;
    private $view;
    

    public function __construct(){
        $this->model = new Model_Nutzer("../Datenbank/");
        $this->view = new View_Registrierung();
    }

    public function validate(){
        
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
                    return $this->view->lade_Template("tp_Register_Form_error");
                }

                if(!$this->check_Password($_POST['passwort'], $_POST['passwortwdh'])){
                    /* Passwort nicht identisch! */
                    $this->view->set_nachricht("Fehlerhafte Eingabe! Passwörter unterschiedlich");
                    include "../Klassen/utility/fehler_behandlung_Register.php";
                    return $this->view->lade_Template("tp_Register_Form_error");

                }
                /* Kümmere um die Stadt */
                $this->stadt($_POST['plz'],$_POST['stadt']);
       

                /* Behandlung des Bildes */

                $bild = "standart.jpeg";
                $erlaubteTypen = array(IMAGETYPE_PNG, IMAGETYPE_JPEG);
        
                /* Handhabung von Bildern */
                if ($_FILES['dateiHochladen']['name'] <> "") {
                    $fileType = exif_imagetype($_FILES['dateiHochladen']['tmp_name']);
                    if (in_array($fileType, $erlaubteTypen)) {
                        $bild = $_FILES['dateiHochladen']['name'];
                        move_uploaded_file(
                            $_FILES['dateiHochladen']['tmp_name'],
                            '../Bilder/profile/' . $_FILES['dateiHochladen']['name']
                        );
                    } else {
                        /* Fehlerhaftes Bildformat! */
                        $this->view->set_nachricht("Fehlerhafte Eingabe!");
                        return $this->view->lade_Template("tp_Register_Form");
                    }
                }

                /* Eintragung des neuen Nutzers */
                $pw = password_hash($_POST['passwort'], PASSWORD_DEFAULT);
                $this->model->neuer_Nutzer( $_POST['email'], $_POST['vorname'], $_POST['nachname'], 
                                            $_POST['straße'], $_POST['plz'], $_POST['tele'], 
                                            $pw, $bild);

                
                /* Speichere Nutzerdaten in Session */
                $erg = $this->model->get_User_Data_EMail($_POST['email']);
                $_SESSION['UID'] = $erg['ID'];
                $_SESSION['UEMAIL'] = $erg['EMail'];

                return $this->view->lade_Template("tp_Register_Sucess");
               
        }else{
                /* Eine Sache minumum nicht gesetzt */
                return $this->view->lade_Template("tp_Register_Form");
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
        $erg = $this->model->kontrolliere_Stadt($plz);
        if(intval($erg['COUNT(*)']) == 0){
            return $this->model->neue_Stadt($plz, $name);
        }
        return true;
    }

}