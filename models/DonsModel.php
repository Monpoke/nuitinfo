<?php

class DonsModel extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @param $id
     * @param $value
     */
    public function insertPayment($id, $value)
    {

        $PDO = $this->getPDO();
        try {
            $sql = "INSERT INTO dons(id_sinistre, don, ip, dat) VALUES('" . intval($id) . "', '" . doubleval($value) . "', '" . $_SERVER['REMOTE_ADDR'] . "', '" . time() . "')";
            $PDO->exec($sql);
        } catch (Exception $e) {
            exit($e->getMessage());
        }
    }

}