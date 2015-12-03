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


define("SQL_HOST", "mysql:host=10.13.11.96;dbname=nuitinfo");
define("SQL_USER", "nuitinfo");
define("SQL_PASSWORD", "nuitinfo");

/**
 * Includes Controller
 */
require_once ROOT . "/controllers/Controller.php";
require_once ROOT . "/models/Model.php";