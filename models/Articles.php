<?php

class Articles extends Model
{

    protected static $cachePrices = array();

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
        $articles = array();
        while ($rs = $prepare->fetch(PDO::FETCH_ASSOC)) {

            $articles[] = new Product($rs['id'], $rs['name'], $rs['price'], "", "", true);

        }

        return $articles;
    }

}