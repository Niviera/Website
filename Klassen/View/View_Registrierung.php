<?php
class View_Registrierung{
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
        $this->nachricht = $msg;
    }

    public function set_alte_Werte($schluessel, $wert){
		$this->alte_Werte[$schluessel] = $wert;
	}

}