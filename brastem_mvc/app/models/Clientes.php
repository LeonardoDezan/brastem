<?php
namespace app\models;

use app\core\Model;

class Clientes extends Model{
    public function lista(){
        // Listagem de CLientes
        $sql = "SELECT * FROM tb_clientes";
        $qry = $this->db->query($sql);
        return $qry->fetchAll(\PDO::FETCH_OBJ);
    }

    public function getCliente($id){
        $sql = "SELECT * FROM tb_clientes WHERE id_clientes=$id";
        $qry = $this->db->query($sql);
        return $qry->fetch(\PDO::FETCH_OBJ);
    }

    public function inserir($cliente){
        $sql = " INSERT INTO tb_clientes SET
                tipo                =:tipo,
                nome_cliente        =:nome_cliente,
                cnpj_cpf            =:cnpj_cpf,
                ie_rg               =:ie_rg,
                regime_tributario   =:regime_tributario,
                endereco            =:endereco,
                bairro              =:bairro,
                cidade              =:cidade,
                estado              =:estado,
                cep                 =:cep,
                email               =:email,
                telefone            =:telefone,
                contato_fone        =:contato_fone,
                celular             =:celular,
                contato_cel         =:contato_cel,
                obs                =:obs"
        ;

        $qry = $this->db->prepare($sql);
        $qry->bindValue(":tipo", $cliente->tipo);
        $qry->bindValue(":nome_cliente", $cliente->nome_cliente);
        $qry->bindValue(":cnpj_cpf", $cliente->cnpj_cpf);
        $qry->bindValue(":ie_rg", $cliente->ie_rg);
        $qry->bindValue(":regime_tributario", $cliente->regime_tributario);
        $qry->bindValue(":endereco", $cliente->endereco);
        $qry->bindValue(":bairro", $cliente->bairro);
        $qry->bindValue(":cidade", $cliente->cidade);
        $qry->bindValue(":estado", $cliente->estado);
        $qry->bindValue(":cep", $cliente->cep);
        $qry->bindValue(":email", $cliente->email);
        $qry->bindValue(":telefone", $cliente->telefone);
        $qry->bindValue(":contato_fone", $cliente->contato_fone);
        $qry->bindValue(":celular", $cliente->celular);
        $qry->bindValue(":contato_cel", $cliente->contato_cel);
        $qry->bindValue(":obs", $cliente->obs);
        $qry->execute();
        return $this->db->lastInsertId();


    }
}



?>
