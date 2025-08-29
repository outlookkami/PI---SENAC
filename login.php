<?php
include("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HeyEvent</title>
    <link rel="stylesheet" href="login.css">
    <script src="https://kit.fontawesome.com/715a89f136.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body>
    <aside>
        <img class="Logo" src="assets/Logo HeyEvent Ofc.png" alt="" width="150px">
        <p class="HE">HeyEvent</p>
        <div class="texto">
            <div class="textos">
                <p>Facilite a organização, comunicação e execução de eventos corporativos</p>
                <p>Vizualize eventos futuros</p>
                <p>Confirme sua presença rapidamente</p>
                <p>Participe dos eventos e concorra a prêmios</p>

            </div>
        </div>
    </aside>
    <main>
        <div class="topo">
            <img class="logob" src="assets/Login.png" alt="">
            <h2>
                <p>Login</p>
            </h2>
        </div>
        <form action="" method="post">
            <div class="bdv">
                <h3>Bem-Vindo de Volta</h3>
            </div>

            <p class="p1">Preencha suas credênciais para acessar sua conta</p>
            <input class="email" type="email" name="email" placeholder="Email"> <br>
            <input class="senha" type="senha" name="senha" placeholder="Senha">
            <p><a class="esqsenha" href="">Esqueceu a senha?</a></p>
            <button type="submit">Entrar</button>
            <p><a class="npossuicnt" href="cadastro.php">Não possuí uma conta? Faça o cadastro aqui</a></p>
        </form>
        <?php
        if ($_POST) {
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $sql = "INSERT INTO usuarios_login (email, senha) VALUES ('$email', '$senha')";

            if ($connection->query($sql)) {
                echo "<script>alert('Dados cadastrados com sucesso');</script>";
                Entrar();
            } else {
                echo "<p>Erro: Os Dados não foram cadastrados</p>";
            }
            $connection->close();
        }
        function Entrar()
        {
            $senha = $_POST['senha'];
            $senha_cripto = password_hash($senha, PASSWORD_DEFAULT);
            print_r($senha_cripto);
            if (password_verify($senha, $senha_cripto)) {
                echo "<script>alert('Redirecionando...');window.location.href='cadastro.php'</script>";
            } else {
                echo "Credenciais erradas.";
            }
        }




        ?>
        <?php
        // if ($_POST) {
        //     $email = $_POST['email'];
        //     $senha = $_POST['senha'];

        //     $sql = "INSERT  INTO login (email, senha) VALUES ('$email', '$senha')";

        //     if ($connection->query($sql)) {
        //         echo "<script>alert('Dados cadastrados com sucesso');</script>";
        //     } else {
        //         echo "<p>Erro: Os Dados não foram cadastrados</p>";
        //     }
        //     $connection->close();
        // }
        ?>
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

            .Logo {
                margin-top: 200px;

            }

            .HE {
                color: white;
                font-family: "Quicksand", sans-serif;
                font-size: 90px;
                margin-top: -20px;
            }

            aside {
                color: white;
                padding: 10px;
            }

            .asidep {
                font-size: 30px;
            }

            main {
                margin-left: 955px;
                margin-top: -800px;
            }

            .textos {
                margin-top: -50px;
                font-size: 20px;

            }

            form {
                border-radius: 5px;
                width: 450px;
                height: 500px;
                text-align: center;
                margin-left: 250px;
                box-shadow: 5px 5px 10px 5px rgba(0, 0, 0, 0.108);

            }

            .topo {
                margin-top: 100px;
                text-align: center;
            }

            h2 {
                color: #000F55;
                margin-top: -40px;
                margin-left: -10px;
                text-align: center;
                font-size: 30px;
            }

            .bdv {
                color: #000F55;
                padding: 20px;
                font-size: 20px;
            }

            .p1 {
                margin-top: -10px;
            }

            input {
                height: 40px;
                width: 300px;
                border-radius: 8px;
                border-style: solid;
            }

            .senha {
                margin-top: 30px;
            }

            .esqsenha {
                margin-left: 150px;
                color: #6C0034;

            }

            .npossuicnt {
                font-size: 15px;
                color: black;
            }

            a {
                text-decoration: none;
            }

            .logob {
                width: 150px;
            }

            button {
                height: 40px;
                width: 300px;
                border-radius: 8px;
                border-style: none;
                background-color: #000F55;
                color: white;
            }
        </style>
    </main>
</body>

</html>