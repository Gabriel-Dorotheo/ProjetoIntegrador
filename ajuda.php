<?php
session_start();
// Verificar se a sessão não existe;
if (!isset($_SESSION['dados'])) {
  // Se usuario não logado, redirecionar para o login;
  header("location: index.php");
  exit();
}

require_once('classes/Usuario.class.php');
$usuario = new Usuario;
$resultado = $usuario->Listar();
?>
<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ajuda | Pharma Flow</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  <!-- Animate CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <!-- Meu CSS -->
  <link rel="stylesheet" href="estilo/style.css">
  <link rel="shortcut icon" href="img/pilulas.png" type="image/x-icon">
</head>

<body>

<style>
  div.center{
    text-align:center;
  }
</style>

  <div class="container-fluid overflow-x-hidden p-0 m-0" style="min-height: 100vh;">

    <div class="row bg-transparent">
      <div class="col">
        <?php require_once('components/menu.php'); ?>
      </div>


      <!-- Menu -->
      <div class="row mx-auto">
        <div class="col">
          <div class="h1 text-center text-white m-4 sombra-texto">Ajuda</div>
          <div class="container mt-5 mb-5 border rounded-2 shadow bg-body-secondary rounded mx-auto">
            <div class="row">
            </div>

            <div class="row center">
              <div class="col">
                <!-- Informações do item Avisos -->
                <div class="m-5 p-0 fs-5">
                  <h3>Como Cadastrar Classes e Tarjas</h3>
                  <img src="img/Cadastrarclasse.png" alt="TutorialClasseETarja">
                </div>
                  <hr>
                <div class="m-5 p-0 fs-5">
                  <h3>Como cadastrar um Fornecedor</h3>
                  <img src="img/cadastroFornecedor.png" alt="TutorialFornecedor">
                </div>
                <hr>
                <div class="m-5 p-0 fs-5">
                  <h3>Como cadastrar um Lote</h3>
                  <img src="img/cadastrarLote.png" alt="TutorialLote">
                </div>
                <hr>
                <div class="m-5 p-0 fs-5">
                  <h3>Como cadastrar um Produto</h3>
                  <img src="img/cadastrarProduto.png" alt="TutorialFornecedor">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- rodapé -->
      <?php require_once('components/rodape.php') ?>
    </div>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="script/script.js"></script>

</html>