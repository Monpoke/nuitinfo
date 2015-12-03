<?php

/**
 * Root path, don't touch.
 */
define('ROOT', realpath(__DIR__ . "/.."));


require_once "functions.php";

/**
 * Include Twig
 */
require_once ROOT . "/libs/Twig/Autoloader.php";
Twig_Autoloader::register(true);



/**
 * Includes Controller
 */
require_once ROOT . "/controllers/Controller.php";