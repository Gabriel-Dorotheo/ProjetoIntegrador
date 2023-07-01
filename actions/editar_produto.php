<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require_once('../classes/Produtos.class.php');

    $u = new Produtos();

    $u->nome = $_POST['nome'];
    $u->tipo_classificacao = $_POST['tipo_classificacao'];
    $u->nome_fornecedor = $_POST['nome_fornecedor'];
    $u->tipo_classe_terapeutica = $_POST['tipo_classe_terapeutica'];

    if ($u->Atualizar() == 1) {

        //Colocar por onde ira mandar o usuario após a att

        header('Location: ../produto.php');
    } else {
        echo "Falha ao modificar.";
    }
} else {
    echo "Erro <br>";
    //Redirecionar o usuario para angum lugar
    echo "<a href=\"../.php\">Voltar</a>";
}
