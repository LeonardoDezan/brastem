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

    public function subtrair(){
        $objOperacao = new Operacao;
        $a = $_POST["a"];
        $b = $_POST["b"];
        echo $objOperacao->subtrair($a, $b);
    }

    public function multiplicar(){
        $objOperacao = new Operacao;
        $a = $_POST["a"];
        $b = $_POST["b"];
        echo $objOperacao->multiplicar($a, $b);
    }

    public function dividir(){
        $objOperacao = new Operacao;
        $a = $_POST["a"];
        $b = $_POST["b"];
        echo $objOperacao->dividir($a, $b);
    }
}

?>