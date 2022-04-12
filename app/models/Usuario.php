<?php

namespace app\models;
use app\core\Model;

class Usuario extends Model {

    public function lista(){
         $sql = "SELECT * FROM tblusuarios";
         $qry = $this->db->query($sql);
         return $qry->fetchAll(\PDO::FETCH_OBJ);

    }
    public function inserir($usuario){
        $sql = "INSERT INTO tblusuarios SET
        nome            =:nome,
        email           =:email,
        senha           =:senha,
        idsituacao      =:idsituacao,
        idnivelacesso   =:idnivelacesso,
        criado          =:criado,
        modificado      =:modificado
        ";
        $qry=$this->db->prepare($sql);

        $qry->bindValue(":nome",$usuario->nome);
        $qry->bindValue(":email",$usuario->email);
        $qry->bindValue(":senha",$usuario->senha);
        $qry->bindValue(":idsituacao",$usuario->idsituacao);
        $qry->bindValue(":idnivelacesso",$usuario->idnivelacesso);
        $qry->bindValue(":criado",$usuario->criado);
        $qry->bindValue(":modificado",$usuario->modificado);
        $qry->execute();

        return $this->db->lastInsertId();
    }
    public function getUsuario($id){
        $sql = "SELECT * FROM tblusuarios where idusuario = $id ";
        $qry = $this->db->query($sql);
        return $qry->fetch(\PDO::FETCH_OBJ);

    }
    public function editar($usuario){
        $sql = "UPDATE tblusuarios SET
        nome             =:nome,
        email            =:email,
        senha            =:senha,
        idsituacao       =:idsituacao,
        idnivelacesso    =:idnivelacesso,
        criado           =:criado,
        modificado       =:modificado
        where idusuario = :id
        ";
        $qry=$this->db->prepare($sql);
        $qry->bindValue(":nome",$usuario->nome);
        $qry->bindValue(":email",$usuario->email);
        $qry->bindValue(":senha",$usuario->senha);
        $qry->bindValue(":idsituacao",$usuario->idsituacao);
        $qry->bindValue(":idnivelacesso",$usuario->idnivelacesso);
        $qry->bindValue(":criado",$usuario->criado);
        $qry->bindValue(":modificado",$usuario->modificado);
        $qry->execute();

        return $usuario->idusuario;
    }
    public function excluir($id){
        $sql = "DELETE FROM tblusuarios where idusuario = $id";
        $qry = $this->db->query($sql);
    }

}