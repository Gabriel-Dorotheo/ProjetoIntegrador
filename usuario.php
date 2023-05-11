<?php
require_once('classes/Usuario.class.php');
$usuario = new Usuario;
$resultado = $usuario->Listar();

?>


<!doctype html>
<html lang="pt-br">

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


    <style>
        /* Fonte google fonts */
        @import url('https://fonts.googleapis.com/css2?family=Kalam:wght@300;400&family=Noto+Sans:wght@300&family=Roboto+Condensed&display=swap');


        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .fundo {
            background: #2980B9;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to bottom, #FFFFFF, #6DD5FA, #2980B9);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to bottom, #FFFFFF, #6DD5FA, #2980B9);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        }

        .animar {
            /* Estilo da animação */
            animation: slideInLeft;

            /* tempo que irá levar para que ela seja executada. */
            animation-duration: 2s;
        }

        .posicaoModal {
            top: 180px;
        }

        .sombra-texto {
            text-shadow: 4px 4px 4px rgba(110, 110, 110, 0.72);
        }
    </style>
</head>

<body>

    <div class="container-fluid fundo overflow-hidden m-0 p-0">


        <!-- Linha da logo do site -->

        <div class="row bg-transparent">
            <!-- Coluna da logo -->
            <div class="col-4 text-center opacity-100">
                <logo class="animar fs-1 d-inline-flex mt-1 mb-2 sombra-texto">
                    Pharma Flow
                </logo>

            </div>

            <!-- Menu -->
            <div class="col mt-4 fs-4 d-flex justify-content-center">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="page1.html">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Usuários</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Produtos</a>
                    </li>
                </ul>
            </div>

            <!-- Coluna do icone de menu -->
            <div class="col-4 d-flex justify-content-end fs-5">
                <nav class="navbar navbar-expand-lg me-5">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="bi bi-person-circle"></span>
                    </button>
                    <div class="collapse navbar-collapse me-5" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="bi bi-person-circle fs-4"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Configurações</a></li>
                                    <li><a class="dropdown-item" href="#">Ajuda</a></li>
                                    <li><a class="dropdown-item" href="#">Sair</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <!-- titulo -->
                <div class="titulo text-center m-5">
                    <h1 class="h1">Gerenciamento de contas</h1>
                </div>

                <div class="container mt-5 mb-5 border border-0 rounded-2 shadow bg-white">

                    <!-- botões de adicionar, remover, alterar -->
                    <div class="row">
                        <div class="col p-3 mt-5 mb-0 d-flex justify-content-end me-5">

                            <button type="button" class="btn btn-success btn-sm me-3" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop" href="../forms/cadastrar_contato.php"><i
                                    class="bi bi-person-plus fs-5"></i></button>
                        </div>
                    </div>


                    <!-- Conteúdo da tabela -->
                    <div class="row">
                        <div class="col mb-5">
                            <div class="table-responsive ms-5 me-5">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nome</th>
                                            <th scope="col">Sobrenome</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Usuário</th>
                                            <th scope="col">Senha</th>
                                            <th scope="col">Editar</th>
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
                                                    <?= $usuario['sobrenome'] ?>
                                                </td>
                                                <td>
                                                    <?= $usuario['email'] ?>
                                                </td>
                                                <td>
                                                    <?= $usuario['usuario'] ?>
                                                </td>
                                                <td>
                                                    <?= $usuario['senha'] ?>
                                                </td>
                                                <td>
                                                    <button type="submit" class="btn btn-primary btn-sm fs-5 me-3"><i
                                                            class="bi bi-pencil-square"></i></button>

                                                    <a href="forms/deletar.php?id=<?= $usuario['id'] ?>"><button type="submit" class="btn btn-danger btn-sm fs-5">
                                                    <i class="bi bi-trash3"></i></button></a>
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


        <!-- rodapé -->
        <div class="row">
            <div class="col">
                <div class="rodape bg-black text-white text-center p-3">
                    &copy; Pharma Flow - 2023.
                </div>
            </div>
        </div>
    </div>




    <!-- Modal -->
    <div class="modal fade posicaoModal" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content bg-light bg-gradient">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Novo Usuário</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body mt-3">
                    <form class="row g-3" action="forms/cadastrar_contato.php" method="POST">

                        <div class="col-md-6">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" class="form-control" name="nome" id="nome">
                        </div>
                        <div class="col-md-6">
                            <label for="sobrenome" class="form-label">Sobrenome</label>
                            <input type="text" class="form-control" name="sobrenome" id="sobrenome">
                        </div>
                        <div class="col-12">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="">
                        </div>
                        <div class="col-12">
                            <label for="inputAddress2" class="form-label">Usuário</label>
                            <input type="text" class="form-control" name="usuario" id="inputAddress2" placeholder="">
                        </div>
                        <div class="col-md-12">
                            <label for="senha" class="form-label">Senha</label>
                            <input type="password" class="form-control" name="senha" id="senha">
                        </div>
                        <div class="col-md-12">
                            <label for="repetirSenha" class="form-label">Repetir Senha</label>
                            <input type="password" class="form-control" name="repetirSenha" id="repetirSenha">
                        </div>
                        <div>
                            <input type="submit" class="btn btn-primary" value="Criar">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        </div>
                    </form>
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

    <!-- Sweet Alert  -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>