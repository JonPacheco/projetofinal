<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Cliente;

class ClienteController extends Controller {
    public function index(){
        $objCliente = new Cliente();
        $dados ['lista'] = $objCliente->lista();
        $dados ['view'] = "Cliente/index";
        $this->load("template",$dados);
    }
    public function edit($id){
        $objCliente = new Cliente();
        $dados["cliente"] = $objCliente->getCliente($id);
        $dados["view"] = "Cliente/create";
        //echo "<pre>";
       // print_r($dados);
        //exit;
  
        $this->load("template",$dados);


    }
    public function create(){
        $dados ['view'] = "Cliente/create";
        $this->load("template",$dados);
    }
    public function salvar(){
        $objCliente = new Cliente();
        $cliente = new \stdClass();

        $cliente->cliente = $_POST["cliente"];
        $cliente->cpf = $_POST["cpf"];
        $cliente->email   = $_POST["email"];
        $cliente->tel   = $_POST["tel"];
        $cliente->idcliente     =($_POST["idcliente"]) ? $_POST["idcliente"] : NULL;

        if($cliente->idcliente) {

            //cchamar método do objproduto
            $objCliente->editar($cliente);
           } else {
         $objCliente->inserir($cliente);
        
        }
        header("location:".URL_BASE."cliente");
    


    }
   
    public function excluir($id){
        $objCliente = new Cliente();
        $objCliente->excluir($id);
        header("location:".URL_BASE."cliente");

    }
}

