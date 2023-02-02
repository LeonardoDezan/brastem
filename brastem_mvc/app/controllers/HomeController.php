<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Login;

class HomeController extends Controller{
    
   public function index(){
      // verificação de login
      $objLogin = new Login();
      $GLOBALS["idusuario"] = $objLogin->retornaIdUsuario();
      if(!$GLOBALS["idusuario"]){
         header("location:" . URL_BASE . "Login");
      }
      

        $dados["view"] = "home";
       $this -> load("template", $dados);
   } 

}
