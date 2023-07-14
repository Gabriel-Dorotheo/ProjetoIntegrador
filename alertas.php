<?php
// Verificar se a sessão não existe;
if (!isset($_SESSION['dados'])) {
    // Se usuario não logado, redirecionar para o login;
    header("location: index.php");
    exit();
}

$msg = [
    "Cadastro realizado com sucesso!",
    "Cadastro excluido com sucesso!",
    "Cadastro atualizado com sucesso!",
    "Produto cadastrado com sucesso!",
    "Produto excluido com sucesso",
    "Produto atualizado com sucesso",
    "Lote cadastrado com sucesso!",
    "Lote excluido com sucesso!",
    "Classe alterada com sucesso!",
    "Tarja alterada com sucesso!",
    "Classe cadastrada com sucesso!",
    "Tarja cadastrada com sucesso!",
    "Lote atualizado com sucesso!",
    "Usuário e/ou senha inválidos!.",
    "Fornecedor atualizado com sucesso!."
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
];
$alertaFornecedor = [
    "ALERTA"
];
$alertaConta = [
    "ALERTA"
];
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
                text: "Tem certeza que deseja remover este fornecedor?",
                icon: "warning",
                buttons: ["Não", "Sim"],
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    // Redirecionar para o apagar:
                    window.location.href = "actions/deletar_fornecedor.php?id=" + id;
                }
            });
    }
    function confirmarProduto(id) {
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
    function confirmarConta(id) {
        // alert('Você clicou em apagar '+id);
        swal({
                title: "Atenção",
                text: "Tem certeza que deseja apagar esta conta?",
                icon: "warning",
                buttons: ["Não", "Sim"],
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    // Redirecionar para o apagar:
                    window.location.href = "actions/deletar_usuario.php?id=" + id;
                }
            });
    }
    function confirmarTarja(id) {
        // alert('Você clicou em apagar '+id);
        swal({
                title: "Atenção",
                text: "Tem certeza que deseja apagar esta tarja?",
                icon: "warning",
                buttons: ["Não", "Sim"],
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    // Redirecionar para o apagar:
                    window.location.href = "actions/deletar_usuario.php?id=" + id;
                }
            });
    }
    function confirmarClasse(id) {
        // alert('Você clicou em apagar '+id);
        swal({
                title: "Atenção",
                text: "Tem certeza que deseja apagar esta classe?",
                icon: "warning",
                buttons: ["Não", "Sim"],
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    // Redirecionar para o apagar:
                    window.location.href = "actions/deletar_usuario.php?id=" + id;
                }
            });
    }
    function confirmarLote(id) {
        // alert('Você clicou em apagar '+id);
        swal({
                title: "Atenção",
                text: "Tem certeza que deseja apagar este lote?",
                icon: "warning",
                buttons: ["Não", "Sim"],
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    // Redirecionar para o apagar:
                    window.location.href = "actions/deletar_lote.php?id=" + id;
                }
            });
    }
</script>