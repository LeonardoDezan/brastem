<?php
namespace app\models;

use app\core\Model;

class Clientes extends Model{
    public function lista(){
        // Listagem de CLientes
        $sql = "SELECT * FROM `tb_clientes`";
        $qry = $this->db->query($sql);
        return $qry->fetchAll(\PDO::FETCH_OBJ);
    }

    
}



?>
