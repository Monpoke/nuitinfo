<?php

abstract class Model {

    protected static $PDO;

    public function __construct()
    {
        if(self::$PDO===null){
            try {

                self::$PDO = new PDO(SQL_HOST, SQL_USER, SQL_PASSWORD);

            } catch(Exception $e){
                exit("Message: " . $e);
            }
        }
    }

    /**
     * @return PDO
     */
    public static function getPDO()
    {
        return self::$PDO;
    }

}