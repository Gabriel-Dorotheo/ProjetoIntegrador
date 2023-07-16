 <?php
    require_once('classes/Lote.class.php');
    $listarLote = new Lote();
    $lote = $listarLote->Listar();

    require_once('classes/Produtos.class.php');
    $produto = new Produtos();
    $nm_produto = $produto->Listar();

    require_once('classes/Fornecedor.class.php');
    $listarFornecedores = new Fornecedor();
    $listar_fornecedor = $listarFornecedores->Listar();
    ?>

 <div class="row">
     <div class="col mx-auto">
         <h1 class="h1 text-center mb-5">Lote</h1>
         <div class="table-responsive ms-5 me-5">
             <table class="table">
                 <thead class="text-center">
                     <tr>
                         <th scope="col">Código</th>
                         <th scope="col">Produto</th>
                         <th scope="col">Validade (Ano/Mes/Dia)</th>
                         <th scope="col">Quantidade (g)</th>
                         <th scope="col">Editar</th>
                     </tr>
                 </thead>
                 <?php foreach ($lote as $l) { ?>
                     <tbody class="text-center">
                         <tr>
                             <th scope="row"><?= $l['cod_lote'] ?></th>
                             <td><?= $l['produtos'] ?></td>
                             <td><?= $l['validade'] ?></td>
                             <td><?= $l['quantidade'] ?></td>
                             <td>
                                 <a href="#" style="text-decoration: none;"><i class="bi bi-pencil-square fs-4 me-3" data-bs-toggle="modal" data-bs-target="#editarLote" data-bs-idLote="<?= $l['id'] ?>" data-bs-codLote="<?= $l['cod_lote'] ?>" data-bs-fornece="<?= $l['id_fornecedor'] ?>" data-bs-produtoLote="<?= $l['id_produto'] ?>" data-bs-validadeLote="<?= $l['validade'] ?>" data-bs-qntLote="<?= $l['quantidade'] ?>">
                                     </i></a>

                                 <a href="#" onclick="confirmarLote(<?= $l['id']; ?>); return false;">
                                     <i class="bi bi-trash3 fs-4"></i>
                                 </a>
                             </td>
                         </tr>
                     </tbody>
                 <?php } ?>
             </table>
         </div>
     </div>
 </div>

 <!-- edt = editar -->
 <!-- Modal -->
 <div class="modal fade" id="editarLote" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h1 class="modal-title fs-5" id="staticBackdropLabel">Editar Lote</h1>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                 <form class="row g-3" action="actions/editar_lote.php" method="POST">
                     <div class="col-md-2">
                         <label for="edtIdLote" class="form-label">#</label>
                         <input type="text" class="form-control fw-semibold" name="id" id="edtIdLote" readonly>
                     </div>
                     <div class="col-md-3">
                         <label for="cod_lote" class="form-label">Código Lote</label>
                         <input type="text" class="form-control" name="cod_lote" id="edtLote">
                     </div>
                     <div class="col-12">
                         <label for="edtProduto" class="form-label">Produto</label>
                         <div class="input-group mb-3">
                             <select class="form-select" id="edtProduto" name="id_produto" required>
                                 <?php foreach ($nm_produto as $nmproduto) { ?>
                                    <option value="<?= $nmproduto['id'] ?>"><?= $nmproduto['nome'] ?></option>
                                 <?php } ?>
                             </select>
                         </div>
                     </div>
                     <div class="col-12">
                         <label for="edtFornece" class="form-label">Fornecedor</label>
                         <div class="input-group mb-3">
                             <select class="form-select" id="edtFornece" name="id_fornecedor" required>
                                 <?php foreach ($listar_fornecedor as $nome_fornecedor) { ?>
                                     <option value="<?= $nome_fornecedor['id'] ?>"><?= $nome_fornecedor['nome'] ?></option>
                                 <?php } ?>
                             </select>
                         </div>
                     </div>
                     <div class="col-md-6">
                         <label for="edtValidade" class="form-label">Validade</label>
                         <input type="date" class="form-control" name="validade" id="edtValidade">
                     </div>
                     <div class="col-md-6">
                         <label for="edtQuantidade" class="form-label">Quantidade</label>
                         <input type="text" class="form-control" name="quantidade" id="edtQnt">
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