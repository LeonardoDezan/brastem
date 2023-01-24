<?php
namespace app\models;

class Operacao{
    public function somar($a, $b){
        return $a + $b;
    }

    public function subtrair($a, $b){
        return $a - $b;
    }

    public function multiplicar($a, $b){
        return $a * $b;
    }

    public function dividir($a, $b){
        if ($b == 0){
        echo "Não é possível fazer a divisão por 0. Digite outro valor";
        }else{
            return $a / $b;
        }
    }
}

?>