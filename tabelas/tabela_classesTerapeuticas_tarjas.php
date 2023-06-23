<!-- Tabela das Classes Terapeuticas -->
<div class="row">
    <div class="col-12">
        <div class="row">
            <div class="col-md-6">
                <p class="fs-4 fw-semibold text-center">Classes</p>
                <table class="table">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tipo</th>
                        </tr>
                    </thead>
                    <?php foreach ($resultado as $class) { ?>
                        <tbody class="text-center">
                            <tr>
                                <th scope="row"><?= $class['id'] ?></th>
                                <td scope="row"><?= $class['tipo'] ?></td>
                            </tr>
                        </tbody>
                    <?php } ?>
                </table>
            </div>
            <!-- Tabela de Tarjas -->
            <div class="col-md-6">
                <p class="fs-4 fw-semibold text-center">Tarjas</p>
                <table class="table">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tipo</th>
                        </tr>
                    </thead>
                    <?php foreach ($tipo as $tarja) { ?>
                        <tbody class="text-center">
                            <tr>
                                <th scope="row"><?= $tarja['id'] ?></th>
                                <td scope="row"><?= $tarja['tipo'] ?></td>
                            </tr>
                        </tbody>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>