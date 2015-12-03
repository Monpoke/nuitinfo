<?php

require_once 'core/includes.php';

require_once 'controllers/Index.php';


// Default controller
$conName = !empty($_GET['c']) ? $_GET['c'] : 'index';
$conName = ucfirst($conName);

// Default action
$conAction = !empty($_GET['a']) ? $_GET['a'] : 'home';


// file Controller
$controllerFile = ROOT . "/controllers/" . $conName . ".php";
if (is_file($controllerFile)) {
    require_once $controllerFile;
    $Controller = new $conName();

    $conAction .= "Action";
    if (method_exists($Controller, $conAction )) {

        // call method action
        $Controller->$conAction();

    } else {
        exit("Page not found...");
    }
} else {

    exit("Controller not found...");
}