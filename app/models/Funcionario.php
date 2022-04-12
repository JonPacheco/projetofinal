<?php

namespace app\models;
use app\core\Model;

class Funcionario extends Model {

    public function lista(){
         $sql = "SELECT * FROM tblfuncionarios";
         $qry = $this->db->query($sql);
         return $qry->fetchAll(\PDO::FETCH_OBJ);

    }
    public function inserir($func){
        $sql = "INSERT INTO tblfuncionarios SET
        func              =:func,
        cargo             =:cargo,
        salario           =:salario,
        dataadmissao      =:dataadmissao
        ";
        $qry=$this->db->prepare($sql);

        $qry->bindValue(":func",$func->func);
        $qry->bindValue(":cargo",$func->cargo);
        $qry->bindValue(":salario",$func->salario);
        $qry->bindValue(":dataadmissao",$func->dataadmissao);
        $qry->execute();

        return $this->db->lastInsertId();
    }
    public function getFunc($id){
        $sql = "SELECT * FROM tblfuncionarios where idfunc = $id ";
        $qry = $this->db->query($sql);
        return $qry->fetch(\PDO::FETCH_OBJ);

    }
    public function editar($func){
        $sql = "UPDATE tblfuncionarios SET
        func              =:func,
        cargo             =:cargo,
        salario           =:salario,
        dataadmissao      =:dataadmissao
        where idfunc = :id
        ";
        $qry=$this->db->prepare($sql);

        $qry->bindValue(":func",$func->func);
        $qry->bindValue(":cargo",$func->cargo);
        $qry->bindValue(":salario",$func->salario);
        $qry->bindValue(":dataadmissao",$func->dataadmissao);
        $qry->bindValue(":id",$func->idfunc);
        $qry->execute();

        return $func->idfunc;
    }
    public function excluir($id){
        $sql = "DELETE FROM tblfuncionarios where idfunc = $id";
        $qry = $this->db->query($sql);
    }

}