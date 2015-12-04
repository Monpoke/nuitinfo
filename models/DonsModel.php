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


    public function getSumEvent()
    {
        $PDO = $this->getPDO();
        try {
            $p = $PDO->prepare("SELECT SUM(don) AS su FROM dons WHERE id_sinistre=:id LIMIT 1");
            $p->execute(array(
                ':id' => (int)$id
            ));
            $row = $p->fetch();
            return (double)$row['su'];
        } catch (Exception $e) {

        }
        return 0;
    }

    public function getSumEvents()
    {
        $PDO = $this->getPDO();
        try {
            $p = $PDO->prepare("SELECT id_sinistre, SUM(don) AS su FROM dons GROUP BY id_sinistre");
            $p->execute();

            $events = array();

            while($rs=$p->fetch(PDO::FETCH_ASSOC)){
                $events[$rs['id_sinistre']] = $rs['su'];
            }

            return $events;
        } catch (Exception $e) {

        }
        return 0;
    }
}