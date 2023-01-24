<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Operacao;

class CalculadoraController extends Controller{
    public function index(){
        $this->load("ViewCalculadora");
    }

    public function somar(){
        $objOperacao = new Operacao;
        $a = $_POST["a"];
        $b = $_POST["b"];
        echo $objOperacao->somar($a, $b);

    }

    public function subtrair($a, $b){
        $objOperacao = new Operacao;
        echo $objOperacao->subtrair($a, $b);
    }

    public function multiplicar($a, $b){
        $objOperacao = new Operacao;
        echo $objOperacao->multiplicar($a, $b);
    }

    public function dividir($a, $b=0){
        $objOperacao = new Operacao;
        echo $objOperacao->dividir($a, $b);
    }
}

?>