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
    <link rel="stylesheet" href="estilo/style.css">
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
                        <a class="nav-link link-body-emphasis" href="usuario.php">Usuários</a>
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

        <div class="row">
            <div class="col">
                <!-- titulo -->
                <div class="titulo text-center m-5 sombra-texto text-white">
                    <h1 class="h1">Gerenciamento de contas</h1>
                </div>

                <div class="container mt-5 mb-5 border border-0 rounded-2 shadow bg-body-secondary">
                    <!-- botões de adicionar -->
                    <div class="row">
                        <div class="col p-3 mt-3 d-flex justify-content-end me-5">
                            <button type="button" class="btn btn-success" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop" href="../actions/cadastrar_contato.php"><i
                            class="bi bi-person-plus fs-5"></i> Adicionar Usuário</button>
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
                                            <th scope="col">Email</th>
                                            <th scope="col">Nível</th>
                                            <th scope="col">Telefone</th>
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
                                                    <?= $usuario['usuario_email'] ?>
                                                </td>
                                                <td>
                                                    <?= $usuario['nivel_usuario'] ?>
                                                </td>
                                                <td>
                                                    <?= $usuario['usuario_telefone'] ?>
                                                </td>
                                                <td>
                                                    <button type="submit" class="btn btn-primary btn-sm fs-5 me-3"
                                                        data-bs-toggle="modal" data-bs-target="#editar"
                                                        data-bs-nome="<?= $usuario['nome']; ?>"
                                                        data-bs-email="<?= $usuario['usuario_email']; ?>"
                                                        data-bs-nivel="<?= $usuario['id_nivel']; ?>"
                                                        data-bs-telefone="<?= $usuario['usuario_telefone']; ?>"><i
                                                            class="bi bi-pencil-square"></i></button>

                                                    <a href="actions/deletar_usuario.php?id=<?= $usuario['id'] ?>"><button
                                                            type="submit" class="btn btn-danger btn-sm fs-5">
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


    <!-- modal editar -->

    <!-- edt = editar -->
    <!-- Modal -->
    <div class="modal fade" id="editar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Editar</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3" action="actions/cadastrar_contato.php" method="POST">

                        <div class="col-md-6">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" class="form-control" name="nome" id="edtNome" required autofocus>
                        </div>
                        <div class="col-6">
                            <label for="usuario_telefone" class="form-label">Telefone</label>
                            <input type="tel" class="form-control" name="usuario_telefone" id="edtTelefone"
                                placeholder="" required>
                        </div>
                        <div class="col-12">
                            <label for="id_nivel" class="form-label">Nível de acesso</label>
                            <div class="input-group mb-3">
                                <select class="custom-select" id="edtNivel" name="id_nivel">
                                    <option value="1">1 - Administrador</option>
                                    <option value="2">2 - Moderador</option>
                                    <option value="3">3 - Visitante</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="usuario_email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="usuario_email" id="edtEmail" required>
                        </div>
                        <div>
                            <input type="submit" class="btn btn-primary" value="Salvar">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal cadastrar -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content bg-light bg-gradient">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Novo Usuário</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body mt-3">
                    <form class="row g-3" action="actions/cadastrar_contato.php" method="POST">

                        <div class="col-md-6">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" class="form-control" name="nome" id="nome" required autofocus>
                        </div>
                        <div class="col-6">
                            <label for="usuario_telefone" class="form-label">Telefone</label>
                            <input type="tel" class="form-control" name="usuario_telefone" id="usuario_telefone"
                                placeholder="" required>
                        </div>
                        <div class="col-12">
                            <label for="id_nivel" class="form-label">Nível de acesso</label>
                            <div class="input-group mb-3">
                                <select class="custom-select" id="id_nivel" name="id_nivel">
                                    <option value="1">1 - Administrador</option>
                                    <option value="2">2 - Moderador</option>
                                    <option value="3">3 - Visitante</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="usuario_email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="usuario_email" id="usuario_email" required>
                        </div>
                        <div class="col-md-12">
                            <label for="senha" class="form-label">Senha</label>
                            <input type="password" class="form-control" name="senha" id="senha" required>
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

    <!-- Jquery Mask -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/0.9.0/jquery.mask.min.js"
        integrity="sha512-oJCa6FS2+zO3EitUSj+xeiEN9UTr+AjqlBZO58OPadb2RfqwxHpjTU8ckIC8F4nKvom7iru2s8Jwdo+Z8zm0Vg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Sweet Alert  -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="script/script.js"></script>
</body>

</html>