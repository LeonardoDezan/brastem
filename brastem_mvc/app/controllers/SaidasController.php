<?php 
namespace app\controllers;
use app\core\Controller;
use app\models\Saidas;
use app\models\Produtos;


class SaidasController extends Controller{
    public function index(){
        $objProdutos = new Produtos();
        $dados["produtos"] = $objProdutos->lista();
        $objSaidas = new Saidas();
        $dados["saidas"] = $objSaidas->lista();

        $dados["view"] = "Estoque/Saidas";
        $this->load("template", $dados);
    }

    public function salvar(){
        $objProdutos = new Produtos();
        $objSaidas = new Saidas();
        $saidas = $_POST;
        $id = $objSaidas->inserir($saidas);
        if($id){
            $objProdutos->AtualizarEstoque($_POST["id_produto"], -$_POST["quantidade"]);
        }

        header("location:" . URL_BASE . "Saidas");

    }

}







?>