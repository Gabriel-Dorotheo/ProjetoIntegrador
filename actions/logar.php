<?php
require_once('../classes/Usuario.class.php');

try {
    // Verificar se as variáveis foram enviadas via POST:
    if (isset($_POST['nome']) && isset($_POST['senha'])) {
        $c = new Usuario();
        $c->usuario_email = $_POST['nome'];
        $c->senha = $_POST['senha'];

        $resultado = $c->Logar();

        // Verificar se existem linhas no resultado:
        if (count($resultado) == 1) {
            session_start();

            // Criar a sessão com os dados vindos do BD:
            $_SESSION['dados'] = $resultado[0];

            // Redirecionar:
            header("Location: ../inicio.php");
            exit();
        } else {
            // Caso o login falhe, redirecionar com uma mensagem de erro específica:
            header('Location: ../index.php?erro=0');
            exit();
        }
    }
} catch (PDOException $e) {
    // Tratar exceção em caso de erro durante o login:
    // Exibir mensagem de erro amigável ou redirecionar para uma página de erro.
    header('Location: ../index.php?erro=2');
    exit();
}
?>
