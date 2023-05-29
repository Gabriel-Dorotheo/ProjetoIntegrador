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
