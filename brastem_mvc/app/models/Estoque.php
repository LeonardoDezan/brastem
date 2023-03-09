<?php
namespace app\models;

use app\core\Model;

class Estoque extends Model{

    public function lista(){    
        $sql = "SELECT * FROM tb_produto where estoque >=1";
        $qry = $this->db->query($sql);
        return $qry->fetchAll(\PDO::FETCH_OBJ);  
    }


}



?>
