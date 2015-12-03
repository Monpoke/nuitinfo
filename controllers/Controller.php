<?php

abstract class Controller
{

    /**
     * @var Twig_Environment
     */
    protected static $twig = null;
    protected $contentType = "text/html;charset=utf-8";

    /**
     * Controller constructor.
     */
    public function __construct()
    {
        $this->initSession();
        if (self::$twig === null) {
            $this->initTwig();
        }
    }


    /**
     * Render a view.
     * @param $file
     * @param array $vars
     */
    protected function view($file, array $vars = array())
    {
        // Header
        header("Content-type:" . $this->contentType);
        echo self::$twig->render($file . ".twig", $vars);
    }

    /**
     * Init Twig
     */
    private function initTwig()
    {
        $loader = new Twig_Loader_Filesystem(ROOT . "/views");
        self::$twig = new Twig_Environment($loader, array(
            'cache' => false,//cache disabled
        ));
    }

    /**
     * Init session.
     */
    private function initSession()
    {
        if (!headers_sent()) {
            session_start();
        }
    }
}

