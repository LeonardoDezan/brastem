<?php
namespace app\controllers;
use app\core\Controller;

class HomeController extends Controller{
    
   public function index(){
      // var_dump($_SESSION["usuarioLogado"]);
        $dados["view"] = "home";
       $this -> load("template", $dados);
   } 

}
