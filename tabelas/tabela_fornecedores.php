<div class="container fornecedores overflow-hidden" style="display: none;">
    <div class="row">
        <div class="col mx-auto">
            <h1 class="h1 text-center mb-5">Fornecedores</h1>
            <div class="table-responsive ms-5 me-5">
                <table class="table">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Razão Social</th>
                            <th scope="col">CNPJ</th>
                            <th scope="col">Email</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Editar</th>

                        </tr>
                    </thead>
                    <?php foreach ($nm_fornecedor as $f) { ?>
                        <tbody class="text-center">
                            <tr>
                                <th scope="row"><?= $f['id'] ?></th>
                                <td><?= $f['nome'] ?></td>
                                <td><?= $f['razao_social'] ?></td>
                                <td><?= $f['cnpj'] ?></td>
                                <td><?= $f['id_email'] ?></td>
                                <td><?= $f['id_telefone'] ?></td>
                                <td>

                                <button type="submit" class="btn btn-primary btn-sm fs-5 me-3 mb-2">
                                    <i class="bi bi-pencil-square">
                                    </i>
                                </button>
                                    <a href="actions/deletar_fornecedor.php?id=<?= $f['id'] ?>" onclick="confirmar(<?= $f['id']; ?>); return false;">
                                        <button type="submit" class="btn btn-danger btn-sm fs-5 me-3 mb-2">
                                            <i class="bi bi-trash3"></i>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                    </tbody>
                <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>