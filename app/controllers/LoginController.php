<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Login;

class LoginController extends Controller{
    public function index(){
        $objLogin = new Login();
        $dados ['lista'] = $objLogin->lista();
        $dados ['view']  = "Login/index";
        $this->load("template",$dados); 
    }
}
