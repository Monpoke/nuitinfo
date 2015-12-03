<?php

/**
 * Root path, don't touch.
 */
define('ROOT', realpath(__DIR__ . "/.."));


/**
 * Include Twig
 */
require_once ROOT . "/libs/Twig/Autoloader.php";
Twig_Autoloader::register(true);



/**
 * Includes Controller
 */
require_once ROOT . "/controllers/Controller.php";