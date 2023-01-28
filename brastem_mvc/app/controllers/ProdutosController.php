<?php
namespace app\controllers;
use app\core\Controller;

class ProdutosController extends Controller{
    public function index(){
        $dados["view"] = "Produtos/lista_produto";
        $this->load("template", $dados);
    }
}




?>