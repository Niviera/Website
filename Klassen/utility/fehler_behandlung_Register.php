<?php
    /* 
     * Dieses ist da um Duplizierung zu vermeiden 
     * Spezifisch für Register Formular bei fehler wieder zu befüllen
    */
    $this->view->set_alte_Werte("email", $_POST['email']);
    $this->view->set_alte_Werte("eMailwdh", $_POST['eMailwdh']);
    $this->view->set_alte_Werte("nachname", $_POST['nachname']);
    $this->view->set_alte_Werte("vorname", $_POST['vorname']);
    $this->view->set_alte_Werte("plz", $_POST['plz']);
    $this->view->set_alte_Werte("stadt", $_POST['stadt']);
    $this->view->set_alte_Werte("tele", $_POST['tele']);
    $this->view->set_alte_Werte("straße", $_POST['straße']);
   