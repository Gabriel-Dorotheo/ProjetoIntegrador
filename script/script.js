document.querySelector('.ball').addEventListener('click', (e) => {
    e.target.classList.toggle('ball-move');
    document.body.classList.toggle('tema2');
});

$("#btnMudar1").click(function () {
    $(".avisos").fadeIn();
    $(".grafico").hide();
})
$("#btnMudar2").click(function () {
    $(".grafico").fadeIn();
    $(".avisos").hide();
})

$(document).ready(function() {
    $('#usuario_telefone').mask('(00) 0 0000-0000');
    $('#edtTelefone').mask('(00) 0 0000-0000');
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

