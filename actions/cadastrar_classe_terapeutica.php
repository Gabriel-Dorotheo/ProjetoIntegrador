<?php
session_start();
//Verificar se a página está sendo carregada por POST:
if($_SERVER['REQUEST_METHOD']== 'POST'){


//Importar a classe:
require_once('../classes/Classe_terapeutica.php');

//Intaciar um objeto do tipo contato:
$p = new Classe_terapeutica();
$p->tipo = $_POST['tipo'];

$p->Cadastrar();

header('Location: ../produtos.php?msg=10');
exit();

}else{
    echo "Essa página deve ser carregada por POST!";
}
?>