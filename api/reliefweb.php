<?php

require_once __DIR__ . "/../core/includes.php";
$file = get_data("http://api.rwlabs.org/v1/disasters/");
$data = json_decode($file, true);

function getDescription($ref) {
    $file = get_data("http://api.rwlabs.org/v1/disasters/".$ref);
    $data = json_decode($file, true);
    return $data["data"]["fields"]["description"];
}

function getDisaster($id) {
    global $data;
    $name = $data["data"][$id]["fields"]["name"];
    return new Disaster($data["data"][$id]["id"], explode(": ", $name)[0], explode(" - ", explode(": ", $name)[1])[0], explode(" - ", $name)[1], getDescription($data["data"][$id]["id"]), null, null, 0, 0);
}

function getDisasters() {
    global $data;
    $disasters = array();
    for ($i = 0; $i < $data["count"]; $i++) {
        $disasters[] = getDisaster($i);
    }
    return $disasters;
}
