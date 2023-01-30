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

    public function inserir($produtos){
        $sql = " INSERT INTO tb_produto SET
                codigo      =:codigo,
                produto     =:produto,
                qualidade   =:qualidade,
                estoque     =:estoque,
                cont        =:cont,
                preco       =:preco
                ";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":produto", $produtos->produto);
        $qry->bindValue(":codigo", $produtos->codigo);
        $qry->bindValue(":qualidade", $produtos->qualidade);
        $qry->bindValue(":estoque", $produtos->estoque);
        $qry->bindValue(":cont", $produtos->cont);
        $qry->bindValue(":preco", $produtos->preco);
        $qry->execute();
        return $this->db->lastInsertId();

        
    }
}



?>