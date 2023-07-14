<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST' and isset($_SESSION['dados'])){
    require_once('../classes/Classificacao.class.php');

    $c = new Classificacao();
    $c->id = $_POST['id'];
    $c->tipo = $_POST['tipo'];

    if ($c->Atualizar() == 1) {

        //Colocar por onde ira mandar o usuario após a att

        header('Location: ../produtos.php?msg=9');
        
    } else {
       echo "Falha ao modificar.";
       var_dump($_POST);
    }
} else {
    echo "Erro <br>";
    //Redirecionar o usuario para angum lugar
    echo "<a href=\"../produtos.php\">Voltar</a>";
}
