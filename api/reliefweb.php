<?php

require_once __DIR__ . "/../core/includes.php";
$file = get_data("http://api.rwlabs.org/v1/disasters/");
echo($file);
$tab = json_decode($file, true);
//var_dump($tab);
//var_dump($tab["href"])

$num = 1;
echo trouverDate($tab, $num);
echo trouverId($tab, $num);
echo trouverRef($tab, $num);
echo trouverNom($tab, $num);
echo trouverIncident($tab, $num);

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
            $tab=trouverRef($tab, $num);
            
        }
    }
    function trouverDescription($tab, $num){
       $file=trouverRef($tab, $num);
       $tab2 = json_decode($file, true);
       return $tab2["data"]["fields"]["description"];
    }
    function get_disater($tab, $num){
        return new Disaster(trouverId($tab, $num), trouverNom($tab, $num), trouverIncident($tab, $num), trouverDate($tab, $num), trouverDescription($tab, $num), null, null, null, null);
            
    
    }

