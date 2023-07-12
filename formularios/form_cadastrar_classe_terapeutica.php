<?php
require_once('classes/Classe_terapeutica.php');
$c = new Classe_terapeutica();
$resultado = $c->Listar();

require_once('classes/Classificacao.class.php');
$t = new Classificacao();
$tipo = $t->Listar();
?>


<h3 class="h3 text-center m-5">Cadastrar Classes e Tarjas</h3>



<div class="row">
    <div class="col-md-6">

        <div class="list-group mb-4">
            <button class="btn btn-success" type="button" data-bs-toggle="collapse" data-bs-target="#collapseClasse" aria-expanded="false" aria-controls="collapseClasse">
            <i class="bi bi-plus-circle"></i> Classe
            </button>
        </div>
        <div class="collapse" id="collapseClasse">
            <!-- Formulário de Classe Terapêutica -->
            <form action="actions/cadastrar_classe_terapeutica.php" method="POST">
                <div class="col-md-12">
                    <label for="tipo" class="form-label fw-bolder">Classe</label>
                    <input type="text" class="form-control" name="tipo" id="tipo" placeholder="Classe Terapêutica" required>
                    <input type="submit" class="btn btn-success fw-semibold mt-3 mb-5 mx-auto" value="Adicionar">
                </div>
            </form>
        </div>
    </div>
    <div class="col-md-6">
        <div class="list-group mb-4">
            <button class="btn btn-success" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTarja" aria-expanded="false" aria-controls="collapseTarja">
            <i class="bi bi-plus-circle"></i> Tarja
            </button>
        </div>
        <!-- Formulário de Tarja -->
        <div class="collapse" id="collapseTarja">
            <form action="actions/cadastrar_classificacao.php" method="POST">
                <div class="col-md-12">
                    <label for="tipo" class="form-label fw-bolder">Tarja</label>
                    <input type="text" class="form-control" name="tipo" id="tipo" placeholder="" required>
                    <input type="submit" class="btn btn-success fw-semibold mt-3 mb-5 mx-auto" value="Adicionar">
                </div>
            </form>
        </div>
    </div>
</div>