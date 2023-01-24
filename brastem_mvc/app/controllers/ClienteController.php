<?php
namespace app\controllers;
use app\core\Controller;



class ClienteController extends Controller{
    public function index(){
        $this -> load("cadastro_cliente");
    }
}

?>