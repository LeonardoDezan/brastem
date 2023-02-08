<?php 
namespace app\controllers;
use app\core\Controller;



class EntradasController extends Controller{
    public function index(){
        $dados["view"] = "Estoque/Entradas";
        $this->load("template", $dados);
    }
}







?>