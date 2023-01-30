<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Clientes;



class ClientesController extends Controller{
    public function index(){
        $objClientes = new Clientes();
        $dados["lista"] = $objClientes->lista();
        $dados["view"] = "Clientes/lista_cliente";
        $this -> load("template", $dados);
    }

    public function create(){
        $dados["view"] = "Clientes/cadastro_cliente";
        $this->load("template", $dados);
    }

    public function salvar(){
        print_r($_POST);
    }
}

?>