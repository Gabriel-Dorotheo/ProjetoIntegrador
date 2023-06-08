<?php 


if(isset($_GET['id'])){
    require_once("../classes/Usuario.class.php");
    
    $c = new Usuario();
    
    $c->id = $_GET['id'];
    
    if ($c->Deletar() == 1){
            
        header("Location: ../usuario.php");
        exit();
        
    }else{
        echo "ID não encontrado!";
    }
} else{
    echo "Defina o ID do item a ser apagado!";
}
