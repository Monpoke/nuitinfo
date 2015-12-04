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


define("SQL_HOST", "mysql:host=10.13.11.96;dbname=nuitinfo");
define("SQL_USER", "nuitinfo");
define("SQL_PASSWORD", "nuitinfo");

/**
 * Includes Controller
 */
require_once ROOT . "/controllers/Controller.php";
require_once ROOT . "/models/Model.php";
require_once ROOT . "/models/Product.php";
require_once ROOT . "/models/ProductCategory.php";
require_once ROOT . "/models/Disaster.php";

require_once ROOT . "/api/cdiscount.php";