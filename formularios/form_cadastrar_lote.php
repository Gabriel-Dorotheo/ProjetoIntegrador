

<div class="d-flex justify-content-end m-3">
    <a class="btn btn-success mt-5" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
        <i class="bi bi-plus-circle"></i> Lote
    </a>
</div>
<div class="collapse mb-5" id="collapseExample">
    <h3 class="h3 text-center mb-5">Cadastrar Lote</h3>
    <form class="row g-3" action="actions/cadastrar_lote.php" method="POST">
        <div class="col-md-6">
            <label for="nome" class="form-label fw-bolder">Código</label>
            <input type="text" class="form-control" name="codigo" id="cod_lote" placeholder="784" required>
        </div>
        <div class="col-md-6">
            <label for="razao_social" class="form-label fw-bolder">Validade</label>
            <input type="text" class="form-control" name="validade" id="validade" placeholder="Ex: 10/10/20" required>
        </div>
        <div class="col-md-6">
            <label for="razao_social" class="form-label fw-bolder">Quantidade</label>
            <input type="text" class="form-control" name="qualidade" id="quantidade" placeholder="Ex: 10/10/20" required>
        </div>
       
        <div class="col-md-8 mx-auto">
        <label for="descricao" class="form-label fw-bolder">Observação</label><br>
        <textarea name="observacao" id="observavao" rows="2" cols="60"></textarea><br>
        <input type="submit" class="btn btn-success fw-semibold mt-5" value="Adicionar">
    </div>

    </form>
</div>