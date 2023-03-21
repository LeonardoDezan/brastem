<?php 
namespace app\controllers;
use app\core\Controller;

class VendaController extends Controller{
    public function index(){
        $dados["view"] = "Vendas/Venda";
        $this->load("template", $dados);

    }
}


?>