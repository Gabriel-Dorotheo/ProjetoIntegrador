<?php

if (isset($_GET['id'])) {
    require_once("../classes/Fornecedor.class.php");
    $f = new Fornecedor();
    $f->id = $_GET['id'];

    $f->Deletar();
    header("Location: ../produtos.php?msg=15");
    exit();
} else {
    echo "Defina o ID do item a ser apagado!";
}
