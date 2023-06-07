<?php
    $this->view->set_alte_Werte("email", htmlentities($_POST['email']));
    $this->view->set_alte_Werte("eMailwdh", htmlentities($_POST['eMailwdh']));
    $this->view->set_alte_Werte("nachname", htmlentities($_POST['nachname']));
    $this->view->set_alte_Werte("vorname", htmlentities($_POST['vorname']));
    $this->view->set_alte_Werte("plz", htmlentities($_POST['plz']));
    $this->view->set_alte_Werte("stadt", htmlentities($_POST['stadt']));
    $this->view->set_alte_Werte("tele", htmlentities($_POST['tele']));
    $this->view->set_alte_Werte("straße", htmlentities($_POST['straße']));
   