<?php
session_start();
// Verificar se a página está sendo carregada por POST:
    if($_SERVER['REQUEST_METHOD'] == 'POST'and isset($_SESSION['dados'])){
        // Importar a classe:
        require_once('../classes/Email.class.php');
        // Instanciar um obj do tipo contato:
        $u = new Email();
        // Definir os valores das suas propriedades:
        $u->id_fornecedor = $_POST['id_fornecedor'];
        $u->email = $_POST['email'];





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

