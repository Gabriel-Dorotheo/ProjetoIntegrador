<div class="posicaoBotao d-flex justify-content-end m-3">
    <a class="btn btn-success mt-5" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
        <i class="bi bi-plus-circle"></i> Fornecedor
    </a>
</div>
<div class="collapse mb-5" id="collapseExample">
        <h1 class="h1 text-center mb-5">Cadastrar Fornecedor</h1>
        <form class="row g-3" action="actions/cadastrar_fornecedor.php" method="POST">
            <div class="col-md-6 mx-auto">
                <label for="nome" class="form-label fw-bolder">Nome</label>
                <input type="text" class="form-control" name="nome" id="nome" placeholder="Elisa Aparecida de Jesus" required>
</div>
            <div class="col-md-6 mx-auto">
                <label for="razao_social" class="form-label fw-bolder">Razão Social</label>
                <input type="text" class="form-control" name="razao_social" id="razao_social" placeholder="Ex: Louças Brasil LTDA" required>
            </div>
            <div class="col-md-6">
                <label for="cnpj" class="form-label fw-bolder">CNPJ</label>
                <input type="text" class="form-control" name="cnpj" id="cnpj" placeholder="XX.XXX.XXX/0001-XX" required>
                <input type="submit" class="btn btn-success fw-semibold mt-3 mb-5 mx-auto" value="Adicionar">
            </div>
        </form>
</div>