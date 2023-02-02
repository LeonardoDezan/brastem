<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Clientes;
use app\models\Login;



class ClientesController extends Controller{

    public function __construct(){
        // verificação de login
        $objLogin = new Login();
        $GLOBALS["idusuario"] = $objLogin->retornaIdUsuario();
        if(!$GLOBALS["idusuario"]){
            header("location:" . URL_BASE . "Login");
        }
    }

    public function index(){

        

        $objClientes = new Clientes();
        $dados["lista"] = $objClientes->lista();
        $dados["view"] = "Clientes/lista_cliente";
        $this -> load("template", $dados);
    }

    public function create(){
        $dados["view"] = "Clientes/cadastro_cliente";
        $this->load("template", $dados);
    }

    public function salvar(){
        $objClientes = new Clientes();    

        $cliente = new \stdClass;
        $cliente->tipo              =$_POST['tipo'];
        $cliente->nome_cliente      =strtoupper($_POST['nome_cliente']); 
        $cliente->cnpj_cpf          =$_POST['cnpj_cpf'];
        $cliente->ie_rg             =$_POST['ie_rg'];
        $cliente->regime_tributario =$_POST['regime_tributario'];
        $cliente->endereco          =strtoupper($_POST['endereco']); 
        $cliente->bairro            =strtoupper($_POST['bairro']); 
        $cliente->cidade            =strtoupper($_POST['cidade']); 
        $cliente->estado            =strtoupper($_POST['estado']); 
        $cliente->cep               =$_POST['cep'];
        $cliente->email             =$_POST['email'];
        $cliente->telefone          =$_POST['telefone'];
        $cliente->contato_fone      =strtoupper($_POST['contato_fone']); 
        $cliente->celular           =$_POST['celular'];
        $cliente->contato_cel       =strtoupper($_POST['contato_cel']); 
        $cliente->obs               =strtoupper($_POST['obs']);
        $cliente->id_clientes       =($_POST["id_clientes"]) ? $_POST["id_clientes"] : null;
        if (!$cliente->id_clientes){
            $objClientes->inserir($cliente);
        }else{
            $objClientes->editar($cliente);
        }


        header("location:" . URL_BASE . "Clientes");
    }

    public function edit($id){
        $objClientes = new Clientes;
        $dados["cliente"] = $objClientes->getCliente($id);
        $dados["view"] = "Clientes/cadastro_cliente";
        $this->load("template", $dados);

    }

    public function excluir($id){
        $objClientes = new Clientes;
        $objClientes->excluir($id);
        header("location:" . URL_BASE . "Clientes"); 
    }

}

?>