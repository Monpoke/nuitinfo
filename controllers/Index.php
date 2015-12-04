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

        $p = new Product("Eau", 1.5, "Boisson", "Basique...", true);

        $d = "";
        for($i=0;$i<20;$i++){
            $d .= "Un texte...Un texte...Un texte...\n";
        }

        $disasters = array(
//            new Disaster("Tsunami bancock", new Product("water", 2.5, new ProductCategory("test", "dasd"), "dasd", true)),
//            new Disaster("Earthquake LA", new Product("water", 2.5, new ProductCategory("test", "dasd"), "dasd", true))

            new Disaster(1, "France", "Tsunami", "20 janvier", $d, "eau.png", $p, 20, 100),
            new Disaster(2, "France", "Tsunami", "20 janvier", $d, "eau.png", $p, 80, 200),
            new Disaster(3, "France", "Tsunami", "20 janvier", $d, "eau.png", $p, 10, 100),

        );
        $this->view("index", array(
            'disasters' => $disasters
        ));
    }


}