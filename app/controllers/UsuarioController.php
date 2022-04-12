<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Usuario;

class UsuarioController extends Controller {
    public function index(){
        $objUsuario = new Usuario();
        $dados ['lista'] = $objUsuario->lista();
        $dados ['view'] = "Usuario/index";
        $this->load("template",$dados);
    }
    public function edit($id){
        $objUsuario = new Usuario();
        $dados["usuario"] = $objUsuario->getUsuario($id);
        $dados["view"] = "Usuario/create";
        //echo "<pre>";
        //print_r($dados);
       // exit;
  
        $this->load("template",$dados);


    }
    public function create(){
        $dados ['view'] = "Usuario/create";
        $this->load("template",$dados);
    }
    public function salvar(){
        $objUsuario = new Usuario();
        $usuario = new \stdClass();

        $usuario->nome = $_POST["nome"];
        $usuario->email = $_POST["email"];
        $usuario->senha   = $_POST["senha"];
        $usuario->idsituacao = $_POST["idsituacao"];
        $usuario->idnivelacesso = $_POST ["idnivelacesso"];
        $usuario->criado = $_POST["criado"];
        $usuario->modificado = $_POST["modificado"];
        $usuario->idusuario     =($_POST["idusuario"]) ? $_POST["idusuario"] : NULL;

        if($usuario->idusuario) {

            //cchamar método do objproduto
            $objUsuario->editar($usuario);
           } else {
         $objUsuario->inserir($usuario);
        
        }
        header("location:".URL_BASE."usuario");
    


    }
   
    public function excluir($id){
        $objUsuario = new Usuario();
        $objUsuario->excluir($id);
        header("location:".URL_BASE."usuario");

    }
}

