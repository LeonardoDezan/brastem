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
        $dados["lista"] = $objEntradas->lista();

        $dados["view"] = "Estoque/Entradas";
        $this->load("template", $dados);
    }

    public function salvar(){
        $objEntradas = new Entradas();
        $entradas = $_POST;
        $objEntradas->inserir($entradas);

        header("location:" . URL_BASE . "Entradas");

    }

}







?>