<?php 
if(isset($_GET['id'])){
    require_once("../classes/Classificacao.class.php");
    $f = new Classificacao();
    $f->id = $_GET['id'];
    
    if ($f->Deletar() == 1){
        header("Location: ../produtos.php?alertaFornecedor=0");
        exit();
        
    }else{
        echo "ID não encontrado!";
    }
} else{
    echo "Defina o ID do item a ser apagado!";
}