<?php
// Verificar se a página está sendo carregada por POST:
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Importar a classe:
        require_once('../classes/Lote.class.php');
        // Instanciar um obj do tipo contato:
        $l = new Lote();
        // Definir os valores das suas propriedades:
        $l->cod_lote = $_POST['cod_lote'];
        $l->id_produto = $_POST['id_produto'];
        $l->id_fornecedor = $_POST['id_fornecedor'];
        $l->validade = $_POST['validade'];
        $l->quantidade = $_POST['quantidade'];
        $l->observacao = $_POST['observacao'];


        $l->Cadastrar();
        // echo "cadastrado com sucesso!";
        // Redirecionar o jovem de volta:
        header('Location: ../produtos.php?msg=6');
        exit();
    }else{
        echo "Erro";
    }

?>