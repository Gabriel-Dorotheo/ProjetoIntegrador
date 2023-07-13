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
        const id = button.getAttribute('data-bs-id');
        const nome = button.getAttribute('data-bs-nome');
        
        exampleModal.querySelector('#edtId').value = id;
        exampleModal.querySelector('#edtNome').value = nome;

    })
}
const modalUsuario = document.getElementById('editarUser');
if (modalUsuario) {
    modalUsuario.addEventListener('show.bs.modal', event => {
        // Button that triggered the modal
        const button = event.relatedTarget;
        // Extract info from data-bs-* attributes
        const id = button.getAttribute('data-bs-idUser');
        const nome = button.getAttribute('data-bs-nome');
        const email = button.getAttribute('data-bs-email');
        const nivel = button.getAttribute('data-bs-nivel');
        const senha = button.getAttribute('data-bs-senha');
        const fone = button.getAttribute('data-bs-fone');
        
        modalUsuario.querySelector('#edtIdUser').value = id;
        modalUsuario.querySelector('#edtNome').value = nome;
        modalUsuario.querySelector('#edtEmailUser').value = email;
        modalUsuario.querySelector('#edtNivelUser').value = nivel;
        modalUsuario.querySelector('#edtSenhaUser').value = senha;
        modalUsuario.querySelector('#edtFoneUser').value = fone;
    });
}
const modalClasseTerapeutica = document.getElementById('editarClasse');
if (modalClasseTerapeutica) {
    modalClasseTerapeutica.addEventListener('show.bs.modal', event => {
        // Button that triggered the modal
        const button = event.relatedTarget
        // Extract info from data-bs-* attributes
        const id = button.getAttribute('data-bs-id')
        const classe = button.getAttribute('data-bs-tipo');
        
        modalClasseTerapeutica.querySelector('#edtIdClasse').value = id;
        modalClasseTerapeutica.querySelector('#edtClasse').value = classe;

    })
}
const modalTarja = document.getElementById('editarTarja');
if (modalTarja) {
    modalTarja.addEventListener('show.bs.modal', event => {
        // Button that triggered the modal
        const button = event.relatedTarget
        // Extract info from data-bs-* attributes
        const id = button.getAttribute('data-bs-idTarja')
        const tarja = button.getAttribute('data-bs-tarja');
        
        modalTarja.querySelector('#edtIdTarja').value = id;
        modalTarja.querySelector('#edtTarja').value = tarja;

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
    $(".adicionarProduto, .fornecedores, .tarja, .lote").hide();
});

$("#adicionarPr").click(function(){
    $(".adicionarProduto").fadeIn();
    $(".gerenciarTabela, .fornecedores, .tarja, .lote").hide();
});

$("#fornecedor").click(function(){
    $(".fornecedores").fadeIn();
    $(".gerenciarTabela, .adicionarProduto, .tarja, .lote").hide();
});

$("#classe_tarja").click(function(){
    $(".tarja").fadeIn();
    $(".fornecedores, .gerenciarTabela, .adicionarProduto, .lote").hide();
});
$("#lote").click(function(){
    $(".lote").fadeIn();
    $(".gerenciarTabela, .fornecedores, .adicionarProduto, .tarja").hide();
});

//botao back to top
let mybutton = document.getElementById("btn-back-to-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (
    document.body.scrollTop > 20 ||
    document.documentElement.scrollTop > 20
  ) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
// When the user clicks on the button, scroll to the top of the document
mybutton.addEventListener("click", backToTop);

function backToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

// Configura o intervalo para trocar os slides a cada 5 segundos
$(document).ready(function() {
    $('#carouselExampleSlidesOnly').carousel();
});
