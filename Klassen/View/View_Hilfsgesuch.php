<?php
class View_Hilfsgesuch{
    private $kategorien = array();
    private $nachricht;

    public function lade_Template($tpl){
        ob_start();
        include "../Klassen/Templates/".$tpl.".php";
        $ausgabe = ob_get_contents();
        ob_end_clean();
        return $ausgabe;
    }

    public function set_nachricht($wert){
        $this->nachricht = htmlentities($wert);
    }

    public function set_Werte($wert1, $wert2){
        $neu = array();
        $neu[] = htmlentities($wert1);
        $neu[] = htmlentities($wert2);
        $this->kategorien[] = $neu;
	}

    public function set_alte_Werte($schluessel, $wert){
		$this->kategorien[$schluessel] = htmlentities($wert);
	}

}