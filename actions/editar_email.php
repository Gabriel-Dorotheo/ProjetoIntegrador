<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST' and isset($_SESSION['dados'])){   
require_once('../classes/Email.class.php');

$p=new Email();


$p->id = $_POST['id'];
$p->id_fornecedor = $_POST['id_fornecedor'];
$p->email = $_POST['email'];


if($p->Atualizar() == 1){

    header('Location: ../.php');
}else{
    echo "Falha ao modificar.";
}
}else{
    echo "Erro <br>";
    echo "<a href=\"../admin/painel.php\">Voltar</a>";
}


?>