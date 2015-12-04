<?php

class Index extends Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    /**
     *
     */
    public function homeAction()
    {

        /** @var Articles $Articles */
        $Articles = $this->loadModel("Articles");
        $articles = $Articles->getArticlesByPriority();

        /** @var DonsModel $DonsModels */
        $DonsModels = $this->loadModel("DonsModel");
        $allSums = $DonsModels->getSumEvents();

        $this->loadModel("Disaster", true);


        $d = "";
        for ($i = 0; $i < 20; $i++) {
            $d .= "Un texte...Un texte...Un texte...\n";
        }

        $cache = array();

        $disasters = getDisasters();

        /** @var Disaster $disaster */
        foreach ($disasters as &$disaster) {
            if ($disaster->getProduct() === null) {

                $articleId =0;
                $sTotal = 0;
                if(isset($articles[$articleId])) {
                    do {
                        $disaster->setProduct($articles[$articleId]);
                        $donation = 0;

                        if (isset($allSums[$disaster->getId()])) {
                            $disaster->setTotalProduct($allSums[$disaster->getId()] - $sTotal);
                            $donation = $allSums[$disaster->getId()];
                        }

                        $sTotal += $articles[$articleId]->get_price();
                        $articleId++;
                    } while ($sTotal < $donation && isset($articles[$articleId]));
                }
            }

        }


        $this->view("index", array(
            'disasters' => $disasters
        ));
    }


}