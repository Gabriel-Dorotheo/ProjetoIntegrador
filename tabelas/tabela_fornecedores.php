<div class="container fornecedores overflow-hidden" style="display: none;">
    <div class="row">
        <div class="col mx-auto">
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
                                <button type="submit" class="btn btn-primary btn-sm fs-5 me-3"><i class="bi bi-pencil-square"></i></button>

                                <button type="submit" class="btn btn-danger btn-sm fs-5">
                                    <i class="bi bi-trash3"></i></button></a>
                            </td>
                        </tr>
                    </tbody>
                <?php } ?>
            </table>
        </div>
    </div>
</div>