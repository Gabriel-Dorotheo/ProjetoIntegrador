<div class="table-responsive me-5">
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
                        <button type="submit" class="btn btn-primary btn-sm fs-5 me-3" data-bs-toggle="modal" data-bs-target="#editar" data-bs-nome="<?= $usuario['nome']; ?>" data-bs-email="<?= $usuario['usuario_email']; ?>" data-bs-nivel="<?= $usuario['id_nivel']; ?>" data-bs-telefone="<?= $usuario['usuario_telefone']; ?>"><i class="bi bi-pencil-square"></i></button>

                        <a href="actions/deletar_usuario.php?id=<?= $usuario['id'] ?>"><button type="submit" class="btn btn-danger btn-sm fs-5">
                                <i class="bi bi-trash3"></i></button></a>
                    </td>
                </tr>
            <?php } ?>

        </tbody>
    </table>
</div>