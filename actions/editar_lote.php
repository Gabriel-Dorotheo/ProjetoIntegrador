<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST' and isset($_SESSION['dados'])){   
require_once('../classes/Lote.class.php');

$p=new Lote();


$p->id = $_POST['id'];
$p->cod_lote = $_POST['cod_lote'];
$p->id_produto = $_POST['id_produto'];
$p->id_fornecedor = $_POST['id_fornecedor'];
$p->validade= $_POST['validade'];
$p->quantidade = $_POST['quantidade'];


if($p->Atualizar() == 1){

    header('Location: ../produtos.php?msg=12');
}else{
    echo "Erro <br>";
    echo "<a href=\"../admin/painel.php\">Voltar</a>";
}

}
