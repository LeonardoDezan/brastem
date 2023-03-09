<?php
namespace app\controllers;

use app\core\Controller;
use app\core\Model;
use app\models\Login;

class LoginController extends Controller{
    public function index(){
        $dados['view'] = "login";
        $this->load("login", $dados);
    }

    public function logar(){
        $objLogin = new Login();
        $cpf = $_POST["cpf"];
        $senha = $_POST["senha"];
        $usuario = $objLogin->logar($cpf, $senha);
        if($usuario){
            $_SESSION[SESSION_LOGIN] = $usuario;
            header("location:" . URL_BASE);
        }else{
            unset($_SESSION[SESSION_LOGIN]);            
            echo "<script>alert('usuario ou senha nao encontrados')</script>";
            $dados['view'] = "login";
            $this->load("login", $dados);         
        } 

    }

    public function logoff(){
        unset($_SESSION[SESSION_LOGIN]);
        header("location:" . URL_BASE . "Login");
    }

}



?>