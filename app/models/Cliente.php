<?php

namespace app\models;
use app\core\Model;

class Cliente extends Model {

    public function lista(){
         $sql = "SELECT * FROM tblclientes";
         $qry = $this->db->query($sql);
         return $qry->fetchAll(\PDO::FETCH_OBJ);

    }
    public function inserir($cliente){
        $sql = "INSERT INTO tblclientes SET
        cliente     =:cliente,
        cpf         =:cpf,
        email       =:email,
        tel         =:tel
        ";
        $qry=$this->db->prepare($sql);

        $qry->bindValue(":cliente",$cliente->cliente);
        $qry->bindValue(":cpf",$cliente->cpf);
        $qry->bindValue(":email",$cliente->email);
        $qry->bindValue(":tel",$cliente->tel);
        $qry->execute();

        return $this->db->lastInsertId();
    }
    public function getCliente($id){
        $sql = "SELECT * FROM tblclientes where idcliente = $id ";
        $qry = $this->db->query($sql);
        return $qry->fetch(\PDO::FETCH_OBJ);

    }
    public function editar($cliente){
        $sql = "UPDATE tblclientes SET
        cliente     =:cliente,
        cpf         =:cpf,
        email       =:email,
        tel         =:tel
        where idcliente = :id
        ";
        $qry=$this->db->prepare($sql);

        $qry->bindValue(":cliente",$cliente->cliente);
        $qry->bindValue(":cpf",$cliente->cpf);
        $qry->bindValue(":email",$cliente->email);
        $qry->bindValue(":tel",$cliente->tel);
        $qry->bindValue(":id",$cliente->idcliente);
       
        $qry->execute();

        return $cliente->idcliente;
    }
    public function excluir($id){
        $sql = "DELETE FROM tblclientes where idcliente = $id";
        $qry = $this->db->query($sql);
    }

}