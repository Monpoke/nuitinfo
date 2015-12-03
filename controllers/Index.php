<?php

class Index extends Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function homeAction()
    {


        $this->view("index");
    }

}