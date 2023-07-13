 <?php
    require_once('classes/Lote.class.php');
    $listarLote = new Lote();
    $lote = $listarLote->Listar();
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
                         <th scope="col">Quantidade</th>
                         <th scope="col">Editar</th>
                     </tr>
                 </thead>
                 <?php foreach ($lote as $l) { ?>
                     <tbody class="text-center">
                         <tr>
                             <th scope="row"><?= $l['cod_lote'] ?></th>
                             <td><?= $l['produtos']?></td>
                             <td><?= $l['validade'] ?></td>
                             <td><?= $l['quantidade'] ?></td>
                             <td>
                                 <button type="submit" class="btn btn-primary btn-sm fs-5 me-3">
                                     <i class="bi bi-pencil-square"></i></button>
                                 <a href="actions/editar_lote.php?id=<?= $l['id'] ?>" onclick="confirmarLote(<?= $l['id']; ?>); return false;">
                                     <button type="submit" class="btn btn-danger btn-sm fs-5 me-3">
                                         <i class="bi bi-trash3"></i>
                                     </button>
                                 </a>
                             </td>
                         </tr>
                     </tbody>
                 <?php } ?>
             </table>
         </div>
     </div>
 </div>