<?php

class Disaster extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function homeAction() {
        $file = get_data("http://api.rwlabs.org/v1/disasters/");
        $tab = json_decode($file, true);

        $i = $tab["count"];
        $num = 0;


        /**
         * Ton traitement ici
         */
        $catas = array();

        while ($i >= $num) { // ici num++
            $catas[] = array(
                'name' => $this->trouverNom($tab, $num),
                'date' => $this->trouverDate($tab, $num),
                'id' => $this->trouverId($tab, $num),
                'date' => $this->trouverDate($tab, $num),
                'ref' => $this->trouverRef($tab, $num),
                'incident' => $this->trouverIncident($tab, $num)
            );
            $num++;
        }




        var_dump($catas);

        /**
         * Objects
         */
        $this->view("view", $catas);
    }

    function trouverDate($tab, $num) { // permmetra un classement par date 
        $nom = $tab["data"][$num]["fields"]["name"];


        $nomtab = explode(" - ", $nom);
        return $nomtab[1];
    }

    function trouverId($tab, $num) { // permmetra un classement par date 
        $id = $tab["data"][$num]["id"];


        return $id;
    }

    function trouverRef($tab, $num) { // permmetra un classement par date 
        $href = $tab["data"][$num]["href"];


        return $href;
    }

    function trouverNom($tab, $num) { // permmetra un classement par date 
        $nom = $tab["data"][$num]["fields"]["name"];

        if (strpos($nom, ":") === false) {
            $nomtab = explode(" - ", $nom);
        } else {
            $nomtab = explode(": ", $nomtab[0]);
        }

        return $nomtab[0];
    }

    function trouverIncident($tab, $num) { // permmetra un classement par date 
        $nom = $tab["data"][$num]["fields"]["name"];

        $nomtab = explode(" - ", $nom);
        $nomtab2 = explode(": ", $nomtab[0]);
        echo "<br>";
        if (isset($nomtab2[1])) {
            return $nomtab2[1];
        } else {
            return "valeur non définie";
        }
    }

}
