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

    public function getProduto($id){
        $sql = "SELECT * FROM tb_produto where id_produto = $id";
        $qry = $this->db->query($sql);
        return $qry->fetch(\PDO::FETCH_OBJ);
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

    public function editar($produtos){
        $sql = "UPDATE tb_produto SET
                codigo      =:codigo,
                produto     =:produto,
                qualidade   =:qualidade,
                estoque     =:estoque,
                cont        =:cont,
                preco       =:preco
                WHERE id_produto =:id_produto";

        $qry = $this->db->prepare($sql);
        $qry->bindValue(":produto", $produtos->produto);
        $qry->bindValue(":codigo", $produtos->codigo);
        $qry->bindValue(":qualidade", $produtos->qualidade);
        $qry->bindValue(":estoque", $produtos->estoque);
        $qry->bindValue(":cont", $produtos->cont);
        $qry->bindValue(":preco", $produtos->preco);
        $qry->bindValue(":id_produto", $produtos->id_produto);
        $qry->execute();
        return $produtos->id_produto;     

    }


}



?>