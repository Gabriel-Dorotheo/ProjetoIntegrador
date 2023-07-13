<div class="table-responsive ms-5 me-5">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Classificação</th>
                <th scope="col">Tipo</th>
                <th scope="col">Fornecedor</th>
                <th scope="col">Editar</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <?php foreach ($tabela as $produto) { ?>
                <tr>
                    <td>
                        <?= $produto['nome'] ?>
                    </td>
                    <td>
                        <?= $produto['tipo_classificacao'] ?>
                    </td>
                    <td>
                        <?= $produto['tipo_classe_terapeutica'] ?>
                    </td>
                    <td>
                        <?= $produto['nome_fornecedor'] ?>
                    </td>
                    <td>

                        <a href="#"><i class="bi bi-pencil-square fs-4 me-3" data-bs-toggle="modal" data-bs-target="#editar" data-bs-id="<?= $produto['id']; ?>" data-bs-nome="<?= $produto['nome']; ?>" data-bs-classe="<?= $produto['tipo_classificacao']; ?>" data-bs-fornecedor="<?= $produto['nome_fornecedor']; ?>" data-bs-tipo="<?= $produto['tipo_classe_terapeutica']; ?>"></i></a>


                        <a href="actions/deletar.php?id=<?= $produto['id']; ?>" onclick="confirmarProduto(<?= $produto['id']; ?>); return false;">
                            <i class="bi bi-trash3 fs-4"></i>
                        </a>

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
                        <a class="page-link " href="produtos.php?pagina=<?= $paginaAtual - 1; ?>">Anterior</a>
                    </li>
                <?php } ?>
                <?php if ($paginaAtual == 1) { ?>
                    <li class="page-item disabled">
                        <a class="page-link" href="produtos.php?pagina=<?= $paginaAtual - 1; ?>">Anterior</a>
                    </li>
                <?php } ?>
                <?php for ($i = 1; $i <= $totalPaginas; $i++) { ?>
                    <li class="page-item <?= $paginaAtual == $i ? 'active' : 'abcde'; ?>">
                        <a class="page-link border bg-secondary-subtle text-dark fw-semibold" href="produtos.php?pagina=<?= $i; ?>"><?= $i; ?></a>
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
<?php require_once('alertas.php'); ?>