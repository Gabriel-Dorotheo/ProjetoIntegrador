<form class="row g-3" action="actions/cadastrar_produto.php" method="POST">
    <div class="h3 text-center mt-5">Cadastrar Produto</div>
    <div class="col-md-8 mx-auto">
        <label for="nome" class="form-label fw-bolder">Nome</label>
        <input type="text" class="form-control" name="nome" id="nome" required>
    </div>
    <div class="col-md-8 mx-auto">
        <label for="id_classificacao" class="form-label fw-bolder">Tarja</label><br>
        <select class="form-select" name="id_classificacao" id="id_classificacao" style="min-width: 200px; " required>
            <option selected>Defina uma tarja</option>
            <?php foreach($valor as $listarClassificacao) { ?>
            <option value="<?= $listarClassificacao['id'] ?>"><?= $listarClassificacao['tipo'] ?></option>
            <?php } ?>
        </select>
    </div>
    <div class="col-md-8 mx-auto">
        <label for="id_tipo" class="form-label fw-bolder">Classe Terapêutica</label><br>
        <select class="form-select" name="id_tipo" id="id_tipo" style="min-width: 200px;">
            <option selected value="0">Defina uma classe</option>
            <?php foreach($listarClasse as $listarClass) { ?>
            <option value="<?= $listarClass['id'] ?>"><?= $listarClass['tipo'] ?></option>
            <?php } ?>

        </select>

    </div>
    <div class="col-md-8 mx-auto">
        <label for="id_fornecedor" class="form-label fw-bolder">Fornecedor</label><br>
        <select class="form-select" name="id_fornecedor" id="id_fornecedor" style="min-width: 200px;">
            <option selected>Defina um fornecedor</option>
            <?php foreach($nm_fornecedor as $nomeFornecedor) { ?>
            <option value="<?= $nomeFornecedor['id'] ?>"><?= $nomeFornecedor['nome'] ?></option>
            <?php } ?>
        </select>
    </div>
    <div class="col-md-8 mx-auto">
        <label for="descricao" class="form-label fw-bolder">Descrição</label><br>
        <textarea name="descricao" id="descricao" rows="2" cols="60"></textarea><br>
        <input type="submit" class="btn btn-success fw-semibold mt-5" value="Adicionar">
    </div>
</form>