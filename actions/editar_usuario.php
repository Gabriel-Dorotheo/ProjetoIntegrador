<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require_once('../classes/Usuario.class.php');

    $u = new Usuario();

    $u->nome = $_POST['nome'];
    $u->usuario_email =  $_POST['usuario_email'];
    $u->id_nivel =  $_POST['id_nivel'];
    $u->senha = $_POST['senha'];
    $u->usuario_telefone = $_POST['usuario_telefone'];

    if ($u->Atualizar() == 1) {

        //Colocar por onde ira mandar o usuario após a att

        header('Location: ../.php');
    } else {
        echo "Falha ao modificar.";
    }
} else {
    echo "Erro <br>";
    //Redirecionar o usuario para angum lugar
    echo "<a href=\"../.php\">Voltar</a>";
}
