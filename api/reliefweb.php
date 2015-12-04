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
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    // echo $nom;
    echo "<br>";
    echo "<br>";
    $nomtab = explode(" - ", $nom);
    return $nomtab[1];
}

function trouverId($tab, $num) { // permmetra un classement par date 
    $id = $tab["data"][$num]["id"];
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    // echo $id;
    echo "<br>";
    echo "<br>";

    return $id;
}

function trouverRef($tab, $num) { // permmetra un classement par date 
    $href = $tab["data"][$num]["href"];
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    // echo $id;
    echo "<br>";
    echo "<br>";

    return $href;
}

function trouverNom($tab, $num) { // permmetra un classement par date 
    $nom = $tab["data"][$num]["fields"]["name"];
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    $nomtab = explode(" - ", $nom);
    $nomtab2 = explode(": ", $nomtab[0]);
    echo "<br>";
    echo "<br>";

    return $nomtab2[0];
}

function trouverIncident($tab, $num) { // permmetra un classement par date 
    $nom = $tab["data"][$num]["fields"]["name"];
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    $nomtab = explode(" - ", $nom);
    $nomtab2 = explode(": ", $nomtab[0]);
    echo "<br>";
    echo "<br>";

    return $nomtab2[1];
}
