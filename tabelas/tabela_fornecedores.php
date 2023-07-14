<div class="container fornecedores overflow-hidden" style="display: none;">
    <div class="row">
        <div class="col mx-auto">
            <h1 class="h1 text-center mb-5">Fornecedores</h1>
            <div class="table-responsive ms-5 me-5">
                <table class="table">
                    <thead class="text-center">
                        <tr>
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
                                <td><?= $f['nome'] ?></td>
                                <td><?= $f['razao_social'] ?></td>
                                <td><?= $f['cnpj'] ?></td>
                                <td><?= $f['email'] ?></td>
                                <td><?= $f['telefone'] ?></td>
                                <td>

                                    <button type="submit" class="btn btn-primary btn-sm fs-5 me-3 mb-2" data-bs-toggle="modal" data-bs-target="#editarFornecedor" 
                                    data-bs-idFornecedor="<?= $f['id'] ?>"
                                    data-bs-nomeFornecedor="<?= $f['nome']?>"
                                    data-bs-emailFornecedor="<?= $f['email'] ?>"
                                    data-bs-telefoneFornecedor="<?= $f['telefone'] ?>"
                                    data-bs-razaoFornecedor="<?= $f['razao_social'] ?>"
                                    data-bs-cnpjFornecedor="<?= $f['cnpj']?>"

                                     ;>
                                        
                                     <i class="bi bi-pencil-square"></i>

                                    </button>
                                    <a href="actions/deletar_fornecedor.php?id=<?= $f['id'] ?>" onclick="confirmar(<?= $f['id']; ?>); return false;">
                                        <button type="submit" class="btn btn-danger btn-sm fs-5 me-3 mb-2">
                                            <i class="bi bi-trash3 fs-4"></i>
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

<div class="modal fade" id="editarFornecedor" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Editar</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3" action="actions/editar_fornecedor.php" method="POST">
                    <div class="col-md-2">
                        <label for="id" class="form-label">#</label>
                        <input type="text" id="edtIdFornecedor" class="form-control fw-semibold" name="id" readonly>
                    </div>
                    <hr>
                    <div class="col-md-6">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" class="form-control" name="nome" id="edtNomeFornecedor" autofocus>
                    </div>
                    <div class="col-md-6">
                        <label for="telefone" class="form-label">Telefone</label>
                        <input type="text" class="form-control fone" name="telefone" id="edtTelefoneFornecedor">
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="edtEmailFornecedor">
                    </div>
                    <div class="col-md-6">
                        <label for="razao_social" class="form-label">Razão Social</label>
                        <input type="text" class="form-control" name="razao_social" id="edtRazaoFornecedor">
                    </div>
                    <div class="col-md-6">
                        <label for="cnpj" class="form-label">Cnpj</label>
                        <input type="text" class="form-control cnp" name="cnpj" id="edtCnpjFornecedor">
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