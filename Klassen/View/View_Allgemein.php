<?php
class View_Allgmemein{
    private $nachricht = "";
    private $alte_Werte = array();

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

    public function set_alte_Werte($schluessel, $wert){
		$this->alte_Werte[$schluessel] = htmlentities($wert);
	}

}