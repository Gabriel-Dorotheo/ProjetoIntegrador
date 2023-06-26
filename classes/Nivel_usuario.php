<?php
require_once('Banco.class.php');

class Nivel_usuario{
    public $id;
    public $nome_nivel;
    





 public function Cadastrar(){
    $sql = "INSERT INTO nivel_usuario(nome_nivel) VALUE(?)";
    //Trabalhar com o banco:
    //Conectando:
    $banco = Banco :: conectar();
    //Transformar a string em comando sql:
    $comando = $banco->prepare($sql);
    //Executar e substituit os corngas (?):
    $comando->execute(array($this->nome_nivel));
    //Desconectar do banco:
    Banco::desconectar();
 }


 public function Listar(){
   //Copiei do listar

   $banco = Banco::conectar();
       $sql = "SELECT * FROM view_produtos";
       $comando = $banco->prepare($sql);

       $comando->execute();
       // "Salvar" o resultado da consulta (tabela) na $resultado
       $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);

       Banco::desconectar();

       return $resultado;
   }
      
   public function Deletar(){
      $banco = Banco::conectar();
      $sql = "DELETE FROM nivel_usuario WHERE id = ?";
      $banco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $comando = $banco->prepare($sql);
      $comando->execute(array($this->id));
      Banco::desconectar();
      // Retornar quantidade de linhas apagadas:
      return $comando->rowCount();
  }

  public function Atualizar(){
      $banco = Banco::conectar();
      $sql = "UPDATE nivel_usuario SET nome_nivel = ? WHERE id=?";
      $banco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $comando = $banco->prepare($sql);
      $comando->execute(array($this->nome_nivel));
      Banco::desconectar();
      // Retornar quantidade de linhas apagadas:
      return $comando->rowCount();
  }

  public function BuscarPorId(){
      $banco = Banco::conectar();
      $sql = "SELECT * FROM nivel_usuario WHERE id = ?";
      $comando = $banco->prepare($sql);
      $comando->execute(array($this->id));
      // "Salvar" o resultado da consulta (tabela) na $resultado
      $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);

      Banco::desconectar();

      return $resultado;
  }

   

}


