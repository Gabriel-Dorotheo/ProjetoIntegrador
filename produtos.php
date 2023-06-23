<?php
require_once('classes/Produtos.class.php');
$p = new Produtos();
// $tabela = $p->ListarTudo();
// Numero total de registros no banco de dados 
$totalRegistros = $p->ObterQtdRegistro()[0]['qtd'];
// Numero de registros exibidos por pagina 
$registrosPorPagina = 7;
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
$resultado = $fornecedor->Listar();

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
    <title>Início | Pharma Flow</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- Meu CSS -->
    <link rel="stylesheet" href="estilo/style.css">
    <!-- Javascript Data Table -->
    <link href="https://unpkg.com/tabulator-tables/dist/css/tabulator.min.css" rel="stylesheet">

</head>

<body>

    <div class="container-fluid overflow-hidden m-0 p-0">


        <!-- Linha da logo do site -->

        <div class="row bg-transparent">
            <!-- Coluna da logo -->
            <div class="col-3 text-center">
                <logo class="animar fs-1 d-inline-flex mt-1 mb-2">
                    <div class="letra">Pharma Flow</div>

                </logo>

            </div>

            <div class="col-6 mt-4 fs-4 d-flex justify-content-center">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link text-white" aria-current="page" href="inicio.php">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="usuario.php">Usuários</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-body-emphasis" href="produtos.php">Produtos</a>
                    </li>
                </ul>
            </div>

            <!-- Coluna do icone de menu -->
            <div class="col-2 d-flex justify-content-between mt-4">
                <div class="dropdown">
                    <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-circle fs-4"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Configurações</a></li>
                        <li><a class="dropdown-item" href="#">Ajuda</a></li>
                        <li><a class="dropdown-item" href="index.html">Sair</a></li>
                    </ul>
                </div>
                <!-- botão tema -->
                <div class="col">
                    <div class="button">
                        <div class="ball"></div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col">
                <!-- titulo -->
                <div class="titulo text-center m-5 sombra-texto text-white">
                    <h1 class="h1">Gerenciamento de Produtos</h1>
                </div>

                <div class="container mt-5 mb-5 border border-0 rounded-2 shadow bg-body-secondary">
                    <!-- Conteúdo da tabela -->
                    <div class="row">
                        <!-- Menu Lateral -->
                        <div class="col-md-2 mb-3">
                            <div class="list-group mt-5 d-flex justify-content-center">
                                <button type="button" class="btn btn-primary fw-semibold mb-3 mt-3" id="gerenciar">Gerenciar
                                    Produtos</button>
                                <div class="dropdown-center">
                                    <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-plus-circle"></i> Adicionar
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#" id="adicionarPr">Produto</a></li>
                                        <li><a class="dropdown-item" href="#" id="fornecedor">Fornecedor</a></li>
                                        <li><a class="dropdown-item" href="#" id="classe_tarja">Classe Terapêutica / Tarja</a></li>
                                    </ul>
                                </div>
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
                    </div>

                </div>
                <!-- rodapé -->
                <div class="row">
                    <div class="col">
                        <div class="text-white text-center p-3 fs-5">
                             <p>Pharma Flow - 2023</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

        <!-- Jquery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/0.9.0/jquery.mask.min.js" integrity="sha512-oJCa6FS2+zO3EitUSj+xeiEN9UTr+AjqlBZO58OPadb2RfqwxHpjTU8ckIC8F4nKvom7iru2s8Jwdo+Z8zm0Vg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- Sweet Alert  -->
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


        <script src="script/script.js"></script>
</body>

</html>