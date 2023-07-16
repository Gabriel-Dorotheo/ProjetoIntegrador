<?php
require_once('Banco.class.php');

class Movimentacao{
    public $id;
    public $data_movimentacao;
    public $id_usuario;
    public $id_lote;
    public $quantidade;





 public function Cadastrar(){
    $sql = "INSERT INTO movimentacao(data_movimentacao, id_usuario, id_lote, quantidade) VALUE(?,?,?,?)";
    //Trabalhar com o banco:
    //Conectando:
    $banco = Banco :: conectar();
    //Transformar a string em comando sql:
    $comando = $banco->prepare($sql);
    //Executar e substituit os corngas (?):
    $comando->execute(array($this->data_movimentacao, $this->id_usuario, $this->id_lote, $this->quantidade));
    //Desconectar do banco:
    Banco::desconectar();
 }


 public function Listar(){
   //Copiei do listar

   $banco = Banco::conectar();
       $sql = "SELECT * FROM view_movimentacao ORDER BY nome ASC";
       $comando = $banco->prepare($sql);

       $comando->execute();
       // "Salvar" o resultado da consulta (tabela) na $resultado
       $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);

       Banco::desconectar();

       return $resultado;
   }
      
   public function Deletar(){
      $banco = Banco::conectar();
      $sql = "DELETE FROM movimentacao WHERE id = ?";
      $banco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $comando = $banco->prepare($sql);
      $comando->execute(array($this->id));
      Banco::desconectar();
      // Retornar quantidade de linhas apagadas:
      return $comando->rowCount();
  }

  public function Atualizar(){
      $banco = Banco::conectar();
      $sql = "UPDATE movimentacao SET data_movimentacao = ?, id_usuario = ?, id_lote=?, quantidade=? WHERE id=?";
      $banco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $comando = $banco->prepare($sql);
      $comando->execute(array($this->data_movimentacao,$this->id_usuario,$this->id_lote,$this->quantidade));
      Banco::desconectar();
      // Retornar quantidade de linhas apagadas:
      return $comando->rowCount();
  }

  public function BuscarPorId(){
      $banco = Banco::conectar();
      $sql = "SELECT * FROM movimentacao WHERE id = ?";
      $comando = $banco->prepare($sql);
      $comando->execute(array($this->id));
      // "Salvar" o resultado da consulta (tabela) na $resultado
      $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);

      Banco::desconectar();

      return $resultado;
  }

   

}


