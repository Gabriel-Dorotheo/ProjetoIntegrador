<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require_once('../classes/Fornecedor.class.php');

    $u = new Fornecedor();

    $u->nome = $_POST['nome'];
        $u->razao_social = $_POST['razao_social'];
        $u->cnpj = $_POST['cnpj'];
    if ($u->Atualizar() == 1) {

        //Colocar por onde ira mandar o usuario após a att

        header('Location: ../.php');
    } else {
        echo "Falha ao modificar.";
    }
} else {
    echo "Erro <br>";
    //Redirecionar o usuario para angum lugar
    echo "<a href=\"../.php\">Voltar</a>";
}
//and isset($_SESSION['dados']))