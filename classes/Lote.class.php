<?php
require_once('Banco.class.php');

class Lote{
    public $id;
    public $cod_lote;
    public $id_produto;
    public $id_fornecedor;
    public $validade;
    public $quantidade;
    public $observacao;
    public $codigo;




 public function Cadastrar(){
    $sql = "INSERT INTO lote(cod_lote, id_produto, id_fornecedor, validade, quantidade, observacao) VALUE(?,?,?,?,?,?)";
    //Trabalhar com o banco:
    //Conectando:
    $banco = Banco :: conectar();
    //Transformar a string em comando sql:
    $comando = $banco->prepare($sql);
    //Executar e substituit os corngas (?):
    $comando->execute(array($this->cod_lote,$this->id_produto, $this->id_fornecedor,$this->validade, $this->quantidade,$this->observacao));
    //Desconectar do banco:
    Banco::desconectar();
 }


 public function Listar(){
   //Copiei do listar

   $banco = Banco::conectar();
       $sql = "SELECT * FROM lote";
       $comando = $banco->prepare($sql);

       $comando->execute();
       // "Salvar" o resultado da consulta (tabela) na $resultado
       $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);

       Banco::desconectar();

       return $resultado;
   }
      
   public function Deletar(){
      $banco = Banco::conectar();
      $sql = "DELETE FROM lote WHERE id = ?";
      $banco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $comando = $banco->prepare($sql);
      $comando->execute(array($this->id));
      Banco::desconectar();
      // Retornar quantidade de linhas apagadas:
      return $comando->rowCount();
  }

  public function Atualizar(){
      $banco = Banco::conectar();
      $sql = "UPDATE lote SET cod_lote = ?, id_fornecedor = ?, validade=?, quantidade=?, observacao=? WHERE id=?";
      $banco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $comando = $banco->prepare($sql);
      $comando->execute(array($this->cod_lote,$this->id_fornecedor,$this->validade,$this->quantidade,$this->observacao));
      Banco::desconectar();
      // Retornar quantidade de linhas apagadas:
      return $comando->rowCount();
  }

  public function BuscarPorId(){
      $banco = Banco::conectar();
      $sql = "SELECT * FROM lote WHERE id = ?";
      $comando = $banco->prepare($sql);
      $comando->execute(array($this->id));
      // "Salvar" o resultado da consulta (tabela) na $resultado
      $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);

      Banco::desconectar();

      return $resultado;
  }

   

}


