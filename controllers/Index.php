<?php

class Index extends Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function homeAction()
    {

        $this->loadModel("Disaster", true);

        $p = new Product(1, "Eau", 100, "Boisson", "Basique...", true);

        $d = "";
        for($i=0;$i<20;$i++){
            $d .= "Un texte...Un texte...Un texte...\n";
        }

        $disasters = getDisasters();


        $this->view("index", array(
            'disasters' => $disasters
        ));
    }


}