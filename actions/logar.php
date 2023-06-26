<?php

require_once('../classes/Usuario.class.php');
$c = new Usuario();
$c->usuario_email = $_POST['nome'];
$c->senha = $_POST['senha'];

$resultado = $c->Logar();
// print_r($resultado);
// Verificar se existem linhas no resultado:

if(count($resultado) == 1){
    session_start();

    // Criar a sessão com os dados vindos do BD:
    $_SESSION['dados'] = $resultado[0];

    // Redirecionar:
    header("Location: ../inicio.php?");
    exit();

}else{

    // echo "Usuario ou senha inválidos!";
    header('Location: ../index.php?erro=0');
    exit();
}

?>