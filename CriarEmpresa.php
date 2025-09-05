<?php
include("conexao.php");
 if ($_POST) {
        $nome_empresa = $_POST['nome_empresa'];
        $cnpj = $_POST['cnpj'];

        $sql = "INSERT INTO empresas (nome_empresa, cnpj) VALUES ('$nome_empresa', '$cnpj')";

        if ($connection->query($sql)) {
            echo "<script>alert('Dados cadastrados com sucesso');</script>";
        } else {
            echo "<p>Erro: Os Dados não foram cadastrados</p>";
        }
        $connection->close();
    }


?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre Sua Empresa</title>
    <script src="https://kit.fontawesome.com/715a89f136.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" href="assets\Icone.png">
</head>
<main>

    <form action="" method="post">
        <div class="bdv">
            <h3>Bem-Vindo a HeyEvent</h3>
        </div>
        <p class="p1">Preencha as Informações da sua Empresa</p>
        <input class="nome" type="text" name="nome_empresa" placeholder="Empresa" required><br>
        <input class="cnpj" type="number" name="cnpj" placeholder="CNPJ" required> <br>
        <button type="submit">Cadastrar</button>
        <p><a class="possuicnt" href="login.php">Já possui uma conta? Faça o Login aqui</a></p>
    </form>


</main>

<body>

</body>
<style>
    body {
        margin: 0;
        padding: 0;
        height: 100vh;
        font-family: "Raleway", sans-serif;

        background-image: linear-gradient(to bottom, #000F55, #6C0034);
        background-repeat: no-repeat;
        background-size: 50% 100%;
    }

    form {
        border-radius: 5px;
        width: 450px;
        height: 350px;
        text-align: center;
        box-shadow: 5px 5px 10px 5px rgba(0, 0, 0, 0.108);

    }


    input {
        height: 40px;
        width: 300px;
        border-radius: 8px;
        border-style: solid;
        border-color: black;
        border-width: 1px;
    }

    main {
        margin-left: 1200px;
        margin-top: 300px;
    }

    .nome {
        margin-top: 30px;
    }

    .cnpj {
        margin-top: 30px;
    }
</style>

</html>