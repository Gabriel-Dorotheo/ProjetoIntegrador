<?php
require_once('classes/Classe_terapeutica.php');
$c = new Classe_terapeutica();
$resultado = $c->Listar();

require_once('classes/Classificacao.class.php');
$t = new Classificacao();
$tipo = $t->Listar();
?>


<h1 class="h1 text-center m-5">Cadastrar Classes e Tarjas</h1>



<div class="row">
    <div class="col-10 d-flex justify-content-around">
        <!-- Formulário de Classe Terapêutica -->
        <form action="actions/cadastrar_classe_terapeutica.php" method="POST">
            <div class="col-md-12">
                <label for="tipo" class="form-label fw-bolder">Classe</label>
                <input type="text" class="form-control" name="tipo" id="tipo" placeholder="Classe Terapêutica" required>
                <input type="submit" class="btn btn-success fw-semibold mt-3 mb-5 mx-auto" value="Adicionar">
            </div>
        </form>

        <!-- Formulário de Tarja -->
        <form action="actions/cadastrar_classificacao.php" method="POST">
            <div class="col-md-12">
                <label for="tipo" class="form-label fw-bolder">Tarja</label>
                <input type="text" class="form-control" name="tipo" id="tipo" placeholder="" required>
                <input type="submit" class="btn btn-success fw-semibold mt-3 mb-5 mx-auto" value="Adicionar">
            </div>
        </form>
    </div>
</div>