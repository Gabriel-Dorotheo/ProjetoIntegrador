<?php
require_once('classes/Produtos.class.php');
$produtos = new Produtos;
$resultado = $produtos->Listar();
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
    <!-- Meu CSS -->
    <link rel="stylesheet" href="estilo/style.css">
    <!-- Javascript Data Table -->
    <link href="https://unpkg.com/tabulator-tables/dist/css/tabulator.min.css" rel="stylesheet">

</head>

<body>

    <div class="container-fluid overflow-hidden m-0 p-0">


        <!-- Linha da logo do site -->

        <div class="row bg-transparent">
            <!-- Coluna da logo -->
            <div class="col-3 text-center d-None-none">
                <logo class="animar fs-1 d-inline-flex mt-1 mb-2">
                    <div class="letra">Pharma Flow</div>

                </logo>

            </div>

            <div class="col-6 mt-4 fs-4 d-flex justify-content-center">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link text-white" aria-current="page" href="inicio.php">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="usuario.php">Usuários</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-body-emphasis" href="produtos.php">Produtos</a>
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

        <div class="row">
            <div class="col">
                <!-- titulo -->
                <div class="titulo text-center m-5 sombra-texto text-white">
                    <h1 class="h1">Gerenciamento de Produtos</h1>
                </div>

                <div class="container mt-5 mb-5 border border-0 rounded-2 shadow bg-body-secondary">

                    <!-- botões de adicionar -->
                    <div class="row">
                        <div class="col p-3 mt-3 d-flex justify-content-end me-5">
                            <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop" href="../actions/cadastrar_produto.php"><i
                                    class="bi bi-person-plus fs-5"></i> Adicionar Produto</button>
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
                                            <th scope="col">Classificação</th>
                                            <th scope="col">Nota Fiscal</th>
                                            <th scope="col">Tipo</th>
                                            <th scope="col">Editar</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-group-divider">
                                        <?php foreach ($resultado as $produto) { ?>
                                            <tr>
                                                <td>
                                                    <?= $produto['id'] ?>
                                                </td>
                                                <td>
                                                    <?= $produto['nome'] ?>
                                                </td>
                                                <td>
                                                    <?= $produto['tipo_classificacao'] ?>
                                                </td>
                                                <td>
                                                    <?= $produto['nota_fiscal'] ?>
                                                </td>
                                                <td>
                                                    <?= $produto['tipo_classe_terapeutica'] ?>
                                                </td>
                                                <td>
                                                <button type="submit" class="btn btn-primary btn-sm fs-5 me-3"><i
                                                        class="bi bi-pencil-square"></i></button>

                                                <a href="actions/deletar_produto.php?id=<?= $produto['id'] ?>"><button type="submit"
                                                        class="btn btn-danger btn-sm fs-5">
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
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content bg-light bg-gradient">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Adicionar Produto</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body mt-3">
                    <form class="row g-3" action="actions/cadastrar_produto.php" method="POST">

                        <div class="col-12">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" class="form-control" name="nome" id="nome">
                        </div>
                        <div class="col-md-6">
                            <label for="id_classificacao" class="form-label">Tarja</label><br>
                            <select name="id_classificacao" id="id_classificacao" style="width: 200px; ">
                                <option selected>Defina uma tarja</option>
                                <option value="1">Vermelha (Sem restrição médica)</option>
                            </select>
                            <button type="button" class="btn btn-sm btn-warning mt-3 fw-semibold">Adicionar
                                classe</button>
                        </div>
                        <div class="col-md-6">
                            <label for="id_tipo" class="form-label">Classe Terapêutica</label><br>
                            <select name="id_tipo" id="id_tipo" style="width: 200px; ">
                                <option selected>Defina uma classe</option>
                                <option value="1">Antibióticos</option>
                                <option value="2">Anticoagulantes</option>
                            </select>
                            <button type="button" class="btn btn-sm btn-warning mt-3 fw-semibold">Adicionar
                                tarja</button>
                        </div>
                        <div class="col-12">
                            <label for="nota_fiscal" class="form-label">Nota Fiscal</label>
                            <input type="text" class="form-control" name="nota_fiscal" id="nota_fiscal" placeholder="">
                        </div>
                        <div class="col-12">
                            <label for="descricao" class="form-label">Descrição</label><br>
                            <textarea name="descricao" id="descricao" cols="60"></textarea>
                        </div>
                        <div>
                            <input type="submit" class="btn btn-success" value="Adicionar">
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


    <script src="script/script.js"></script>
</body>

</html>