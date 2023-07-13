<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require_once('../classes/Produtos.class.php');

    $u = new Produtos();
    $u->id = $_POST['id'];
    $u->nome = $_POST['nome'];
    $u->id_classificacao = $_POST['id_classificacao'];
    $u->id_fornecedor = $_POST['id_fornecedor'];
    $u->id_tipo = $_POST['id_tipo'];
  


    if ($u->Atualizar() == 1) {

        //Colocar por onde ira mandar o usuario após a att

        header('Location: ../produtos.php?msg=5');
        
    } else {
       echo "Falha ao modificar.";
       var_dump($_POST);
    }
} else {
    echo "Erro <br>";
    //Redirecionar o usuario para angum lugar
    echo "<a href=\"../produtos.php\">Voltar</a>";
}
