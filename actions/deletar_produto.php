<?php 

if(isset($_GET['id'])){
    require_once("../classes/Produtos.class.php");
    $p = new Produtos();
    $p->id = $_GET['id'];
    if ($p->Deletar() == 1){

        header("Location: ../produtos.php?alertaproduto=0");
        exit();
        
    }else{
        echo "ID não encontrado!";
    }
} else{
    echo "Defina o ID do item a ser apagado!";
}
