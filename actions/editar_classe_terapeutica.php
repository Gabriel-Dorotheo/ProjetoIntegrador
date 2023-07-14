<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST' and isset($_SESSION['dados'])){
    require_once('../classes/Classe_terapeutica.php');

    $c = new Classe_terapeutica();
    $c->id = $_POST['id'];
    $c->tipo = $_POST['nome'];

    if ($c->Atualizar() == 1) {
        //Colocar por onde ira mandar o usuario após a att
        header('Location: ../produtos.php?msg=8');
    } else {
       echo "Falha ao modificar.";
       var_dump($_POST);
    }
} else {
    echo "Erro <br>";
    //Redirecionar o usuario para angum lugar
    echo "<a href=\"../produtos.php\">Voltar</a>";
}
