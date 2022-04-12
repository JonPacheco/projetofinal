<?php

namespace app\models;
use app\core\Model;

class Produto extends Model {

    public function lista(){
         $sql = "SELECT * FROM tblprodutos";
         $qry = $this->db->query($sql);
         return $qry->fetchAll(\PDO::FETCH_OBJ);

    }
    public function inserir($produto){
        $sql = "INSERT INTO tblprodutos SET
        produto     =:produto,
        precohr     =:precohr,
        usohr       =:usohr
        ";
        $qry=$this->db->prepare($sql);

        $qry->bindValue(":produto",$produto->produto);
        $qry->bindValue(":precohr",$produto->precohr);
        $qry->bindValue(":usohr",$produto->usohr);
        $qry->execute();

        return $this->db->lastInsertId();
    }
    public function getProduto($id){
        $sql = "SELECT * FROM tblprodutos where idproduto = $id ";
        $qry = $this->db->query($sql);
        return $qry->fetch(\PDO::FETCH_OBJ);

    }
    public function editar($produto){
        $sql = "UPDATE tblprodutos SET
        produto     =:produto,
        precohr     =:precohr,
        usohr       =:usohr
        where idproduto = :id
        ";
        $qry=$this->db->prepare($sql);

        $qry->bindValue(":produto",$produto->produto);
        $qry->bindValue(":precohr",$produto->precohr);
        $qry->bindValue(":usohr",$produto->usohr);
        $qry->bindValue(":id",$produto->idproduto);
        $qry->execute();

        return $produto->idproduto;
    }
    public function excluir($id){
        $sql = "DELETE FROM tblprodutos where idproduto = $id";
        $qry = $this->db->query($sql);
    }

}