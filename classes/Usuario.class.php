<?php
require_once('Banco.class.php');

class Usuario{

    //atributos da classe Usuario
    public $id;
    public $nome;
    public $sobrenome;
    public $email;
    public $usuario;
    public $senha;
    //ações da classe
    public function Inserir(){
        $sql = "INSERT INTO contas (nome, sobrenome, email, usuario, senha) VALUES(?,?,?,?,?)";
        //Trabalhar com banco de dados
        //conexão com banco de dados
        $banco = Banco::conectar();
        //Transformar a string em comando sql;
        $comando = $banco->prepare($sql);
        //Executar e substituir os coringas(?);
        $comando->execute(array($this->nome,$this->sobrenome,$this->email,$this->usuario,$this->senha));
        //Desconectar do banco
        Banco::desconectar();
    }

    public function Listar(){
        $banco = Banco::conectar();
        $sql = "SELECT * FROM contas";
        $comando = $banco->prepare($sql);
        $comando->execute();
        // "Salvar" o resultado da consulta (tabela) na $resultado
        $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
 
        Banco::desconectar();
 
        return $resultado;
    }


    public function Deletar(){
        $banco = Banco::conectar();
        $sql = "DELETE FROM contas WHERE id = ?";
        $banco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $comando = $banco->prepare($sql);
        $comando->execute(array($this->id));
        Banco::desconectar();
        // Retornar quantidade de linhas apagadas:
        return $comando->rowCount();
    }

    public function Atualizar(){
        
    }

    public function BuscarPorID(){
        
    }
}




?>