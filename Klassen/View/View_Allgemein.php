<?php
class View_Allgmemein{
    private $nachricht = "";
    private $alte_Werte = array();

    private $kategorien = array();
    private $error;
    private $success;


    public function lade_Template($tpl){
        ob_start();
        include "../Klassen/Templates/".$tpl.".php";
        $ausgabe = ob_get_contents();
        ob_end_clean();
        return $ausgabe;
    }

    public function set_nachricht($msg){
        $this->nachricht = htmlentities($msg);
    }
    public function set_error($msg){
        $this->error = htmlentities($msg);
    }

    public function set_success($msg){
        $this->success = htmlentities($msg);
    }

    public function set_alte_Werte($schluessel, $wert){
		$this->alte_Werte[$schluessel] = htmlentities($wert);
	}

    public function set_Hilfsgesuche($id_Hilfsgesuch ,$id_Ersteller ,$ueberschrift, $vorname, $nachname, $beschreibung ){
        $neu = array();
        $neu[] = htmlentities($id_Hilfsgesuch);
        $neu[] = htmlentities($id_Ersteller);
        $neu[] = htmlentities($ueberschrift);
        $neu[] = htmlentities($vorname);
        $neu[] = htmlentities($nachname);
        $neu[] = htmlentities($beschreibung);
        $this->kategorien[] = $neu;
    }
}