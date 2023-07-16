<?php

require_once('Banco.class.php');
class Classe_terapeutica
{
    public $id;
    public $tipo;

    public function Cadastrar()
    {
        $sql = "INSERT INTO classe_terapeutica(tipo) VALUE(?)";
        //Trabalhar com o banco:
        //Conectando:
        $banco = Banco::conectar();
        //Transformar a string em comando sql:
        $comando = $banco->prepare($sql);
        //Executar e substituit os corngas (?):
        $comando->execute(array($this->tipo));
        //Desconectar do banco:
        Banco::desconectar();
    }
    public function Listar()
    {
        //Copiei do listar

        $banco = Banco::conectar();
        $sql = "SELECT * FROM classe_terapeutica ORDER BY tipo asc";
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
        $sql = "DELETE FROM classe_terapeutica WHERE id = ?";
        $banco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $comando = $banco->prepare($sql);
        $comando->execute(array($this->id));
        Banco::desconectar();
        // Retornar quantidade de linhas apagadas:
        return $comando->rowCount();
    }
    public function Atualizar()
    {
        $banco = Banco::conectar();
        $sql = "UPDATE classe_terapeutica SET tipo = ? WHERE id=?";
        $banco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $comando = $banco->prepare($sql);
        $comando->execute(array($this->tipo, $this->id));
        Banco::desconectar();
        // Retornar quantidade de linhas apagadas:
        return $comando->rowCount();
    }
}
