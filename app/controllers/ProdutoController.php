<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Produto;

class ProdutoController extends Controller {
    public function index(){
        $objProduto = new Produto();
        $dados ['lista'] = $objProduto->lista();
        $dados ['view'] = "Produto/index";
        $this->load("template",$dados);
    }
    public function edit($id){
        $objProduto = new Produto();
        $dados["produto"] = $objProduto->getproduto($id);
        $dados["view"] = "Produto/Create";
        //echo "<pre>";
        //print_r($dados);
        //exit;
  
        $this->load("template",$dados);


    }
    public function create(){
        $dados ['view'] = "Produto/create";
        $this->load("template",$dados);
    }
    public function salvar(){
        $objProduto = new Produto();
        $produto = new \stdClass();

        $produto->produto = $_POST["produto"];
        $produto->precohr = $_POST["precohr"];
        $produto->usohr   = $_POST["usohr"];
        $produto->idproduto     =($_POST["idproduto"]) ? $_POST["idproduto"] : NULL;

        if($produto->idproduto) {

            //cchamar método do objproduto
            $objProduto->editar($produto);
           } else {
         $objProduto->inserir($produto);
        
        }
        header("location:".URL_BASE."produto");
    


    }
   
    public function excluir($id){
        $objProduto = new Produto();
        $objProduto->excluir($id);
        header("location:".URL_BASE."produto");

    }
}

