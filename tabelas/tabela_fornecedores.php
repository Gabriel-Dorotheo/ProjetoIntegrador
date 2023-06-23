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
                    </tr>
                </thead>
                <?php foreach ($resultado as $f) { ?>
                    <tbody class="text-center">
                        <tr>
                            <th scope="row"><?= $f['id'] ?></th>
                            <td><?= $f['nome'] ?></td>
                            <td><?= $f['razao_social'] ?></td>
                            <td><?= $f['cnpj'] ?></td>
                        </tr>
                    </tbody>
                <?php } ?>
            </table>
        </div>
    </div>
</div>