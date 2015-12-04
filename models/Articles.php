<?php

class Articles extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    /**
     *
     */
    public function getArticlesByPriority()
    {

        $PDO = $this->getPDO();
        $prepare = $PDO->prepare("SELECT * FROM produits_liste ORDER BY priorite DESC");
        $prepare->execute();
        while ($rs = $prepare->fetch(PDO::FETCH_ASSOC)) {

        }


    }

}