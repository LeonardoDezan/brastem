<?php 
namespace app\controllers;
use app\core\Controller;

class EstoqueController extends Controller{
    public function index(){
        $dados["view"] = "Estoque/Estoque";
        $this->load("template", $dados);
    }



}




?>