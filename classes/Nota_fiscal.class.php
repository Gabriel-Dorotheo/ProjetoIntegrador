<?php

require_once('Banco.class.php');
class Nota_fiscal
{
    public $id;
    public $nota_fiscal;
    public $id_fornecedor;
    public $id_lote;
    public $id_produto;
    

    public function Cadastrar()
    {
        $sql = "INSERT INTO nota_fiscal(nota_fiscal, id_fornecedor, id_lote, id_produto) VALUE(?,?,?,?)";
        //Trabalhar com o banco:
        //Conectando:
        $banco = Banco::conectar();
        //Transformar a string em comando sql:
        $comando = $banco->prepare($sql);
        //Executar e substituit os corngas (?):
        $comando->execute(array($this->nota_fiscal, $this-> id_fornecedor, $this-> id_lote, $this-> id_produto));
        //Desconectar do banco:
        Banco::desconectar();
    }

    public function Listar()
    {
        //Copiei do listar

        $banco = Banco::conectar();
        $sql = "SELECT * FROM nota_fiscal";
        $comando = $banco->prepare($sql);

        $comando->execute();
        // "Salvar" o resultado da consulta (tabela) na $resultado
        $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);

        Banco::desconectar();

        return $resultado;
    }

    public function BuscarPorId()
    {
        $banco = Banco::conectar();
        $sql = "SELECT * FROM nota_fiscal WHERE id = ?";
        $comando = $banco->prepare($sql);
        $comando->execute(array($this->id));
        // "Salvar" o resultado da consulta (tabela) na $resultado
        $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);

        Banco::desconectar();

        return $resultado;
    }

    


}
