<div class="container fornecedores overflow-hidden" style="display: none;">
    <div class="row">
        <div class="col mx-auto">
            <h1 class="h1 text-center mb-5">Lote</h1>
            <div class="table-responsive ms-5 me-5">
                <table class="table">
                    <thead class="text-center">
                        <tr>

                            <th scope="col">Código</th>
                            <th scope="col">Validade</th>
                            <th scope="col">Quantidade</th>                       

                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php foreach ($lote as $l) { ?>
                            <tr>

                                <td><?= $l['codigo'] ?></td>
                                <td><?= $l['validade'] ?></td>
                                <td><?= $l['quantidade'] ?></td>                                
                                <td>

                                <button type="submit" class="btn btn-primary btn-sm fs-5 me-3">
                                    <i class="bi bi-pencil-square"></i></button>
                                    <a href="actions/editar_lote.php?id=<?= $l['id'] ?>" onclick="confirmar(<?= $l['id']; ?>); return false;">
                                        <button type="submit" class="btn btn-danger btn-sm fs-5 mb-2">
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