<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST' and isset($_SESSION['dados'])){   
require_once('../classes/Telefone.class.php');

$p=new Telefone();


$p->id = $_POST['id'];
$p->id_fornecedor = $_POST['id_fornecedor'];
$p->telefone = $_POST['telefone'];


if($p->Atualizar() == 1){

    header('Location: ../.php');
}else{
    echo "Falha ao modificar.";
}
}else{
    echo "A página deve ser carregada por POST.<br>";
    echo "<a href=\"../admin/painel.php\">Voltar</a>";
}


?>