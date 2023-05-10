<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Bem vindx
        <?= $_POST['nome'] . " " . $_POST['sobrenome']; ?>
    </h1>
    <p>Seu email é
        (<?= $_POST['email'] ?>)<br>
        Lembre-se, sempre que for entrar em nosso site<br>
        use seu nome de usuário 
        (<?= $_POST['usuario'] ?>)<br>
        e sua senha 
        (<?= $_POST['senha'] ?>).
    </p>


    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>

        window.onload = function () {
            swal({
                title: "Sucesso!",
                text: "Novo usuário adicionado!",
                icon: "success",
                button: "Concluir",
            });
        };
    </script>
</body>

</html>