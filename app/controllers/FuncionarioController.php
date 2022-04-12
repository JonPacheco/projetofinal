<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Funcionario;

class FuncionarioController extends Controller {
    public function index(){
        $objFunc = new Funcionario();
        $dados ['lista'] = $objFunc->lista();
        $dados ['view'] = "Funcionario/index";
        $this->load("template",$dados);
    }
    public function edit($id){
        $objFunc = new Funcionario();
        $dados["cliente"] = $objFunc->getFunc($id);
        $dados["view"] = "Funcionario/create";
        //echo "<pre>";
       // print_r($dados);
        //exit;
  
        $this->load("template",$dados);


    }
    public function create(){
        $dados ['view'] = "Funcionario/create";
        $this->load("template",$dados);
    }
    public function salvar(){
        $objFunc = new Funcionario();
        $func = new \stdClass();

        $func->func           = $_POST["func"];
        $func->cargo          = $_POST["cargo"];
        $func->salario        = $_POST["salario"];
        $func->dataadmissao   = $_POST["dataadmissao"];
        $func->idfunc         =($_POST["idfunc"]) ? $_POST["idfunc"] : NULL;

        if($func->idfunc) {

            //cchamar método do objproduto
            $objFunc->editar($func);
           } else {
         $objFunc->inserir($func);
        
        }
        header("location:".URL_BASE."funcionario");
    


    }
   
    public function excluir($id){
        $objFunc = new Funcionario();
        $objFunc->excluir($id);
        header("location:".URL_BASE."funcionario");

    }
}

