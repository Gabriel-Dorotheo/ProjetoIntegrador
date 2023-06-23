<h1 class="h1 text-center m-5">Fornecedores</h1>
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