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

    public function create(){
        $dados["view"] = "Produtos/cadastro_produto";
        $this->load("template", $dados);
    }

    public function salvar(){
        $objProdutos = new Produtos;

        $produtos = new \stdClass();
        $produtos->produto = strtoupper($_POST['produto']);  
        $produtos->codigo = strtoupper($_POST['codigo']);
        $produtos->qualidade = strtoupper($_POST['qualidade']);
        $produtos->estoque = $_POST['estoque'];
        $produtos->cont = $_POST['cont'];
        $produtos->preco = $_POST['preco'];

        $objProdutos->inserir($produtos);

        header("location:" . URL_BASE . "Produtos");

    }

    public function edit($id){
        $objProdutos = new Produtos();
        $dados["produtos"] = $objProdutos->getProduto($id);
        $dados["view"] = "Produtos/cadastro_produto";
        $this->load("template", $dados);
    }

}




?>