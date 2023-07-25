<div class="col mx-auto">
    <div class="table-responsive m-5">
        <table class="table" id="example">
            <thead class="text-center">
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Produto</th>
                    <th scope="col">Validade (ano/mes/dia)</th>
                    <th scope="col">Quantidade (g)</th>

                </tr>
            </thead>
            <tbody class="text-center">
                <?php foreach ($lote as $l) { ?>
                    <tr>
                        <td>
                            <?= $l['cod_lote'] ?>
                        </td>
                        <td>
                            <?= $l['produtos'] ?>
                        </td>
                        <td>
                            <?= $l['validade'] ?>
                        </td>
                        <td>
                            <?= $l['quantidade'] ?>  g
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>