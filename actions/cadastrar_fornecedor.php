<?php
// Verificar se a página está sendo carregada por POST:
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Importar a classe:
        require_once('../classes/Fornecedor.class.php');
        // Instanciar um obj:
        $u = new Fornecedor();
        // Definir os valores das suas propriedades:
        $u->nome = $_POST['nome'];
        $u->razao_social = $_POST['razao_social'];
        $u->cnpj = $_POST['cnpj'];
        $u->id_telefone = $_POST['id_telefone'];
        $u->id_email = $_POST['id_email'];

        $u->Cadastrar();
        // echo "cadastrado com sucesso!";
        // Redirecionar o jovem de volta:
        header('Location: ../produtos.php');
        exit();

    }else{
        echo "Essa página deve ser carregada por POST!";
    }

?>