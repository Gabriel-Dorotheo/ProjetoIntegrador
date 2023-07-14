<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log In - Pharma Flow</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="img/pilulas.png" type="image/x-icon">
    <style>
        .fundo {
            background: #2980B9;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to top, #FFFFFF, #6DD5FA, #2980B9);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to top, #FFFFFF, #6DD5FA, #2980B9);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }

        .sombra {
            -webkit-box-shadow: 0px 10px 10px 0px rgba(107, 107, 107, 1);
            -moz-box-shadow: 0px 10px 10px 0px rgba(107, 107, 107, 1);
            box-shadow: 0px 10px 10px 0px rgba(107, 107, 107, 1);
        }

        .fundo2 {
            background: #c7ecff
        }

        .form-control {
            background-color: rgb(233, 233, 233);
            border: 1px solid rgb(158, 158, 158);
        }

        .form-control:hover {
            background-color: white;
            transition: .6s;
        }

        .botaohover:hover {
            -webkit-box-shadow: 0px 5px 12px -2px rgba(158, 158, 158, 1);
            -moz-box-shadow: 0px 5px 12px -2px rgba(158, 158, 158, 1);
            box-shadow: 0px 5px 12px -2px rgba(158, 158, 158, 1);
            transition: .7s;
        }

        .imag {
            width: 100%;
            min-height: 100vh;
        }


    </style>
</head>

<body class="fundo overflow-y-hidden">
    <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000" style="min-height: 100vh;">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/img3.webp" class="imag" style="opacity: 0.3; max-height:100vh;">
            </div>
            <div class="carousel-item">
                <img src="img/pexels-pixabay-159211.jpg" class="imag" style="opacity: 0.3; max-height:100vh;">
            </div>
            <div class="carousel-item">
                <img src="img/pexels-freestocksorg-143654.jpg" class="imag" style="opacity: 0.3; max-height:100vh;">
            </div>
            <div class="carousel-item">
                <img src="img/img" class="imag" style="opacity: 0.3; max-height:100vh;">
            </div>
        </div>
    </div>

    <div class="row ">
        <div class="col rounded-3">
            <div class="container bg-white mx-auto d-flex justify-content-center rounded border-rounded-3 sombra" style="z-index: 1; min-width: 400px; max-width:400px; position:absolute; top:50%; left:50%; transform: translate(-50%,-50%);">
                <div class="row">
                    <div class="col-md-12">
                        <img src="img/MicrosoftTeams-image.png" alt="" class="mt-5 mb-4" style="max-width: 150px; margin-left:58px;">
                        <form action="actions/logar.php" method="post">
                            <div class="mb-3">
                                <label for="nome" class="form-label fw-bold">Email
                                </label>
                                <input type="email" class="form-control campos" id="nome" name="nome" style="min-width: 300px;">
                            </div>

                            <div class="mb-3">
                                <label for="senha" class="form-label fw-bold">Senha
                                </label>
                                <input type="password" id="senha" class="form-control campos" name="senha" style="min-width: 300px;">
                            </div>
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <input type="submit" class="btn btn-primary text-white mt-4 mb-5 botaohover" value="Entrar">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require_once('alertas.php'); ?>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    
</body>

</html>