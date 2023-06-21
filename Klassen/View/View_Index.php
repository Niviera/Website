<?php
class View_Index{
    private $kategorien = array();
    private $nachricht;

    public function lade_Template($tpl){
        ob_start();
        include "Klassen/Templates/".$tpl.".php";
        $ausgabe = ob_get_contents();
        ob_end_clean();
        return $ausgabe;
    }

    public function set_nachricht($wert){
        $this->nachricht = htmlentities($wert);
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

    public function set_Kategorie_Index($wert1, $wert2, $active, $such_eingabe){
        $neu = array();
        $neu[] = htmlentities($wert1);
        $neu[] = htmlentities($wert2);
        $neu[] = htmlentities($active);
        $neu[] = htmlentities($such_eingabe);
        $this->kategorien[] = $neu;
	}


}