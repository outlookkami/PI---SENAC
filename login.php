<?php
include("conexao.php");
session_start();

if ($_POST) {
    $email = $_POST['email_user'];
    $senha = $_POST['senha_user'];

    $sql = "SELECT * FROM usuarios WHERE email_user = '$email'";
    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
        $usuario = $result->fetch_assoc();
        if (password_verify($senha, $usuario['senha_user'])) {

            $_SESSION['ID_USER'] = $usuario['ID'];
            $_SESSION['nome_user'] = $usuario['nome_user'];
            $_SESSION['nivel'] = $usuario['nivel'];
            $_SESSION['foto_user'] = $usuario['foto'];

            if ($usuario['ID_acesso'] == 1) {
                header("Location: administrador.php");
            } elseif ($usuario['ID_acesso'] == 2) {
                header("Location: colaborador.php");
            }
            exit;
        } else {
            echo "<script>alert('Email ou senha incorretos!');</script>";
        }
    } else {
        echo "<script>alert('Email ou senha incorretos!');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | HeyEvent</title>
    <script src="https://kit.fontawesome.com/715a89f136.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets\Icone.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
</head>

<body>
    <aside>
        <img class="Logo" src="assets/Logo HeyEvent Ofc.png" alt="" width="150px">
        <p class="HE">HeyEvent</p>
        <ul class="imagens">
            <li>
                <img class="event" src="assets/event.png" alt="Ícone de evento">
                <span>Facilite a organização, comunicação e execução de eventos corporativos</span>
            </li>
            <li>
                <img src="assets/calen.png" alt="Ícone de calendário">
                <span>Visualize eventos futuros</span>
            </li>
            <li>
                <img src="assets/check.png" alt="Ícone de confirmação">
                <span>Confirme sua presença rapidamente</span>
            </li>
            <li>
                <img src="assets/info.png" alt="Ícone de confirmação">
                <span>Veja todos os detalhes em um só lugar</span>
            </li>
        </ul>
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
            <input class="email" type="email" name="email_user" placeholder="Email"> <br>
            <input class="senha" id="senha" type="password" name="senha_user" required placeholder="Senha"> <img id="senhaimg" onclick="mudarimagem()" style="cursor: pointer;" class="senhaimg" src="assets\senhaesconder.png" alt="">
            <p><a class="esqsenha" href="EsqSenha.php"></a></p>
            <button type="submit">Entrar</button>
            <p><a class="npossuicnt" href="cadastro.php">Não possuí uma conta? Faça o cadastro aqui</a></p>
        </form>
    </main>
    <script>
        function mudarimagem() {
            const senhaimg = document.getElementById('senhaimg');
            const senhatxt = document.getElementById('senha');

            if (senhaimg.getAttribute("src") === "assets/senhaesconder.png") {
                senhaimg.setAttribute("src", "assets/senhaver.png");
                senhatxt.type = "Text";
            } else {
                senhaimg.setAttribute("src", "assets/senhaesconder.png");
                senhatxt.type = "password";
            }
        }
    </script>
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
            padding: 20px;
        }

        .imagens {
            list-style: none;
            padding: 0;
            margin: 20px 0;
            margin-top: -100px;
            
        }

        .imagens li {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 15px;
        }


        .imagens img {
            width: 50px;
            height: auto;
        }
        .event{
            width: 100px;
            height: auto;
        
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
        ul{
            font-size: 20px;
            
        }

        form {
            border-radius: 5px;
            width: 450px;
            height: 450px;
            text-align: center;
            margin-left: 250px;
            box-shadow: 5px 5px 10px 5px rgba(0, 0, 0, 0.108);
                 transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        form:hover {
            transform: translateY(-5px);
            box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.25);
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

        .pe1 {
            margin-top: -80px;
            font-size: 20px;
            display: flex;
        }

        .pe2 {
            font-size: 20px;
            display: flex;
            padding: 5px;
        }

        .pe3 {
            font-size: 20px;
            padding: 25px;
            display: flex;

        }

      input {
         height: 40px;
         width: 300px;
         border-radius: 8px;
         border-style: solid;
         border-color: black;
         border-width: 1px;
         font-family: "Raleway", sans-serif;
         transition: border-color 0.3s ease, box-shadow 0.3s ease;
      }


        input:focus {
            outline: none;
            border-color: #6C0034;
            box-shadow: 0 0 5px #6C0034;
        }
        .senha {
            margin-top: 30px;
        }

        .esqsenha {
            margin-left: 150px;
            color: #6C0034;
        }

        .senhaimg {
            display: flex;
            margin-left: 340px;
            margin-top: -35px;
        }

        .npossuicnt {
            font-size: 15px;
            color: black;
        }

        a {
            color: white;
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
         transition: background 0.3s ease, transform 0.2s ease;
         cursor: pointer;
      }
   

        button:hover {
            background-color: #6C0034;
            transform: translateY(-2px);
        }
    </style>

</body>

</html>