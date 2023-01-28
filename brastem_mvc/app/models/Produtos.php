<?php
namespace app\models;

use app\core\Model;

class Produtos extends Model{
    public function lista(){
        // Listagem de produtos
        $sql = "SELECT * FROM tb_produto";
        $qry = $this->db->query($sql);
        return $qry->fetchAll(\PDO::FETCH_OBJ);
    }

}



?>