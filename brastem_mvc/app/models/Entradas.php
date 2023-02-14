<?php 
namespace app\models;

use app\core\Model;

class Entradas extends Model{
    public function lista(){
        // Listagem de produtos
        $sql = "SELECT * FROM tb_entrada";
        $qry = $this->db->query($sql);
        return $qry->fetchAll(\PDO::FETCH_OBJ);
    }

    public function getEntradas($id){
        $sql = "SELECT * FROM tb_entrada where id_entrada = $id";
        $qry = $this->db->query($sql);
        return $qry->fetch(\PDO::FETCH_OBJ);
    }


    public function inserir($entradas){
        $sql = " INSERT INTO tb_entrada SET
                data_entrada       =:data_entrada,
                valor_entrada      =:valor_entrada,
                quantidade         =:quantidade,
                id_produto         =:id_produto,
                id_clientes        =:id_clientes,
                hora_entrada       =:hora_entrada,
                subtotal_entrada   =:subtotal_entrada
                ";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":data_entrada", date("Y-m-d"));
        $qry->bindValue(":valor_entrada", $entradas->valor_entrada);
        $qry->bindValue(":quantidade", $entradas->quantidade);
        $qry->bindValue(":id_produto", $entradas->id_produto);
        $qry->bindValue(":id_clientes", $entradas->id_clientes);
        $qry->bindValue(":hora_entrada", date("H:i:s"));
        $qry->bindValue(":subtotal_entrada", $entradas->valor_entrada * $entradas->quantidade );
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