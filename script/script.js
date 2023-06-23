document.querySelector('.ball').addEventListener('click', (e) => {
    e.target.classList.toggle('ball-move');
    document.body.classList.toggle('tema2');
});
//alterar conteudos (avisos, graficos)
$("#btnMudar1").click(function () {
    $(".avisos").fadeIn();
    $(".grafico").hide();
})
$("#btnMudar2").click(function () {
    $(".grafico").fadeIn();
    $(".avisos").hide();
})
//mascara da página usuário
$(document).ready(function() {
    $('#usuario_telefone').mask('(00) 0 0000-0000');
    $('#edtTelefone').mask('(00) 0 0000-0000');
});

//mask contato fornecedor
$(document).ready(function() {
    $('#id_telefone').mask('(00) 0 0000-0000');
    $('#cnpj').mask('00.000.000/0000-00', {reverse: true});;
});

const exampleModal = document.getElementById('editar');
if (exampleModal) {
    exampleModal.addEventListener('show.bs.modal', event => {
        // Button that triggered the modal
        const button = event.relatedTarget
        // Extract info from data-bs-* attributes
        const nome = button.getAttribute('data-bs-nome');
        const usuario_email = button.getAttribute('data-bs-email');
        const id_nivel = button.getAttribute('data-bs-nivel');
        const usuario_telefone = button.getAttribute('data-bs-telefone');

        exampleModal.querySelector('#edtNome').value = nome;
        exampleModal.querySelector('#edtEmail').value = usuario_email;
        exampleModal.querySelector('#edtNivel').value = id_nivel;
        exampleModal.querySelector('#edtTelefone').value = usuario_telefone;

        // modalTitle.textContent = `New message to ${Nome}`
    })
}

//alteração das tabelas de suas respectivas classes terapeuticas
$("#btnTrocar1").click(function () {
    $(".antibioticos").fadeIn();
    $(".probioticos").hide();
    $(".antialergicos").hide();
})
$("#btnTrocar2").click(function () {
    $(".probioticos").fadeIn();
    $(".antibioticos").hide();
    $(".antialergicos").hide();
})
$("#btnTrocar3").click(function () {
    $(".antialergicos").fadeIn();
    $(".antibioticos").hide();
    $(".probioticos").hide();
})


//menu lateral da página de produtos de produtos
$("#gerenciar").click(function(){
    $(".gerenciarTabela").fadeIn();
    $(".adicionarProduto").hide();
    $(".fornecedores").hide();
    $(".tarja").hide();
})
$("#adicionarPr").click(function(){
    $(".adicionarProduto").fadeIn();
    $(".gerenciarTabela").hide();
    $(".fornecedores").hide();
    $(".tarja").hide();
})
$("#fornecedor").click(function(){
    $(".fornecedores").fadeIn();
    $(".gerenciarTabela").hide();
    $(".adicionarProduto").hide();
    $(".tarja").hide();
})
$("#classe_tarja").click(function(){
    $(".tarja").fadeIn();
    $(".fornecedores").hide();
    $(".gerenciarTabela").hide();
    $(".adicionarProduto").hide();
})