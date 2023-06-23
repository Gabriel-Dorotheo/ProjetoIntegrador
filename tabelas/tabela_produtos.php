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