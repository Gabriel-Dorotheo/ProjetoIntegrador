<?php
session_start();
// Verificar se a sessão não existe;
if (!isset($_SESSION['dados'])) {
    // Se usuario não logado, redirecionar para o login;
    header("location: index.php");
    exit();
}
?>