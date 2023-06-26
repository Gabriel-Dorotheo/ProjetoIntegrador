<?php
// Verificar se a página está sendo carregada por POST:
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Importar a classe:
        require_once('../Classes/Telefone.class.php');
        // Instanciar um obj:
        $u = new Telefone();
        // Definir os valores das suas propriedades:
        $u->id_fornecedor = $_POST['id_fornecedor'];
        $u->telefone = $_POST['telefone'];
        




        try{
        $u->Cadastrar();
        // echo "cadastrado com sucesso!";
        // Redirecionar o jovem de volta:
        header('Location: ../usuario.php');
        exit();
        }catch(PDOException $e){
            header('Location: ../forms/cadastrar_contato?erro=2');
            exit();
        
        }
    }else{
        echo "Essa página deve ser carregada por POST!";
    }

?>