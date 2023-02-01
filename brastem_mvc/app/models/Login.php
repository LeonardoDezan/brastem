<?php
namespace app\models;

use app\core\Model;

class Login extends Model{
    public function logar($cpf, $senha){
        // Listagem de produtos
        $sql = "SELECT * FROM tb_usuario where cpf =:cpf AND senha =:senha";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":cpf", $cpf);
        $qry->bindValue(":senha", $senha);
        $qry->execute();
        return $qry->fetch(\PDO::FETCH_ASSOC);
    }

}



?>