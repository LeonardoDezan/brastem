<?php 
namespace app\controllers;
use app\core\Controller;
use app\models\Venda;

class VendaController extends Controller{
    public function index(){
        // $objVenda = new Venda;
        // $venda = $objVenda->getVendaNaoFinalizada();
        // if (!$venda){
        //    //criar nova venda
        //    $objVenda->inserir(); 
        // }


        $dados["view"] = "Vendas/Venda";
        $this->load("template", $dados);

    }
}


?>