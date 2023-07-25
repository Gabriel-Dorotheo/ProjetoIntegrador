<?php
session_start();

// Verificar se a página está sendo carregada por POST:
if ($_SERVER['REQUEST_METHOD'] == 'POST' and isset($_SESSION['dados'])) {
    try {
        // Importar a classe:
        require_once('../classes/Lote.class.php');

        // Instanciar um objeto do tipo contato:
        $l = new Lote();

        // Verificar se todos os campos obrigatórios foram preenchidos antes de prosseguir:
        if (
            isset($_POST['cod_lote']) && isset($_POST['id_produto']) &&
            isset($_POST['id_fornecedor']) && isset($_POST['validade']) &&
            isset($_POST['quantidade']) && isset($_POST['observacao'])
        ) {
            // Definir os valores das propriedades do objeto Lote:
            $l->cod_lote = $_POST['cod_lote'];
            $l->id_produto = $_POST['id_produto'];
            $l->id_fornecedor = $_POST['id_fornecedor'];
            $l->validade = $_POST['validade'];
            $l->quantidade = $_POST['quantidade'];
            $l->observacao = $_POST['observacao'];

            // Cadastrar o lote:
            $l->Cadastrar();

            // Redirecionar o usuário de volta com uma mensagem de sucesso:
            header('Location: ../produtos.php?msg=6');
            exit();
        }
    } catch (PDOException $e) {
        // Tratar exceção em caso de erro no cadastro:
        // Exibir mensagem de erro amigável:
        header('Location: ../produtos.php?erro=5');
        exit();
    }
} else {
    echo "Erro";
}
?>
