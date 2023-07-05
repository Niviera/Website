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

        if(isset($_GET['token'])){
            if($_GET['token'] == $_SESSION['UTOKEN']){
                $this->bestaetigen();
            }
        }
       
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

                $_SESSION['bild'] = "standart.jpeg";
                $erlaubteTypen = array(IMAGETYPE_PNG, IMAGETYPE_JPEG);
        
                /* Handhabung von Bildern unique() für namen */
                if ($_FILES['dateiHochladen']['name'] != "") {
                    $fileType = exif_imagetype($_FILES['dateiHochladen']['tmp_name']);
                    if (in_array($fileType, $erlaubteTypen)) {
                        $_SESSION['bild'] = $_FILES['dateiHochladen']['name'];
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
                $_SESSION['temp_pw'] = password_hash($_POST['passwort'], PASSWORD_DEFAULT);
                

                
                /* Speichere Nutzerdaten in Session */       
                $_SESSION['UName'] = $_POST['vorname'];
                $_SESSION['UNachname'] = $_POST['nachname'];
                $_SESSION['email'] = $_POST['email'];
                $_SESSION['straße'] = $_POST['straße'];
                $_SESSION['plz'] = $_POST['plz'];
                $_SESSION['tele'] = $_POST['tele'];
                $_SESSION['UTOKEN'] = uniqid();  // Token für die Registrierung

                /* Schreibe in einer Datei bestätigung der Registrierung */
                file_put_contents("../Email.html", 'Bitte ignoriere die E-Mail, wenn du es nicht warst, der sich versucht hat zu registrieren. 
                Ansonsten klicke auf folgenden Link, um die Registrierung zu beenden: <a href="Konto/konto_erstellen.php?token='.$_SESSION["UTOKEN"].'"> 
                jetzt Registrieren </a>)');
                $this->view->set_nachricht("Es wurde eine E-Mail an die angegebene Adresse verschickt mit weiteren Infos.");
                return $this->view->lade_Template("tp_Email_bestaetigung");
               
        }else{
                /* Eine Sache minumum nicht gesetzt */
                return $this->view->lade_Template($this->template);
        }
    }

    public function bestaetigen(){

        if(isset($_SESSION['email'], $_SESSION['UName'], $_SESSION['UNachname'], 
                $_SESSION['straße'], $_SESSION['plz'], $_SESSION['tele'], 
                $_SESSION['temp_pw'], $_SESSION['bild']))
        {
            $this->model->neuer_Nutzer( $_SESSION['email'], $_SESSION['UName'], $_SESSION['UNachname'], 
                                            $_SESSION['straße'], $_SESSION['plz'], $_SESSION['tele'], 
                                            $_SESSION['temp_pw'], $_SESSION['bild']);

            $erg = $this->model->get_User_Data($_SESSION['email']);
            $_SESSION['UID'] = $erg['ID'];
            $_SESSION['UTOKEN'] = uniqid();   // neuen Token generieren


            /* Vernichte nicht benötigte Daten */
            header('Location: konto_erstellen.php');
            
        }else{
            //return $this->view->lade_Template($this->template);
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
            /* Schreibe in einer Datei Link zum reset des Passworts */
            file_put_contents("../Email.txt", "Bitte ignoriere die E-Mail, 
            wenn du es nicht warst, der sich versucht hat zu registrieren. 
            Du bist aber bereits registriert. Solltest du dein Password vergessen habe, 
            klicke bitte hier");

            /* */
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
