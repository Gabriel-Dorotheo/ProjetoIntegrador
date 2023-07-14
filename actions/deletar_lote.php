<?php 

if(isset($_GET['id'])){
    require_once("../classes/Lote.class.php");
    
    $lot = new Lote();
    
    $lot->id = $_GET['id'];
    
    if ($lot->Deletar() == 1){
            
        header("Location: ../produtos.php?msg=7");
        exit();
        
    }else{
        echo "ID não encontrado!";
    }
} else{
    echo "Defina o ID do item a ser apagado!";
}
