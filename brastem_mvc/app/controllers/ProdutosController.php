<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Produtos;

class ProdutosController extends Controller{
    public function index(){
        $objProdutos = new Produtos;
        $dados["lista"] = $objProdutos->lista();
        $dados["view"] = "Produtos/lista_produto";
        $this->load("template", $dados);
    }
}




?>