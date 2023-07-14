<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST'and isset($_SESSION['dados'])) {
    require_once('../classes/Fornecedor.class.php');

    $u = new Fornecedor();
        $u->id =$_POST['id'];
        $u->nome = $_POST['nome'];
        $u->razao_social = $_POST['razao_social'];
        $u->cnpj = $_POST['cnpj'];
        $u->email = $_POST['email'];
        $u->telefone = $_POST['telefone'];
        $u->Atualizar();
        //O usuario é redirecionado para a página anterior
        header('Location: ../produtos.php?msg=14');
} else {
    echo "Erro <br>";
    //Redirecionar o usuario para angum lugar
    echo "<a href=\"../.php\">Voltar</a>";
}
//and isset($_SESSION['dados']))