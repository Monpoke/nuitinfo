<?php

class Dons extends Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function homeAction()
    {

        if($_SERVER['REQUEST_METHOD'] != "POST"){
            exit("fail");
        }
        $val = (double)$_POST['val'];
        $id = (int)$_POST['id'];


        if($val > 0){
            echo "Merci ! Ce don de " . $val . " euros permettra d'acheter ce matériel de première nécessité !\n
            Une API PayPal aurai pu être implémentée.";

            /** @var DonsModel $Recup */
            $DonsModel = $this->loadModel("DonsModel");
            $DonsModel->insertPayment($id, $val);

            exit;
        }
        echo "fail";
    }



    public function testAction(){

        /** @var Articles $Articles */
        $Articles = $this->loadModel("Articles");
        $Articles->getArticlesByPriority();

        exit();
    }
}
