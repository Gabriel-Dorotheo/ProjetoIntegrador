<?php
// Verificar se a página está sendo carregada por POST:
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Importar a classe:
        require_once('../Classes/Produtos.class.php');
        // Instanciar um obj:
        $u = new Produtos();
        // Definir os valores das suas propriedades:
        $u->nome = $_POST['nome'];
        $u->id_classificacao = $_POST['id_classificacao'];
        $u->nota_fiscal = $_POST['nota_fiscal'];
        $u->descricao = $_POST['descricao'];
        $u->id_tipo = $_POST['id_tipo'];




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