<?php
require_once('classes/Produtos.class.php');


// $tabela = $p->ListarTudo();
// Numero total de registros no banco de dados 
$p = new Produtos();
$totalRegistros = $p->ObterQtdRegistro()[0]['qtd'];
// Numero de registros exibidos por pagina 
$registrosPorPagina = 5;
// Calcula o numero total de paginas 
$totalPaginas = ceil($totalRegistros / $registrosPorPagina);
// Obtem o numero da pagina atual 
$paginaAtual = isset($_GET['pagina']) ? $_GET['pagina'] : 1;
// Calcula o indice do primeiro registro da pagina atual 
$primeiroRegistro = ($paginaAtual - 1) * $registrosPorPagina;

$p->inicio = $primeiroRegistro;
$p->maximo = $registrosPorPagina;
$tabela = $p->ListarPag();

require_once('classes/Fornecedor.class.php');
$fornecedor = new Fornecedor;
$nm_fornecedor = $fornecedor->Listar();

require_once('classes/Classificacao.class.php');
$classificacao = new Classificacao();
$valor = $classificacao->Listar();

require_once('classes/Classe_terapeutica.php');
$classeTerapeutica = new Classe_terapeutica();
$listarClasse = $classeTerapeutica->Listar();
?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Produtos | Pharma Flow</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- Meu CSS -->
    <link rel="stylesheet" href="estilo/style.css">
    <!-- Javascript Data Table -->
    <link href="https://unpkg.com/tabulator-tables/dist/css/tabulator.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/pilulas.png" type="image/x-icon">

</head>

<body>

    <div class="container-fluid overflow-hidden m-0 p-0" style="min-height: 100vh;">

        <div class="row bg-transparent">
            <div class="col">
                <?php require_once('components/menu.php'); ?>
            </div>
        </div>


        <div class="row">
            <div class="col">
                <!-- titulo -->
                <div class="titulo text-center m-5 sombra-texto text-white">
                    <h1 class="text-center text-white m-4 sombra-texto">Gerenciamento de Produtos</h1>
                </div>

                <div class="container mt-5 mb-5 border border-0 rounded-2 shadow bg-body-secondary">
                    <!-- Conteúdo da tabela -->
                    <div class="row">
                        <!-- Menu Lateral -->
                        <div class="col-md-2">
                            <div class="list-group mt-5">
                                <button type="button" class="btn btn-sm btn-primary fw-semibold mb-3 mt-3" id="gerenciar">Gerenciar
                                    Produtos</button>
                                    <button class="btn btn-sm btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-plus-circle"></i> Adicionar
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#" id="adicionarPr">Produto</a></li>
                                        <li><a class="dropdown-item" href="#" id="fornecedor">Fornecedor</a></li>
                                        <li><a class="dropdown-item" href="#" id="classe_tarja">Classe Terapêutica / Tarja</a></li>
                                        <li><a class="dropdown-item" href="#" id="lote">Lote</a></li>
                                    </ul>
                            </div>
                        </div>
                        <!-- Tabela de produtos -->
                        <div class="gerenciarTabela col-10 mt-5 mb-5">
                            <!-- Tabela Gerenciamento de produtos -->
                            <?php require_once('tabelas/tabela_produtos.php') ?>
                        </div>


                        <!-- Formulário de produtos -->
                        <div class="adicionarProduto col-10 mb-5" style="display:none;">
                            <?php require_once('formularios/form_cadastrar_produto.php') ?>
                        </div>

                        <!-- Formulario Fornecedor -->
                        <div class="fornecedores col-10 mb-5" style="display:none">
                            <?php require_once('formularios/form_cadastrar_fornecedor.php') ?>
                            <?php require_once('tabelas/tabela_fornecedores.php') ?>
                        </div>
                        <!-- Formulário Classe Terapêutica e Tarja -->
                        <div class="tarja col 10 mb-5" style="display:none">
                            <?php require_once('formularios/form_cadastrar_classe_terapeutica.php') ?>
                            <?php require_once('tabelas/tabela_classesTerapeuticas_tarjas.php') ?>
                        </div>
                        <!-- Formulario Lote -->
                        <div class="lote col-10 mb-5" style="display:none">
                            <?php require_once('formularios/form_cadastrar_lote.php') ?>
                            <?php require_once('tabelas/tabela_lote.php') ?>                            
                        </div>
                    
                    </div>

                </div>
                <!-- rodapé -->
                <!-- rodapé -->
                <?php require_once('components/rodape.php') ?>
            </div>
        </div>
    </div>

    <!-- edt = editar -->
    <!-- Modal -->
    <div class="modal fade" id="editar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Editar</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3" action="actions/editar_produto.php" method="POST">
                    <div class="col-md-2">
                            <label for="id" class="form-label">#</label>
                            <input value="<?=$produto["id"] ?>" type="id" class="form-control" name="id" id="edtId">
                        </div>
                        <div class="col-md-12">
                            <label for= "nome" class="form-label">Nome</label>
                            <input value="<?=$produto["nome"] ?>" type="text" class="form-control" name="nome" id="edtNome">
                        </div>
                        <div class="col-12">
                            <label for="tipo_classificacao" class="form-label">Classificação</label>
                            <div class="input-group mb-3">
                                <select class="custom-select" id="edtClassificacao" name="id_classificacao">
                                    <?php foreach ($valor as $produto) { ?>
                                        <option> <?=$produto["id"] ?> <?= $produto['tipo'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="tipo" class="form-label">Tipo</label>
                            <div class="input-group mb-3">
                                <select class="custom-select" id="edtTipo" name="id_tipo">
                                    <?php foreach ($listarClasse as $produto) { ?>
                                        <option><?=$produto["id"] ?> <?= $produto['tipo'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="nome_fornecedor" class="form-label">Fornecedor</label>
                            <div class="input-group mb-3">
                                <select class="custom-select" id="edtFornecedor" name="id_fornecedor">
                                    <?php foreach ($nm_fornecedor as $produto) { ?>
                                        <option> <?=$produto["id"] ?> <?= $produto['nome'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
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
    <!-- Botão back to top -->
    <button type="button" class="btn btn-primary btn-floating btn-lg" id="btn-back-to-top">
        <i class="bi bi-arrow-up-circle"></i>
    </button>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/0.9.0/jquery.mask.min.js" integrity="sha512-oJCa6FS2+zO3EitUSj+xeiEN9UTr+AjqlBZO58OPadb2RfqwxHpjTU8ckIC8F4nKvom7iru2s8Jwdo+Z8zm0Vg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Sweet Alert  -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <script src="script/script.js"></script>
    <?php require_once('alertas.php'); ?>
</body>

</html>