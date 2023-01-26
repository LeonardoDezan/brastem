<?php
namespace app\controllers;
use app\core\Controller;



class ClienteController extends Controller{
    public function index(){
        $dados = ["view"] = "lista_cliente";
        $this -> load("template", $dados);
    }
}

?>