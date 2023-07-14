<?php
session_start();
// Verificar se a sessão não existe;
if (!isset($_SESSION['dados'])) {
    // Se usuario não logado, redirecionar para o login;
    header("location: index.php");
    exit();
}

require_once('classes/Produtos.class.php');
$produto = new Produtos;
$resultado = $produto->Listar();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Início | Pharma Flow</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- Meu CSS -->
    <link rel="stylesheet" href="estilo/style.css">
    <link rel="shortcut icon" href="img/pilulas.png" type="image/x-icon">
</head>

<body>

    <div class="container-fluid overflow-x-hidden p-0 m-0" style="min-height: 100vh;">

        <div class="row bg-transparent">
            <div class="col">
                <?php require_once('components/menu.php'); ?>
            </div>


            <!-- Menu -->
            <div class="row mx-auto">
                <div class="col">
                    <div class="h1 text-center text-white m-4 sombra-texto">Início</div>
                    <div class="container mt-5 mb-5 border rounded-2 shadow bg-body-secondary rounded mx-auto">
                        <div class="row">
                            <div class="col fs-5 mt-5 d-flex justify-content-evenly">
                                <button type="button" class="btn btn-danger btn-lg" id="btnMudar1"><i class="bi bi-bell-fill"></i>
                                    Avisos
                                </button>

                                <button type="button" class="btn btn-info btn-lg" id="btnMudar2"><i class="bi bi-bar-chart-fill"></i>
                                    Gráficos
                                </button>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <!-- Informações do item Avisos -->
                                <div class="avisos m-5 p-0 fs-5">
                                    <p>
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatum, nihil
                                        earum
                                        odit
                                        necessitatibus, fugiat temporibus quo nemo eos rem aut sapiente. Necessitatibus
                                        dolorum
                                        facilis accusantium! Impedit nemo tenetur quas tempore?
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquid porro sequi
                                        nobis
                                        dicta, quia eos aut quae unde sed aperiam quas esse obcaecati nulla cumque!
                                        Commodi
                                        facilis fugiat modi quos!
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum corrupti
                                        tempore
                                        nostrum aspernatur distinctio quis? Eligendi aperiam itaque nisi officiis totam
                                        minus
                                        autem, quia fuga molestias. Sit laboriosam eius cumque.
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero asperiores
                                        tempore
                                        possimus nobis neque, cum corporis vitae. Rerum, quod ab? Nulla temporibus illum
                                        sapiente repellat sequi sunt aut reprehenderit laudantium.
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatum, nihil
                                        earum
                                        odit
                                        necessitatibus, fugiat temporibus quo nemo eos rem aut sapiente. Necessitatibus
                                        dolorum
                                        facilis accusantium! Impedit nemo tenetur quas tempore?
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquid porro sequi
                                        nobis
                                        dicta, quia eos aut quae unde sed aperiam quas esse obcaecati nulla cumque!
                                        Commodi
                                        facilis fugiat modi quos!
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum corrupti
                                        tempore
                                        nostrum aspernatur distinctio quis? Eligendi aperiam itaque nisi officiis totam
                                        minus
                                        autem, quia fuga molestias. Sit laboriosam eius cumque.
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero asperiores
                                        tempore
                                        possimus nobis neque, cum corporis vitae. Rerum, quod ab? Nulla temporibus illum
                                        sapiente repellat sequi sunt aut reprehenderit laudantium.
                                    </p>
                                </div>
                            </div>
                            <!-- Tabela de cada classe terapêuticas -->
                            <div class="grafico">
                                <div class="row">
                                    <div class="col d-flex flex-wrap justify-content-evenly m-3">
                                        <button class="border-0 mb-3 bg-transparent text-start" id="btnTrocar1">Antibióticos</button>
                                        <button class="border-0 mb-3 bg-transparent text-start" id="btnTrocar2">Probióticos</button>
                                        <button class="border-0 mb-3 bg-transparent text-start" id="btnTrocar3">Antialérgicos</button>
                                        <button class="border-0 mb-3 bg-transparent text-start">Antidepressivos</button>
                                        <button class="border-0 mb-3 bg-transparent text-start">Anti-inflamatórios</button>
                                    </div>
                                </div>
                                <!-- Linha e Coluna que serão exibidas as tabelas -->
                                <div class="row">
                                    <div class="col ms-5 mb-5 me-5">
                                        <!-- Conteudo Item 1 -->
                                        <div class="antibioticos">
                                            <div class="card card-body">
                                                <div class="h2 text-center mb-5 mt-3">Antibióticos</div>
                                                <div class="table-responsive ms-5 me-5">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">Nome</th>
                                                                <th scope="col">Quantidade</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="table-group-divider">
                                                            <?php foreach ($resultado as $produtos) { ?>

                                                                <tr>
                                                                    <td>
                                                                        <?= $produtos['id'] ?>
                                                                    </td>
                                                                    <td>
                                                                        <?= $produtos['nome'] ?>
                                                                    </td>
                                                                    <td>
                                                                        <div class="progress" role="progressbar" aria-label="success example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                                                            <div class="progress-bar bg-success" style="width: 100%">100%</div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            <?php } ?>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Conteudo Item 2  -->
                                        <div class="probioticos" style="display: none">
                                            <div class="card card-body">
                                                <div class="h2 text-center mb-5 mt-3">Probióticos</div>
                                                <div class="table-responsive ms-5 me-5">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">Nome</th>
                                                                <th scope="col">Quantidade</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="table-group-divider">
                                                            <?php foreach ($resultado as $produtos) { ?>

                                                                <tr>
                                                                    <td>
                                                                        <?= $produtos['id'] ?>
                                                                    </td>
                                                                    <td>
                                                                        <?= $produtos['nome'] ?>
                                                                    </td>
                                                                    <td>
                                                                        <div class="progress" role="progressbar" aria-label="primary example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                                                            <div class="progress-bar bg-primary" style="width: 100%">100%</div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            <?php } ?>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Conteudo Item 3  -->
                                        <div class="antialergicos" style="display: none">
                                            <div class="card card-body">
                                                <div class="h2 text-center mb-5 mt-3">Antialérgicos</div>
                                                <div class="table-responsive ms-5 me-5">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">Nome</th>
                                                                <th scope="col">Quantidade</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="table-group-divider">
                                                            <?php foreach ($resultado as $produtos) { ?>

                                                                <tr>
                                                                    <td>
                                                                        <?= $produtos['id'] ?>
                                                                    </td>
                                                                    <td>
                                                                        <?= $produtos['nome'] ?>
                                                                    </td>
                                                                    <td>
                                                                        <div class="progress" role="progressbar" aria-label="danger example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                                                            <div class="progress-bar bg-danger" style="width: 100%">100%</div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            <?php } ?>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
        <script src="script/script.js"></script>

</html>