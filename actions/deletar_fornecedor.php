<?php 
if(isset($_GET['id'])){
    require_once("../classes/Fornecedor.class.php");
    $f = new Fornecedor();
    $f->id = $_GET['id'];
    
    if ($f->Deletar() == 1){
        header("Location: ../produtos.php");
        exit();
        
    }else{
        echo "ID não encontrado!";
    }
} else{
    echo "Defina o ID do item a ser apagado!";
}