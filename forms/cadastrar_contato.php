<?php
//importar a classe Contato.class.php
require_once('../classes/Usuario.class.php');

//Verificar se a página está sendo carregada por POST:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //Instanciar um objeto do tipo contato:
    $u = new Usuario();

    //Definir os valores da propriedade
    $u->nome = $_POST['nome'];
    $u->sobrenome =  $_POST['sobrenome'];
    $u->email =  $_POST['email'];
    $u->usuario = $_POST['usuario'];
    $u->senha = $_POST['senha'];

    $u->Inserir();
    echo "Contato cadastrado com sucesso!";
    //redireciona o jovem de volta à agenda;
    header('Location: ../usuario.php');
    exit();
}else{
    echo "Essa página deve ser carregada por POST!";
}
