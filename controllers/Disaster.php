<?php

class Disaster extends Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function homeAction()
    {
        $id = !empty($_GET['id']) ? (int)$_GET['id'] : false;


        if ($id === false) {
            exit("ID invalide...");
        }

        /**
         * Ton traitement ici
         */


        $data = array(
            'name' => "Truc",
            'liste' => array(
                'cle' => '1',
                'Boug' => 'Fefezfefz',
                'fefe' => "LUDO"
            )
        );
        $this->view("view", $data);
    }

}