<?php 
namespace app\controllers;
use app\core\Controller;
use app\models\Entradas;
use app\models\Produtos;


class EntradasController extends Controller{
    public function index(){
        $objProdutos = new Produtos();
        $dados["produtos"] = $objProdutos->lista();
        $objEntradas = new Entradas();
        $dados["entradas"] = $objEntradas->lista();

        $dados["view"] = "Estoque/Entradas";
        $this->load("template", $dados);
    }

    public function salvar(){
        $objProdutos = new Produtos();
        $objEntradas = new Entradas();
        $entradas = $_POST;
        $id = $objEntradas->inserir($entradas);
        if($id){
            $objProdutos->AtualizarEstoque($_POST["id_produto"], $_POST["quantidade"]);
        }

        header("location:" . URL_BASE . "Entradas");

    }

}







?>