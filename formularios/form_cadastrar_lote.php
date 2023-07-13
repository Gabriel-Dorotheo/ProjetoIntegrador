<?php
require_once('classes/Produtos.class.php');
$listarProduto = new Produtos();
$listagem = $listarProduto->Listar();

require_once('classes/Fornecedor.class.php');
$listarFornecedor = new Fornecedor();
$listarFornec = $listarFornecedor->Listar();
?>


<div class="d-flex justify-content-end m-3">
    <a class="btn btn-success mt-5" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
        <i class="bi bi-plus-circle"></i> Lote
    </a>
</div>
<div class="collapse mb-5" id="collapseExample">
    <h3 class="h3 text-center mb-5">Cadastrar Lote</h3>
    <form class="row g-3" action="actions/cadastrar_lote.php" method="POST">
        <div class="col-md-6">
            <label for="cod_lote" class="form-label fw-bolder">Código</label>
            <input type="text" class="form-control" name="cod_lote" id="cod_lote" placeholder="784" required>
        </div>

        <div class="col-md-6">
            <label for="id_produto" class="form-label fw-bolder">Produto</label>
            <select class="form-select" name="id_produto" id="id_produto">
                <option selected value="0">Defina um produto</option>
                <?php foreach ($listagem as $pr) { ?>
                    <option value="<?= $pr['id'] ?>"><?= $pr['id'] ?> - <?= $pr['nome'] ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="col-md-6">
            <label for="id_fornecedor" class="form-label fw-bolder">Fornecedor</label>
            <select class="form-select" name="id_fornecedor" id="id_fornecedor">
                <option selected value="0">Defina o fornececdor</option>
                <?php foreach ($listarFornec as $lF) { ?>
                    <option value="<?= $lF['id'] ?>"><?= $lF['id'] ?> - <?= $lF['nome'] ?></option>
                <?php } ?>
            </select>
        </div>

        <div class="col-md-6">
            <label for="validade" class="form-label fw-bolder">Validade</label>
            <input type="date" class="form-control" name="validade" id="validade" required>
        </div>
        <div class="col-md-6">
            <label for="quantidade" class="form-label fw-bolder">Quantidade</label>
            <input type="text" class="form-control" name="quantidade" id="quantidade" required>
        </div>

        <div class="col-md-6">
            <label for="observacao" class="form-label fw-bolder">Observação</label><br>
            <textarea class="bg-white" name="observacao" id="observavao" rows="1" cols="30"></textarea><br>
        </div>
        <div class="col-md-3">
            <input type="submit" class="btn btn-success fw-semibold mt-3" value="Adicionar">
        </div>
    </form>
</div>