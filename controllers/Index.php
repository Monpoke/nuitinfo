<?php

class Index extends Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function homeAction()
    {

        $this->loadModel("Disaster",true);

        $disasters = array(
//            new Disaster("Tsunami bancock", new Product("water", 2.5, new ProductCategory("test", "dasd"), "dasd", true)),
//            new Disaster("Earthquake LA", new Product("water", 2.5, new ProductCategory("test", "dasd"), "dasd", true))

            new Disaster("Tsuna", 10, "20 janvier 2015", "POL", "TRUC", "Bouteille","eau",100, 50),
            new Disaster("Tsuna", 10, "20 janvier 2015", "POL", "TRUC", "Bouteille","eau",100, 50),
            new Disaster("Tsuna", 10, "20 janvier 2015", "POL", "TRUC", "Bouteille","eau",100, 50),
            new Disaster("fdfdsfsdf", 10, "89 décembre 2015", "Magie", "Pliefef", "Bouteille","eau",100, 0),

        );
        $this->view("index", array(
            'disasters' => $disasters
        ));
    }



}