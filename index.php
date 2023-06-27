<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        .campos {
            width: 300px;
        }

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
    </style>
</head>

<body class="fundo">

    <div class="container-fluid p-3" style="min-height: 100vh;">
        <div class="row sombra rounded position-absolute top-50 start-50 translate-middle" style="height:500px; width: 1000px;">
            <div class="col-md-6 bg-white rounded-start-3 ps-0 pe-0 d-flex align-items-center d-none d-sm-none d-md-block">
                <div class="container bg-white w-50 mt-5 mb-5 rounded border-rounded-3 mb-2">
                    <img src="img/pessoa-que-monitora-dados-on-line-ilustracao-desenhada-a-mao-de-um-engenheiro-de-software_203633-4852.avif" alt="" class="img-fluid border-rounded-3 rounded mx-auto">
                    <h1 class="h6">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</h1>


                </div>
            </div>


            <div class="col-md-6 col-sm-6 fundo2 rounded-end-3">
                <div class="container bg-white mx-auto d-flex justify-content-center rounded border-rounded-3 m-5">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="h2 text-center text-black mt-5 mb-5">Pharma Flow <i class="bi bi-capsule-pill"></i>
                            </h1>

                            <form action="actions/logar.php" method="post">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label fw-bold">Nome
                                        Usuário</label>
                                    <input type="email" class="form-control campos" id="exampleFormControlInput1" placeholder="" name="nome">
                                </div>

                                <label for="inputPassword5" class="form-label fw-bold">Senha</label>
                                <input type="password" id="inputPassword5 bg-body-secondary" class="form-control campos" aria-labelledby="passwordHelpBlock" name="senha">

                                <input type="submit" class="btn btn-primary text-white btn-lg mt-4 mb-5 botaohover" value="Entrar">

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>










    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>