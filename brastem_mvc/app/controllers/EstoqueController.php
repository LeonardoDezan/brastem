<?php 
namespace app\controllers;
use app\core\Controller;
use app\models\Estoque;
use app\models\Produtos;

class EstoqueController extends Controller{
    public function index(){
        $objEstoque = new Estoque();
        $dados["lista"] = $objEstoque->lista();
        $dados["view"] = "Estoque/Lista_Estoque";
        $this->load("template", $dados);
    }





}




?>