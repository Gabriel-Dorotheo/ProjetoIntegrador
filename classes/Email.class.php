<?php
require_once('Banco.class.php');
class Email{
    public $id;
    public $id_fornecedor;
    public $email;
    

    public function Cadastrar(){
        $sql = "INSERT INTO email(id_fornecedor, email) VALUE(?,?)";
        //Trabalhar com o banco:
        //Conectando:
        $banco = Banco :: conectar();
        //Transformar a string em comando sql:
        $comando = $banco->prepare($sql);
        //Executar e substituit os corngas (?):
        $comando->execute(array($this->id_fornecedor,$this->email));
        //Desconectar do banco:
        Banco::desconectar();

    }    

    public function Atualizar(){
        $banco = Banco::conectar();
        $sql = "UPDATE email SET id_fornecedor = ?, email = ? WHERE id=?";
        $banco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $comando = $banco->prepare($sql);
        $comando->execute(array($this->id_fornecedor,$this->email));
        Banco::desconectar();
        // Retornar quantidade de linhas apagadas:
        return $comando->rowCount();
    }



    
}



?>

