<?php
namespace app\controllers;
use app\core\Controller;



class ClientesController extends Controller{
    public function index(){
        $dados["view"] = "Clientes/lista_cliente";
        $this -> load("template", $dados);
    }

}

?>