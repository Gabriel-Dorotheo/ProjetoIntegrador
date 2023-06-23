<?php

require_once('Banco.class.php');
class Classificacao{
    public $id;
    public $tipo;

    public function Cadastrar(){
        $sql = "INSERT INTO classificacao(tipo) VALUE(?)";
        //Trabalhar com o banco:
        //Conectando:
        $banco = Banco :: conectar();
        //Transformar a string em comando sql:
        $comando = $banco->prepare($sql);
        //Executar e substituit os corngas (?):
        $comando->execute(array($this->tipo));
        //Desconectar do banco:
        Banco::desconectar();

    }
    public function Listar(){
        //Copiei do listar
   
        $banco = Banco::conectar();
            $sql = "SELECT * FROM classificacao";
            $comando = $banco->prepare($sql);

            $comando->execute();
            // "Salvar" o resultado da consulta (tabela) na $resultado
            $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
     
            Banco::desconectar();
     
            return $resultado;
        }
           
        

    }



?>