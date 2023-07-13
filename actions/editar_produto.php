<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require_once('../classes/Produtos.class.php');

    $u = new Produtos();
    
    $u->nome = $_POST['nome'];
    $u->id_classificacao = $_POST['id_classificacao'];
    $u->id_fornecedor = $_POST['id_fornecedor'];
    //$u->descricao = $_POST['descricao'];
    $u->id_tipo = $_POST['id_tipo'];
    //$u->nota_fiscal = $_POST['nota_fiscal'];
    $u->id = $_POST['id'];


    if ($u->Atualizar() == 1) {

        //Colocar por onde ira mandar o usuario após a att

        header('Location: ../produtos.php');
        
    } else {
       echo "Falha ao modificar.";
    }
} else {
    echo "Erro <br>";
    //Redirecionar o usuario para angum lugar
    echo "<a href=\"../produtos.php\">Voltar</a>";
}
