<?php
$listarUsuario = new Usuario();
$lstUser = $listarUsuario->Listar();

?>

<div class="table-responsive ms-5">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Nível</th>
                <th scope="col">Telefone</th>
                <th scope="col">Editar</th>
            </tr>
        </thead>
        <?php foreach ($lstUser as $usuario) { ?>
            <tbody class="table-group">
                <tr>
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
                        <a href="#"><i class="bi bi-pencil-square fs-4 me-3" data-bs-toggle="modal" data-bs-target="#editarUser" data-bs-idUser="<?= $usuario['id'] ?>" data-bs-nome="<?= $usuario['nome'] ?>" data-bs-fone="<?= $usuario['usuario_telefone'] ?>" data-bs-email="<?= $usuario['usuario_email']?>" data-bs-nivel="<?= $usuario['id_nivel'] ?>" data-bs-senha="<?= $usuario['senha'] ?>" style="cursor: pointer;"></i></a>

                        <a href="actions/deletar_usuario.php?id=<?= $usuario['id'] ?>" onclick="confirmarConta(<?= $usuario['id']; ?>); return false;">
                                <i class="bi bi-trash3 fs-4"></i>

                        </a>
                    </td>
                </tr>
            </tbody>
        <?php } ?>
    </table>
</div>
<?php require_once('alertas.php'); ?>
<!-- modal editar -->
<!-- edt = editar -->
<div class="modal fade" id="editarUser" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Editar usuário</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3" action="actions/editar_usuario.php" method="POST">
                    <div class="col-md-2">
                        <label for="id" class="form-label">#</label>
                        <input type="text" id="edtIdUser" class="form-control fw-semibold" name="id" id="edtIdUser" readonly>
                    </div>
                    <hr>
                    <div class="col-md-6">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" class="form-control" name="nome" id="edtNome" autofocus>
                    </div>
                    <div class="col-md-6">
                        <label for="usuario_telefone" class="form-label">Telefone</label>
                        <input type="text" class="form-control" name="usuario_telefone" id="edtFoneUser">
                    </div>
                    <div class="col-md-6">
                        <label for="usuario_email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="usuario_email" id="edtEmailUser">
                    </div>
                    <div class="col-md-6">
                        <label for="senha" class="form-label">Senha</label>
                        <input type="password" class="form-control" name="senha" id="edtSenhaUser">
                    </div>
                    <div class="col-md-6">
                        <label for="edtNivelUser" class="form-label">Nível de acesso</label>
                        <div class="input-group mb-3">
                            <select class="form-select" id="edtNivelUser" name="id_nivel">
                                <option value="1">1 - Administrador</option>
                                <option value="2">2 - Moderador</option>
                                <option value="3">3 - Visitante</option>
                            </select>
                        </div>
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