<?php

class Index extends Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function homeAction()
    {

        $disasters = array(
            new Disaster("Tsunami bancock", new Product("water", 2.5, new ProductCategory("test", "dasd"), "dasd", true)),
            new Disaster("Earthquake LA", new Product("water", 2.5, new ProductCategory("test", "dasd"), "dasd", true))
        );
        $this->view("index");
    }

}