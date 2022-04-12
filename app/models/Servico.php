<?php
namespace app\models;
use app\core\Model;

class Servico extends Model {

    public function lista(){
         $sql = "SELECT * FROM tblservicos";
         $qry = $this->db->query($sql);
         return $qry->fetchAll(\PDO::FETCH_OBJ);

    }
    public function inserir($serv){
        $sql = "INSERT INTO tblservicos SET
        serv        =:serv,
        valorhr     =:valorhr,
        usohr       =:usohr
        ";
        $qry=$this->db->prepare($sql);

        $qry->bindValue(":serv",$serv->serv);
        $qry->bindValue(":valorhr",$serv->valorhr);
        $qry->bindValue(":usohr",$serv->usohr);
        $qry->execute();

        return $this->db->lastInsertId();
    }
    public function getServ($id){
        $sql = "SELECT * FROM tblservicos where idserv = $id ";
        $qry = $this->db->query($sql);
        return $qry->fetch(\PDO::FETCH_OBJ);

    }
    public function editar($serv){
        $sql = "UPDATE tblservicos SET
        serv        =:serv,
        valorhr     =:valorhr,
        usohr       =:usohr
        where idserv = :id
        ";
        $qry=$this->db->prepare($sql);

        $qry->bindValue(":serv",$serv->serv);
        $qry->bindValue(":valorhr",$serv->valorhr);
        $qry->bindValue(":usohr",$serv->usohr);
        $qry->bindValue(":id",$serv->idserv);
        $qry->execute();

        return $serv->idserv;
    }
    public function excluir($id){
        $sql = "DELETE FROM tblservicos where idserv = $id";
        $qry = $this->db->query($sql);
    }

}