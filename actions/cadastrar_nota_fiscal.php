<?php
// Verificar se a página está sendo carregada por POST:
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Importar a classe:
        require_once('../classes/Nota_fiscal.class.php');
        // Instanciar um obj do tipo contato:
        $u = new Nota_fiscal();
        // Definir os valores das suas propriedades:
        $u->nota_fiscal = $_POST['nota_fiscal'];
        $u->id_fornecedor = $_POST['id_fornecedor'];
        $u->id_lote = $_POST['id_lote'];
        $u->id_produto = $_POST['id_produto'];

        try{
        $u->Cadastrar();
        // echo "cadastrado com sucesso!";
        // Redirecionar o jovem de volta:
        header('Location: ../usuario.php');
        exit();
        }catch(PDOException $e){
            header('Location: ../formularios/cadastrar_contato?erro=2');
            exit();
        
        }
    }else{
        echo "Erro";
    }

?>