<?php
require_once('classes/Usuario.class.php');
$usuario = new Usuario;
$resultado = $usuario->Listar();

?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Início | Pharma Flow</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- Meu CSS -->
    <link rel="stylesheet" href="estilo/style.css">
</head>

<body>

    <div class="container-fluid overflow-x-hidden p-0 m-0 ">

        <!-- Linha da logo do site -->

        <div class="row bg-transparent">
            <!-- Coluna da logo -->
            <div class="col-3 text-center">
                <logo class="animar fs-1 d-inline-flex mt-1 mb-2">
                    <div class="letra">Pharma Flow</div>
                </logo>
            </div>

            <div class="col-6 mt-4 fs-4 d-flex justify-content-center">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link link-body-emphasis" aria-current="page" href="inicio.php">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="usuario.php">Usuários</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="produtos.php">Produtos</a>
                    </li>
                </ul>
            </div>

            <!-- Coluna do icone de menu -->
            <div class="col-2 d-flex justify-content-between mt-4">
                <div class="dropdown">
                    <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-circle fs-4"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Configurações</a></li>
                        <li><a class="dropdown-item" href="#">Ajuda</a></li>
                        <li><a class="dropdown-item" href="index.html">Sair</a></li>
                    </ul>
                </div>
                <!-- botão tema -->
                <div class="col">
                    <div class="button">
                        <div class="ball"></div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Menu -->
        <div class="row">
            <div class="col">
                <div class="h1 text-center text-white m-5 sombra-texto">Início</div>
                <div class="container mt-5 mb-5 border rounded-2 shadow bg-body-secondary rounded">
                    <div class="row">
                        <div class="col p-4 fs-5 mt-5 d-flex justify-content-evenly">
                            <button type="button" class="btn btn-danger btn-lg" id="btnMudar1"><i
                                    class="bi bi-bell-fill"></i>
                                Avisos
                            </button>

                            <button type="button" class="btn btn-info btn-lg" id="btnMudar2"><i
                                    class="bi bi-bar-chart-fill"></i>
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
                                    <button class="border-0 mb-3 bg-transparent text-start"
                                        id="btnTrocar1">Antibióticos</button>
                                    <button class="border-0 mb-3 bg-transparent text-start"
                                        id="btnTrocar2">Probióticos</button>
                                    <button class="border-0 mb-3 bg-transparent text-start"
                                        id="btnTrocar3">Antialérgicos</button>
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
                                            <div class="h2 text-center mb-5 mt-3">Classe Terapêutica</div>
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
                                                        <?php foreach ($resultado as $usuario) { ?>

                                                            <tr>
                                                                <td>
                                                                    <?= $usuario['id'] ?>
                                                                </td>
                                                                <td>
                                                                    <?= $usuario['nome'] ?>
                                                                </td>
                                                                <td>
                                                                    <div class="progress" role="progressbar"
                                                                        aria-label="success example" aria-valuenow="100"
                                                                        aria-valuemin="0" aria-valuemax="100">
                                                                        <div class="progress-bar bg-success"
                                                                            style="width: 100%">100%</div>
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
                                    <div class="probioticos">
                                        <div class="card card-body">
                                            <div class="h2 text-center mb-5 mt-3">Classe Terapêutica</div>
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
                                                        <?php foreach ($resultado as $usuario) { ?>

                                                            <tr>
                                                                <td>
                                                                    <?= $usuario['id'] ?>
                                                                </td>
                                                                <td>
                                                                    <?= $usuario['nome'] ?>
                                                                </td>
                                                                <td>
                                                                    <div class="progress" role="progressbar"
                                                                        aria-label="primary example" aria-valuenow="100"
                                                                        aria-valuemin="0" aria-valuemax="100">
                                                                        <div class="progress-bar bg-primary"
                                                                            style="width: 100%">100%</div>
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
                                    <div class="antialergicos">
                                        <div class="card card-body">
                                            <div class="h2 text-center mb-5 mt-3">Classe Terapêutica</div>
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
                                                        <?php foreach ($resultado as $usuario) { ?>

                                                            <tr>
                                                                <td>
                                                                    <?= $usuario['id'] ?>
                                                                </td>
                                                                <td>
                                                                    <?= $usuario['nome'] ?>
                                                                </td>
                                                                <td>
                                                                    <div class="progress" role="progressbar"
                                                                        aria-label="danger example" aria-valuenow="100"
                                                                        aria-valuemin="0" aria-valuemax="100">
                                                                        <div class="progress-bar bg-danger"
                                                                            style="width: 100%">100%</div>
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
    <div class="row">
        <div class="col">
            <div class="bg-black text-white text-center p-3">
                &copy; Pharma Flow - 2023.
            </div>
        </div>
    </div>

    </div>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>

    <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
        integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Meu Javascript -->
    <script src="script/script.js"></script>

    <script>
        $("#btnTrocar1").click(function () {
            $(".antibioticos").fadeIn();
            $(".probioticos").hide();
            $(".antialergicos").hide();
        })
        $("#btnTrocar2").click(function () {
            $(".probioticos").fadeIn();
            $(".antibioticos").hide();
            $(".antialergicos").hide();
        })
        $("#btnTrocar3").click(function () {
            $(".antialergicos").fadeIn();
            $(".antibioticos").hide();
            $(".probioticos").hide();
        })

    </script>

</html>