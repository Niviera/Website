<?php
class View_Hilfsgesuch{
    private $kategorien = array();
    private $alte_Werte = array();
    private $nachricht;
    private $error;
    private $success;

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
        $neu[] = htmlentities("a");
        $this->kategorien[] = $neu;
	}

    public function set_alte_Werte($schluessel, $wert){
		$this->kategorien[$schluessel] = htmlentities($wert);
	}

    public function set_alte_Formular_Werte($wert){
		$this->alte_Werte[] = htmlentities($wert);
	}

    public function reset_alte_Formular_Werte(){
        $this->alte_Werte = array();
    }

    public function set_error($nachricht){
		$this->error = htmlentities($nachricht);
	}

    public function set_success($nachricht){
		$this->success = htmlentities($nachricht);
	}

    public function set_selected($schluessel){
        $index = 0;
		foreach($this->kategorien as $lookup){      
            if($lookup[0] == $schluessel){
                break;
            }
            $index += 1;
        }
        $this->kategorien[$index][2] = htmlentities("selected");
	}


}