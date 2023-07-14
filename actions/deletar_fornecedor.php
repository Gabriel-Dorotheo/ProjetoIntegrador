<?php 

if(isset($_GET['id'])){
    require_once("../classes/Fornecedor.class.php");
    $f = new Fornecedor();
    $f->id = $_GET['id'];
    
    $f->Deletar();
        header("Location: ../produtos.php?alertaFornecedor=0");
        exit();
        
} else{
    echo "Defina o ID do item a ser apagado!";
}