<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Servico;

class ServicoController extends Controller {
    public function index(){
        $objServ = new Servico();
        $dados ['lista'] = $objServ->lista();
        $dados ['view'] = "Servico/index";
        $this->load("template",$dados);
    }
    public function edit($id){
        $objServ = new Servico();
        $dados["servico"] = $objServ->getServ($id);
        $dados["view"] = "Servico/Create";
        //echo "<pre>";
        //print_r($dados);
        //exit;
  
        $this->load("template",$dados);


    }
    public function create(){
        $dados ['view'] = "Servico/create";
        $this->load("template",$dados);
    }
    public function salvar(){
        $objServ = new Servico();
        $serv = new \stdClass();

        $serv->serv = $_POST["serv"];
        $serv->valorhr = $_POST["valorhr"];
        $serv->usohr   = $_POST["usohr"];
        $serv->idserv     =($_POST["idserv"]) ? $_POST["idserv"] : NULL;

        if($serv->idserv) {

            //cchamar método do objproduto
            $objServ->editar($serv);
           } else {
         $objServ->inserir($serv);
        
        }
        header("location:".URL_BASE."servico");
    


    }
   
    public function excluir($id){
        $objServ = new Servico();
        $objServ->excluir($id);
        header("location:".URL_BASE."servico");

    }
}

