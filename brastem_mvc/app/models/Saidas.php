<?php 
namespace app\models;
use app\core\Model;

class Saidas extends Model{
    public function lista(){
        // Listagem de produtos
        $sql = "SELECT * FROM tb_saida e, tb_produto p where e.id_produto = p.id_produto";
        $qry = $this->db->query($sql);
        return $qry->fetchAll(\PDO::FETCH_OBJ);
    }

    public function getSaidas($id){
        $sql = "SELECT * FROM tb_saida where id_saida = $id";
        $qry = $this->db->query($sql);
        return $qry->fetch(\PDO::FETCH_OBJ);
    }


    public function inserir($dados){
        $sql = " INSERT INTO tb_saida SET  
                data_saida       =:data_saida,
                quantidade       =:quantidade,
                hora_saida       =:hora_saida,
                id_produto       =:id_produto,
                tipo_saida       =:tipo_saida   
                ";
        $qry = $this->db->prepare($sql);      
        $qry->bindValue(":data_saida", date("Y-m-d"));
        $qry->bindValue(":quantidade", $dados["quantidade"]);
        $qry->bindValue(":hora_saida", date("H:i:s"));
        $qry->bindValue(":id_produto", $dados["id_produto"]);
        $qry->bindValue(":tipo_saida", $dados["tipo_saida"]);
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

    public function excluir($id){
        $sql = "DELETE FROM tb_produto WHERE id_produto = $id";
        $qry = $this->db->query($sql);
    }

}




?>