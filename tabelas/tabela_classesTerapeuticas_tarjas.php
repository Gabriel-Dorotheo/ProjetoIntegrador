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
                                <td>
                                <button type="submit" class="btn btn-primary btn-sm fs-5 mb-2">
                                    <i class="bi bi-pencil-square"></i>
                                </button>

                                <button type="submit" class="btn btn-danger btn-sm fs-5 mb-2">
                                    <i class="bi bi-trash3"></i>
                                </button>
                            </td>
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
                            <th scope="col">Editar</th>
                        </tr>
                    </thead>
                    <?php foreach ($tipo as $tarja) { ?>
                        <tbody class="text-center">
                            <tr>
                                <th scope="row"><?= $tarja['id'] ?></th>
                                <td scope="row"><?= $tarja['tipo'] ?></td>
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
</div>