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


    <style>
        /* Fonte google fonts */
        @import url('https://fonts.googleapis.com/css2?family=Kalam:wght@300;400&family=Noto+Sans:wght@300&family=Roboto+Condensed&display=swap');


        body {
            font-family: 'Kalam', cursive;
            font-family: 'Noto Sans', sans-serif;
            font-family: 'Roboto Condensed', sans-serif;
        }

        .fundo {
            background: rgb(175, 255, 226);
            background: linear-gradient(270deg, rgba(175, 255, 226, 1) 0%, rgba(240, 210, 255, 1) 100%);
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

        .swal-modal{
            background-color: white;
        }

        .swal-text{
            text-align: center;
            color: black;
        }
        .swal-title{
            color: black;
        }
    </style>
</head>

<body>

    <div class="container-fluid fundo overflow-hidden m-0 p-0">


        <!-- Linha da logo do site -->

        <div class="row border border-bottom border-secondary-subtle bg-white">
            <!-- Coluna da logo -->
            <div class="col-3 text-center">
                <logo class="animar fs-1 d-inline-flex mt-1">
                    Pharma Flow
                </logo>

            </div>


            <!-- Coluna do icone de menu -->
            <div class="col-9 d-flex justify-content-end fs-3">
                <nav class="navbar navbar-expand-lg me-5">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle me-5" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-person-circle"></i>
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


        <!-- Menu -->

        <div class="row">
            <div class="col mt-5 fs-4 d-flex justify-content-center">
                <ul class="nav nav-underline ">
                    <li class="nav-item">
                        <a class="nav-link" href="page1.html">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Usuários</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Configurações</a>
                    </li>
                </ul>
            </div>
        </div>


        <!-- Menu lateral esquerdo -->
        <div class="row">
            <div class="col">
                <div class="container mt-5 mb-5 border rounded-2 shadow bg-white rounded">
                    <div class="row">


                        <div class="titulo text-center m-5">
                            <h1 class="h1">Gerenciamento de contas</h1>
                        </div>


                        <div class="col-2 p-4 fs-5">
                            <ul class="list-group list-group-flush border border-0">
                                <a href="#" class="list-group-item list-group-item-action" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop">Novo
                                    Usuário</a>
                            </ul>
                        </div>
                        <!-- Conteúdo da tabela -->
                        <div class="col mb-5">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nome</th>
                                            <th scope="col">Sobrenome</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Usuário</th>
                                            <th scope="col">Senha</th>
                                            <th scioe="col">Editar</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-group-divider">
                                        <?php for ($i = 0; $i < 10; $i++) { ?>
                                            <tr>
                                                <th scope="row">
                                                    <?= $i + 1 ?>
                                                </th>
                                                <td>Lorem</td>
                                                <td>Ipsum</td>
                                                <td>Lorem@Ipsum.com</td>
                                                <td>Lorem</td>
                                                <td>ipsum@1234</td>
                                                <td class="d-flex justify-content-around">
                                                    <button type="button" class="btn btn-primary btn-sm"><i
                                                            class="bi bi-pencil-square"></i></button>
                                                    <button type="button" class="btn btn-danger btn-sm "
                                                        onclick="removerConta()"><i class="bi bi-trash3"></i></button>
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
            <div class="modal-content fundo">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Novo Usuário</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body mt-3">
                    <form class="row g-3">
                        <div class="col-md-6">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="email" class="form-control" id="nome">
                        </div>
                        <div class="col-md-6">
                            <label for="sobrenome" class="form-label">Sobrenome</label>
                            <input type="password" class="form-control" id="sobrenome">
                        </div>
                        <div class="col-12">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" placeholder="">
                        </div>
                        <div class="col-12">
                            <label for="inputAddress2" class="form-label">Usuário</label>
                            <input type="text" class="form-control" id="inputAddress2" placeholder="">
                        </div>
                        <div class="col-md-12">
                            <label for="senha" class="form-label">Senha</label>
                            <input type="text" class="form-control" id="senha">
                        </div>
                        <div class="col-md-12">
                            <label for="repetirSenha" class="form-label">Repetir Senha</label>
                            <input type="text" class="form-control" id="repetirSenha">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary" onclick="criarConta()">Criar</button>
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

    <script>
        //quando clicado no botão Criar do modal de Novo Usuário, irá aparecer uma janela de success (warning, dander, error, success)
        function criarConta() {
            swal({
                title: "Sucesso!",
                text: "Novo usuário adicionado!",
                icon: "success",
                button: "Concluir",
            });
        }

        function removerConta() {
            swal({
                title: "Tem certeza?",
                text: "Uma vez excluído, você não poderá recuperar os dados deste usuário!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
                .then((willDelete) => {
                    if (willDelete) {
                        swal("Usuário removido com sucesso!", {
                            icon: "success",
                        });
                    }
                });
        }
    </script>

</body>

</html>