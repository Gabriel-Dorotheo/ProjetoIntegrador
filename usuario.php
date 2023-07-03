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
    <title>Contas | Pharma Flow</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="estilo/style.css">
    <link rel="shortcut icon" href="img/pilulas.png" type="image/x-icon">
</head>

<body>

    
    <div class="container-fluid overflow-hidden m-0 p-0" style="min-height: 100vh;">

        <div class="row bg-transparent">
            <div class="col">
                <?php require_once('components/menu.php'); ?>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <!-- titulo -->
                <div class="titulo text-center m-5 sombra-texto text-white">
                    <h1 class="text-center text-white m-4 sombra-texto">Gerenciamento de contas</h1>
                </div>

                <div class="container mt-5 mb-5 border border-0 rounded-2 shadow bg-body-secondary">
                    <!-- botões de adicionar -->
                    <div class="row">
                        <div class="col p-3 mt-3 d-flex justify-content-end me-5">
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop" href="../actions/cadastrar_contato.php"><i class="bi bi-person-plus fs-5"></i> Adicionar Usuário</button>
                        </div>
                    </div>

                    <!-- tabela usuario -->
                    <div class="row">
                        <div class="col mb-5">
                            <?php require_once('tabelas/tabela_usuarios.php'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- rodapé -->
        <?php require_once('components/rodape.php') ?>
    </div>


    <!-- modal editar -->

    <!-- edt = editar -->
    <!-- Modal -->
    <div class="modal fade" id="editar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                            <input type="tel" class="form-control" name="usuario_telefone" id="edtTelefone" placeholder="" required>
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
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                            <input type="tel" class="form-control" name="usuario_telefone" id="usuario_telefone" placeholder="" required>
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
<!-- Botão back to top -->
<button
        type="button"
        class="btn btn-primary btn-floating btn-lg"
        id="btn-back-to-top"
        >
  <i class="bi bi-arrow-up-circle"></i>
</button>    

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Jquery Mask -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/0.9.0/jquery.mask.min.js" integrity="sha512-oJCa6FS2+zO3EitUSj+xeiEN9UTr+AjqlBZO58OPadb2RfqwxHpjTU8ckIC8F4nKvom7iru2s8Jwdo+Z8zm0Vg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Sweet Alert  -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="script/script.js"></script>
    <?php require_once('alertas.php'); ?>
</body>

</html>