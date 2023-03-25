<?php 
namespace app\models;
use app\core\Model;

class Venda extends Model{
    public function lista(){
        // Listagem de produtos
        $sql = "SELECT * FROM tb_venda v, tb_cliente c where v.id_venda = c.id_cliente";
        $qry = $this->db->query($sql);
        return $qry->fetchAll(\PDO::FETCH_OBJ);        

    }
}


?>