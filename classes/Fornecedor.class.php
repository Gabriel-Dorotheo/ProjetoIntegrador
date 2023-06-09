<?php
require_once('Banco.class.php');
class Fornecedor
{
    public $id;
    public $nome;
    public $razao_social;
    public $cnpj;
    public $id_email;
    public $id_telefone;
    public $email;
    public $telefone;
    

    public function Cadastrar()
    {
        $sql = "INSERT INTO fornecedor(nome, razao_social, cnpj, email, telefone) VALUE(?,?,?,?,?)";
        //Trabalhar com o banco:
        //Conectando:
        $banco = Banco::conectar();
        //Transformar a string em comando sql:
        $comando = $banco->prepare($sql);
        //Executar e substituit os corngas (?):
        $comando->execute(array($this->nome, $this->razao_social, $this->cnpj, $this->email, $this->telefone));
        //Desconectar do banco:
        Banco::desconectar();
    }

    public function Listar()
    {
        //Copiei do listar
        $banco = Banco::conectar();
        $sql = "SELECT * FROM fornecedor";
        $comando = $banco->prepare($sql);
        $comando->execute();
        // "Salvar" o resultado da consulta (tabela) na $resultado
        $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
        Banco::desconectar();
        return $resultado;
    }

    public function Deletar()
    {
        $banco = Banco::conectar();
        $sql = "DELETE FROM fornecedor WHERE id = ?";
        $banco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $comando = $banco->prepare($sql);
        $comando->execute(array($this->id));
        Banco::desconectar();
        // Retornar quantidade de linhas apagadas:
        return $comando->rowCount();
    }

    public function Atualizar(){
        $banco = Banco::conectar();
        $sql = "UPDATE fornecedor SET nome = ?, razao_social = ?, cnpj= ?, email= ?, telefone= ? WHERE id= ?";
        $banco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $comando = $banco->prepare($sql);
        $comando->execute(array($this->nome,$this->razao_social,$this->cnpj,$this->email,$this->telefone,$this->id));
        Banco::desconectar();
        // Retornar quantidade de linhas apagadas:
        return $comando->rowCount();
    }
  
    public function BuscarPorId(){
        $banco = Banco::conectar();
        $sql = "SELECT * FROM fornecedor WHERE id = ?";
        $comando = $banco->prepare($sql);
        $comando->execute(array($this->id));
        // "Salvar" o resultado da consulta (tabela) na $resultado
        $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
        Banco::desconectar();
        return $resultado;
    }
  
}
?>