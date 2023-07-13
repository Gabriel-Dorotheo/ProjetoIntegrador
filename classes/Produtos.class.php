<?php
require_once('Banco.class.php');

class Produtos
{
    public $id;
    public $nome;
    public $id_classificacao;
    public $nota_fiscal;
    public $descricao;
    public $id_tipo;
    public $id_fornecedor;
    
    

    public int $inicio;
    public int $maximo;

    public function Cadastrar()
    {
        $sql = "INSERT INTO produtos(nome, id_classificacao, nota_fiscal, descricao, id_tipo, id_fornecedor) VALUE(?,?,?,?,?,?)";
        //Trabalhar com o banco:
        //Conectando:
        $banco = Banco::conectar();
        //Transformar a string em comando sql:
        $comando = $banco->prepare($sql);
        //Executar e substituit os corngas (?):
        $comando->execute(array($this->nome, $this->id_classificacao, $this-> nota_fiscal, $this-> descricao, $this->id_tipo, $this->id_fornecedor));
        //Desconectar do banco:
        Banco::desconectar();
    }


    public function Listar()
    {
        $banco = Banco::conectar();
        $sql = "SELECT * FROM produtos";
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
        $sql = "DELETE FROM produtos WHERE id = ?";
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
        $sql = "UPDATE produtos SET nome = ?, id_classificacao = ?, id_fornecedor = ?, id_tipo= ? WHERE id=?";
        $banco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $comando = $banco->prepare($sql);
        $comando->execute(array($this->nome, $this->id_classificacao, $this->id_fornecedor, $this->id_tipo, $this->id));
        Banco::desconectar();
        // Retornar quantidade de linhas apagadas:
        return $comando->rowCount();
    }

    public function BuscarPorId()
    {
        $banco = Banco::conectar();
        $sql = "SELECT * FROM produtos WHERE id = ?";
        $comando = $banco->prepare($sql);
        $comando->execute(array($this->id));
        // "Salvar" o resultado da consulta (tabela) na $resultado
        $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);

        Banco::desconectar();

        return $resultado;
    }

    public static function ObterQtdRegistro(){
        $banco = Banco::conectar();
        $sql = "SELECT COUNT(*) AS 'qtd' FROM produtos";
        $comando = $banco->prepare($sql);
        $comando->execute();
        // "Salvar" o resultado da consulta (tabela) na $resultado
        $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
 
        Banco::desconectar();
 
        return $resultado;
    }

    public function ListarPag(){
        $banco = Banco::conectar();
        $sql = "SELECT * FROM view_produtos LIMIT :inicio,:fim";
        $comando = $banco->prepare($sql);
        $comando->bindParam(":inicio", $this->inicio);
        $comando->bindParam(":inicio", $this->inicio, PDO::PARAM_INT);
        $comando->bindParam(":fim", $this->maximo);
        $comando->bindParam(":fim", $this->maximo, PDO::PARAM_INT);
        $comando->execute();
        // "Salvar" o resultado da consulta (tabela) na $resultado
        $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
 
        Banco::desconectar();
 
        return $resultado;

    }

    public function ObterClassificacao()
    {
        $banco = Banco::conectar();
        $sql = "SELECT * FROM classificacao";
        $comando = $banco->prepare($sql);
        $comando->execute();
        $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
        Banco::desconectar();
        return $resultado;
    }



    public function ObterClassesTerapeutica()
{
    $banco = Banco::conectar();
    $sql = "SELECT * FROM classe_terapeutica";
    $comando = $banco->prepare($sql);
    $comando->execute();
    $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
    Banco::desconectar();
    return $resultado;
}
}