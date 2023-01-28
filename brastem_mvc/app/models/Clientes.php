<?php
namespace app\models;

use app\core\Model;

class Clientes extends Model{
    public function lista(){
        $sql = "SELECT * FROM `tb_clientes`";
        $qry = $this->db->query($sql);
        return $qry->fetchAll(\PDO::FETCH_OBJ);
    }
}



?>
