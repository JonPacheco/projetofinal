<?php
namespace app\models;
use app\core\Model;

class Login extends Model{
   
    public function lista(){
        $sql = "SELECT * FROM tblusuarios";
        $qry = $this->db->query($sql);
        return $qry->fetchAll(\PDO::FETCH_OBJ);

   }
}