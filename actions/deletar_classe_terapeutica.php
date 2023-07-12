<?php 
if(isset($_GET['id'])){
    require_once("../classes/Classe_terapeutica.class.php");
    $f = new Classe_terapeutica();
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