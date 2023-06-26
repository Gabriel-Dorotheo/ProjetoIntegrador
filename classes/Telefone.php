<?php
require_once('Banco.class.php');

class Telefone{
    public $id;
    public $id_fornecedor;
    public $telefone;



 public function Cadastrar(){
    $sql = "INSERT INTO telefone(id_fornecedor, telefone) VALUE(?,?)";
    //Trabalhar com o banco:
    //Conectando:
    $banco = Banco :: conectar();
    //Transformar a string em comando sql:
    $comando = $banco->prepare($sql);
    //Executar e substituit os corngas (?):
    $comando->execute(array($this->id_fornecedor, $this->telefone));
    //Desconectar do banco:
    Banco::desconectar();
 }


 public function Listar(){
   //Copiei do listar

   $banco = Banco::conectar();
       $sql = "SELECT * FROM view_telefone";
       $comando = $banco->prepare($sql);

       $comando->execute();
       // "Salvar" o resultado da consulta (tabela) na $resultado
       $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);

       Banco::desconectar();

       return $resultado;
   }
      
   public function Deletar(){
      $banco = Banco::conectar();
      $sql = "DELETE FROM telefone WHERE id = ?";
      $banco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $comando = $banco->prepare($sql);
      $comando->execute(array($this->id));
      Banco::desconectar();
      // Retornar quantidade de linhas apagadas:
      return $comando->rowCount();
  }

  public function Atualizar(){
      $banco = Banco::conectar();
      $sql = "UPDATE telefone SET id_fornecedor = ?, telefone = ? WHERE id=?";
      $banco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $comando = $banco->prepare($sql);
      $comando->execute(array($this->id_fornecedor,$this->telefone));
      Banco::desconectar();
      // Retornar quantidade de linhas apagadas:
      return $comando->rowCount();
  }

  public function BuscarPorId(){
      $banco = Banco::conectar();
      $sql = "SELECT * FROM telefone WHERE id = ?";
      $comando = $banco->prepare($sql);
      $comando->execute(array($this->id));
      // "Salvar" o resultado da consulta (tabela) na $resultado
      $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);

      Banco::desconectar();

      return $resultado;
  }

   

}