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
  <div class="container-fluid overflow-x-hidden p-0 m-0" style="min-height: 100vh;">

    <div class="row bg-transparent">
      <div class="col">
        <?php require_once('components/menu.php'); ?>
      </div>

      <!-- Menu -->
      <div class="row mx-auto">
        <div class="col">
          <div class="h1 text-center text-white m-4 sombra-texto">Manual</div>
          <div class="container mt-5 mb-5 border rounded-2 shadow bg-body-secondary rounded mx-auto">
          </div>

          <div class="container">
            <div class="row">
              <div class="col d-flex flex-wrap justify-content-evenly m-3">
                <button class="border-0 mb-3 bg-transparent text-light">Gerenciamento de produtos | Cadastro de produto</button>
                <button class="border-0 mb-3 bg-transparent text-light">Cadastro de fornecedor</button>
                <button class="border-0 mb-3 bg-transparent text-light">Cadastro de lote</button>
                <button class="border-0 mb-3 bg-transparent text-light">Cadastro Classes | Tarjas</button>
                <button class="border-0 mb-3 bg-transparent text-light">Gerenciamento de contas</button>
              </div>
            </div>
            <div class="row mt-5">
              <div class="col">
                <div id="carouselExample" class="carousel slide">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="img/" class="d-block w-100"  alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="..." class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="..." class="d-block w-100" alt="...">
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
              </div>

            </div>
          </div>

          <!-- Bootstrap -->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

          <!-- Jquery -->
          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
          <script src="script/script.js"></script>

</html>