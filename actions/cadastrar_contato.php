<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST' and isset($_SESSION['dados'])){
//importar a classe Contato.class.php
require_once('../classes/Usuario.class.php');

//Verificar se a página está sendo carregada por POST:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //Instanciar um objeto do tipo contato:
    $u = new Usuario();

    //Definir os valores da propriedade
    $u->nome = $_POST['nome'];
    $u->usuario_email =  $_POST['usuario_email'];
    $u->id_nivel =  $_POST['id_nivel'];
    $u->senha = $_POST['senha'];
    $u->usuario_telefone = $_POST['usuario_telefone'];

    $u->Inserir();
    echo "Contato cadastrado com sucesso!";
    //redireciona o jovem de volta à agenda;
    header('Location: ../usuario.php?msg=0');
    exit();
}else{
    echo "Erro";
}}
