<?php
include("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recupere sua senha</title>
    <script src="https://kit.fontawesome.com/715a89f136.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets\Icone.png">
</head>

<body>
    <img class="Logo" src="assets/Logo HeyEvent Ofc.png" alt="" width="150px">
    <p class="HE">HeyEvent</p>

        <form action="" method="post">
            <div class="bdv">
                <h3>Recupere sua Senha</h3>
            </div>


            <input class="email" type="email" name="email" placeholder="Email"> <br>
            <button type="submit">Próximo</button>
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
            }

            .Logo {
                margin-top: 100px;
                margin-left: 870px;
            }

            .HE {
                color: white;
                font-family: "Quicksand", sans-serif;
                font-size: 60px;
                margin-top: -20px;
                text-align: center;
            }

            .textos {
                margin-top: -50px;
                font-size: 20px;

            }
            .email{
                margin-top: -70px;
            }
            form {
                border-radius: 5px;
                width: 450px;
                height: 300px;
                text-align: center;
                box-shadow: 5px 5px 10px 5px rgba(0, 0, 0, 0.108);
                background-color: white;
                margin-left: 750px;
                margin-top: -20px;

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


            input {
                
                height: 40px;
                width: 300px;
                border-radius: 8px;
                border-style: solid;
            }


            a {
                text-decoration: none;
                color: black;
            }

            button {
                height: 40px;
                width: 300px;
                border-radius: 8px;
                border-style: none;
                background-color: #000F55;
                color: white;
                margin-top: 20PX;
            }
        </style>
 
</body>

</html>