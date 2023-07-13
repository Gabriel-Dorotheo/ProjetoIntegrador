<?php
//Peguei da cadastrar produto:
session_start();
//Verificar se a página está sendo carregada por POST:
if($_SERVER['REQUEST_METHOD']== 'POST'){


//Importar a classe:
require_once('../classes/Classificacao.class.php');

//Intaciar um objeto do tipo contato:
$p = new Classificacao();
$p->tipo = $_POST['tipo'];
$p->Cadastrar();


header('Location: ../produtos.php?msg=11');
exit();

}else{
    echo "Erro";
}
?>