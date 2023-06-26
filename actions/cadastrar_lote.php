<?php
// Verificar se a página está sendo carregada por POST:
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Importar a classe:
        require_once('../Classes/Lote.class.php');
        // Instanciar um obj do tipo contato:
        $u = new Lote();
        // Definir os valores das suas propriedades:
        $u->cod_lote = $_POST['cod_lote'];
        $u->id_produto = $_POST['id_produto'];
        $u->id_fornecedor = $_POST['id_fornecedor'];
        $u->validade = $_POST['validade'];
        $u->quantidade = $_POST['quantidade'];
        $u->observacao = $_POST['observacao'];




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