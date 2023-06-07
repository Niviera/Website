<?php
class Kontroller_Login{
    private $model;
    private $view;
    

    public function __construct(){
        $this->model = new Model_Nutzer("../Datenbank/");
        $this->view = new View_Allgmemein();
    }

}