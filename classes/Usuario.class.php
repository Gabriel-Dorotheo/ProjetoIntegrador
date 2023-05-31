<?php
require_once('Banco.class.php');

class Usuario{

    //atributos da classe Usuario
    public $id;
    public $nome;
    public $usuario_email;
    public $id_nivel;
    public $senha;
    public $usuario_telefone;
    //ações da classe
    public function Inserir(){
        $sql = "INSERT INTO usuario (nome, usuario_email, id_nivel, senha, usuario_telefone) VALUES(?,?,?,?,?)";
        //Trabalhar com banco de dados
        //conexão com banco de dados
        $banco = Banco::conectar();
        //Transformar a string em comando sql;
        $comando = $banco->prepare($sql);
        //Executar e substituir os coringas(?);
        $hashSenha = hash('MD5',$this->senha);
        $comando->execute(array($this->nome,$this->usuario_email,$this->id_nivel, $hashSenha,$this->usuario_telefone));
        //Desconectar do banco
        Banco::desconectar();
    }

    public function Listar(){
        $banco = Banco::conectar();
        $sql = "SELECT * FROM usuario";
        $comando = $banco->prepare($sql);
        $comando->execute();
        // "Salvar" o resultado da consulta (tabela) na $resultado
        $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
 
        Banco::desconectar();
 
        return $resultado;
    }


    public function Deletar(){
        $banco = Banco::conectar();
        $sql = "DELETE FROM usuario WHERE id = ?";
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