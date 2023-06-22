<?php
require_once('classes/Produtos.class.php');
$p = new Produtos();
// $tabela = $p->ListarTudo();
// Numero total de registros no banco de dados 
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
$resultado = $fornecedor->Listar();

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
                                        <li><a class="dropdown-item" href="#">Classe Terapêutica</a></li>
                                        <li><a class="dropdown-item" href="#">Tarja</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Tabela de produtos -->
                        <div class="gerenciarTabela col-10 mt-5 mb-5">
                            <div class="table-responsive ms-5 me-5">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nome</th>
                                            <th scope="col">Classificação</th>
                                            <th scope="col">Fornecedor</th>
                                            <th scope="col">Tipo</th>
                                            <th scope="col">Editar</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-group-divider">
                                        <?php foreach ($tabela as $produto) { ?>
                                            <tr>
                                                <td>
                                                    <?= $produto['id'] ?>
                                                </td>
                                                <td>
                                                    <?= $produto['nome'] ?>
                                                </td>
                                                <td>
                                                    <?= $produto['id_classificacao'] ?>
                                                </td>
                                                <td>
                                                    <?= $produto['id_fornecedor'] ?>
                                                </td>
                                                <td>
                                                    <?= $produto['id_tipo'] ?>
                                                </td>
                                                <td>
                                                    <button type="submit" class="btn btn-primary btn-sm fs-5 me-3"><i class="bi bi-pencil-square"></i></button>

                                                    <a href="actions/deletar_produto.php?id=<?= $produto['id'] ?>"><button type="submit" class="btn btn-danger btn-sm fs-5">
                                                            <i class="bi bi-trash3"></i></button></a>
                                                </td>
                                            </tr>


                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- Paginação -->
                            <div class="row mt-3 ">
                                <div class="col ">
                                    <nav aria-label="navegação">
                                        <ul class="pagination justify-content-center">
                                            <?php if ($paginaAtual > 1) { ?>
                                                <li class="page-item">
                                                    <a class="page-link" href="produtos.php?pagina=<?= $paginaAtual - 1; ?>">Anterior</a>
                                                </li>
                                            <?php } ?>
                                            <?php if ($paginaAtual == 1) { ?>
                                                <li class="page-item disabled">
                                                    <a class="page-link" href="produtos.php?pagina=<?= $paginaAtual - 1; ?>">Anterior</a>
                                                </li>
                                            <?php } ?>
                                            <?php for ($i = 1; $i <= $totalPaginas; $i++) { ?>
                                                <li class="page-item <?= $paginaAtual == $i ? 'active' : 'abcde'; ?>"><a class="page-link" href="produtos.php?pagina=<?= $i; ?>"><?= $i; ?></a>
                                                </li>
                                            <?php } ?>
                                            <!-- <li class="page-item active" aria-current="page"> -->

                                            <?php if ($paginaAtual < $totalPaginas) { ?>
                                                <li class="page-item">
                                                    <a class="page-link" href="produtos.php?pagina=<?= $paginaAtual + 1; ?>">Próxima</a>
                                                </li>
                                            <?php } ?>
                                            <?php if ($paginaAtual == $totalPaginas) { ?>
                                                <li class="page-item disabled">
                                                    <a class="page-link" href="#>">Próxima</a>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>


                        <!-- Formulário de produtos -->
                        <div class="adicionarProduto col-10 mb-5" style="display:none;">
                            <form class="row g-3" action="actions/cadastrar_produto.php" method="POST">
                                <div class="h2 text-center mt-5">Cadastrar Produto</div>
                                <div class="col-8 mx-auto">
                                    <label for="nome" class="form-label fw-bolder">Nome</label>
                                    <input type="text" class="form-control" name="nome" id="nome">
                                </div>
                                <div class="col-md-8 mx-auto">
                                    <label for="id_classificacao" class="form-label fw-bolder">Tarja</label><br>
                                    <select class="form-select" name="id_classificacao" id="id_classificacao" style="width: 200px; ">
                                        <option selected>Defina uma tarja</option>
                                        <option value="1">Vermelha (Sem restrição médica)</option>
                                    </select>
                                </div>
                                <div class="col-md-8 mx-auto">
                                    <label for="id_tipo" class="form-label fw-bolder">Classe Terapêutica</label><br>
                                    <select class="form-select" name="id_tipo" id="id_tipo" style="width: 200px; ">
                                        <option selected>Defina uma classe</option>
                                        <option value="1">Antibióticos</option>
                                        <option value="2">Anticoagulantes</option>
                                    </select>

                                </div>
                                <div class="col-md-8 mx-auto">
                                    <label for="id_fornecedor" class="form-label fw-bolder">Fornecedor</label><br>
                                    <select class="form-select" name="id_fornecedor" id="id_fornecedor" style="width: 200px; ">
                                        <option selected>Defina um fornecedor</option>
                                        <option value="1">Patrick da Lojinha</option>
                                    </select>
                                </div>
                                <div class="col-8 mx-auto">
                                    <label for="descricao" class="form-label fw-bolder">Descrição</label><br>
                                    <textarea name="descricao" id="descricao" cols="60"></textarea><br>
                                    <input type="submit" class="btn btn-success fw-semibold mt-5" value="Adicionar">
                                </div>
                            </form>
                        </div>

                        <!-- Formulario Fornecedor -->
                        <div class="fornecedores col-10 mb-5" style="display:none">
                            <h1 class="h1 text-center mt-5">Fornecedores</h1>
                            <form class="row g-3" action="actions/cadastrar_fornecedor.php" method="POST">
                                <div class="col-6 mx-auto mt-5">
                                    <label for="nome" class="form-label fw-bolder">Nome</label>
                                    <input type="text" class="form-control" name="nome" id="nome" placeholder="Elisa Aparecida de Jesus" required>
                                </div>
                                <div class="col-6 mx-auto mt-5">
                                    <label for="id_telefone" class="form-label fw-bolder">Telefone</label>
                                    <input type="text" class="form-control" name="id_telefone" id="id_telefone" placeholder="(012) 9 0000-0000" required>
                                </div>
                                <div class="col-6 mx-auto">
                                    <label for="razao_social" class="form-label fw-bolder">Razão Social</label>
                                    <input type="text" class="form-control" name="razao_social" id="razao_social" placeholder="Ex: Louças Brasil LTDA" required>
                                </div>
                                <div class="col-6 mx-auto">
                                    <label for="cnpj" class="form-label fw-bolder">CNPJ</label>
                                    <input type="text" class="form-control" name="cnpj" id="cnpj" placeholder="XX.XXX.XXX/0001-XX" required>
                                </div>
                                <div class="col-6">
                                    <label for="id_email" class="form-label fw-bolder">Email</label>
                                    <input type="text" class="form-control" name="id_email" id="id_email" placeholder="example@example.com" required>
                                    <input type="submit" class="btn btn-success fw-semibold mt-5 mx-auto" value="Adicionar">
                                </div>

                            </form>
                        </div>
                    </div>
                    <div class="container fornecedores overflow-hidden" style="display: none;">
                        <div class="row">
                            <div class="col mx-auto">
                                <table class="table">
                                    <thead class="text-center">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nome</th>
                                            <th scope="col">Razão Social</th>
                                            <th scope="col">CNPJ</th>
                                        </tr>
                                    </thead>
                                    <?php foreach ($resultado as $f) { ?>
                                        <tbody class="text-center">
                                            <tr>
                                                <th scope="row"><?= $f['id'] ?></th>
                                                <td><?= $f['nome'] ?></td>
                                                <td><?= $f['razao_social'] ?></td>
                                                <td><?= $f['cnpj'] ?></td>
                                            </tr>
                                        </tbody>
                                    <?php } ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- rodapé -->
            <div class="row">
                <div class="col">
                    <div class="bg-black text-white text-center p-3">
                        &copy; Pharma Flow - 2023.
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