<?php

$msg = [
    "Cadastro realizado com sucesso!",
    "Cadastro excluido com sucesso!",
    "Cadastro atualizado com sucesso!",
    "Produto cadastrado com sucesso!",
    "Produto excluido com sucesso",
    "Produto atualizado com sucesso",
];

$erro = [
    "Usuario e/ou senha invalidos",
    "Falha ao realizar seu cadastro, verifique as informações digitadas",
    "Falha ao cadastrar produto",
    "Falha ao excluir produto",
    "Falha ao modificar produto"
];

$errouser = [
    "Usuário e/ou senha inválidos."
];

$alertaproduto = [
    "ALERTA!"
]

?>



<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>




<script>
    <?php if (isset($_GET['erro'])) {  ?>
        swal("Erro!", "<?= $errouser[$_GET['erro']]; ?>", "error");
        // Remover o parametro da url:
        window.history.replaceState(null, null, window.location.pathname);
    <?php } ?>

    <?php if (isset($_GET['msg'])) {  ?>
        swal("Sucesso!", "<?= $msg[$_GET['msg']]; ?>", "success");
        // Remover o parametro da url:
        window.history.replaceState(null, null, window.location.pathname);
    <?php } ?>
</script>

<script>
    function confirmar(id) {
        // alert('Você clicou em apagar '+id);
        swal({
                title: "Atenção",
                text: "Tem certeza que deseja apagar este produto?",
                icon: "warning",
                buttons: ["Não", "Sim"],
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    // Redirecionar para o apagar:
                    window.location.href = "actions/deletar_produto.php?id=" + id;
                }
            });
    }
</script>
