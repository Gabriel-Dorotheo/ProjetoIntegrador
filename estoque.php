<?php

session_start();
// Verificar se a sessão não existe;
if (!isset($_SESSION['dados'])) {
    // Se usuario não logado, redirecionar para o login;
    header("location: index.php");
    exit();
}

require_once('classes/Usuario.class.php');
$usuario = new Usuario;
$resultado = $usuario->Listar();
?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Estoque | Pharma Flow</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- Meu CSS -->
    <link rel="stylesheet" href="estilo/style.css">
    <!-- Javascript Data Table -->
    <link href="https://unpkg.com/tabulator-tables/dist/css/tabulator.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/pilulas.png" type="image/x-icon">

</head>

<body>
    <div class="container-fluid overflow-hidden m-0 p-0" style="min-height: 100vh;">

        <div class="row bg-transparent">
            <div class="col">
                <?php require_once('components/menu.php'); ?>
            </div>
        </div>


        <!-- conteudo -->
        <div class="row">
            <div class="col">
                <!-- titulo -->
                <div class="titulo text-center m-5 sombra-texto text-white">
                    <h1 class="h1">Gerenciamento de Estoque</h1>
                </div>
                <div class="container mt-5 mb-5 border rounded-2 shadow bg-body-secondary rounded vh-100">

                    <div class="row">
                        <?php require_once('tabelas/tabela_estoque.php') ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- rodapé -->
        <?php require_once('components/rodape.php') ?>
    </div>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Meu Javascript -->
    <script src="script/script.js"></script>

</html>