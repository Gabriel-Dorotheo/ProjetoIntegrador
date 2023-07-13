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
                            <th scope="col">Editar</th>
                        </tr>
                    </thead>
                    <?php foreach ($resultado as $class) { ?>
                        <tbody class="text-center">
                            <tr>
                                <th scope="row"><?= $class['id'] ?></th>
                                <td scope="row"><?= $class['tipo'] ?></td>
                                <td>
                                    <button type="submit" class="btn btn-primary btn-sm fs-5 mb-2" data-bs-toggle="modal" data-bs-target="#editarClasse" data-bs-id="<?= $class['id']; ?>" data-bs-tipo="<?= $class['tipo']; ?>">                                      
                                    <i class="bi bi-pencil-square"></i>
                                    </button>

                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
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
                                    <button type="submit" class="btn btn-primary btn-sm fs-5" data-bs-toggle="modal" data-bs-target="#editarTarja" data-bs-idTarja="<?= $tarja['id']; ?>" data-bs-tarja="<?= $tarja['tipo']; ?>"><i class="bi bi-pencil-square"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>
<?php require_once('alertas.php'); ?>


<!-- Modal para editar classe terapeutica -->
<div class="modal fade" id="editarClasse" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Editar Classe</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3" action="actions/editar_classe_terapeutica.php" method="POST">
                    <div class="col-md-2">
                        <label for="id" class="form-label">#</label>
                        <input type="text" class="form-control fw-semibold" name="id" id="edtIdClasse" readonly>
                    </div>
                    <div class="col-md-12">
                        <label for="classe" class="form-label">Nome</label>
                        <input type="text" class="form-control" name="nome" id="edtClasse">
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

<?php 
$editarTarja = new Classificacao();
$edtTarja = $editarTarja->Listar();
?>

<!-- Modal para editar classe tarja -->
<div class="modal fade" id="editarTarja" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Editar Tarja</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3" action="actions/editar_tarja.php" method="POST">
                    <div class="col-md-2">
                        <label for="id" class="form-label">#</label>
                        <input type="text" class="form-control fw-semibold" name="id" id="edtIdTarja" readonly>
                    </div>
                    <div class="col-md-12">
                        <label for="edtTarja" class="form-label">Nome</label>
                        <input type="text" class="form-control" name="tipo" id="edtTarja">
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