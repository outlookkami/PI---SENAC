<?php

include("conexao.php");
session_start();


if (!isset($_SESSION['ID_user'])) {
    header("Location: login.php");
    exit;
}
$idUser = $_SESSION['ID_user'];
$sql = "SELECT * FROM usuarios WHERE ID_user = '$idUser'";
$result = $connection->query($sql);
$usuario = $result->fetch_assoc();
$primeiroNome = strtok($usuario['nome_user'], " ");


?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Perfil</title>
    <link rel="stylesheet" href="cadastro.css">
    <script src="https://kit.fontawesome.com/715a89f136.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" href="assets\Icone.png">
</head>

<body>
    <header>
        <div class="sairb"><a href="logout.php"><img src="assets\sair.png" class="sair" alt=""></a></div>
    </header>

    <p class="HE"> Olá <?php echo $primeiroNome; ?>!</p>

    <img src="" class="perfiluser" id="preview" alt="" width="150" height="150">
    <input type="file" id="fotoInput" accept="image/*" style="display: none;">
    <button type="file" onclick="document.getElementById('fotoInput').click()"><img src="assets\editar.png" alt=""></button>
    <br>
    <form action="" method="$_GET">
        <div class="conteudo">
            <label for="nome">Nome</label> <br>
            <input type="text" value=" <?php echo $usuario['nome_user']; ?>" readonly> <br>
            <label for="email">E-mail</label> <br>
            <input type="text" value="<?php echo $usuario['email_user'];  ?>" readonly> <br>
            <label for="text">Sua Empresa</label> <br>
            <select name="empresa" id="empresa">
                <option value="<?php echo $usuario['nome_empresa']; ?>" selected>
                    <?php echo $usuario['nome_empresa']; ?>
                </option>
            </select> <br>
            <label for="text">Tipo de Conta</label> <br>
            <select name="niveis" id="niveis">
                <option value="<?php echo $usuario['niveis']; ?>">
                    <?php echo $usuario['niveis']; ?>
                </option>
            </select>
            <br>
            <button type="submit" id="confirmBtn" class="confirmBtn">Confirmar</button>
        </div>
    </form>

    <script>
        const input = document.getElementById('fotoInput');
        const preview = document.getElementById('preview');

        input.addEventListener('change', () => {
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = e => {
                    preview.src = e.target.result;
                    preview.style.display = "block";
                    confirmBtn.style.display = "inline-block";
                };
                reader.readAsDataURL(input.files[0]);
            } else {
                preview.style.display = "none";
                confirmBtn.style.display = "none";
            }
        });
        confirmBtn.addEventListener('click', () => {
            confirmBtn.style.display = "none";
            input.value = "";
        });
    </script>
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        header {
            background-image: linear-gradient(to bottom, #000F55, #6C0034);
            background-repeat: no-repeat;
            height: 100px;
        }

        .perfiluser {
            border-radius: 200px;
            background-color: white;
        }

        .confirmBtn {
            display: none;
            margin-top: 70px;
            margin-left: 300px;
            font-family: "Raleway", sans-serif;
            border-radius: 10px;
        }

        .HE {
            color: #000F55;
            font-family: "Quicksand", sans-serif;
            font-size: 30px;
            margin-top: 20px;
            padding: 20px;
        }

        .perfiluser {
            width: 150px;
            margin-left: 880px;
            margin-top: -50px;

        }

        .sair {
            width: 30px;

        }

        .sairb {
            text-align: right;
        }

        form {
            border-radius: 5px;
            width: 500px;
            height: 600px;
            padding: 10px;
            text-align: left;
            margin-left: 690px;
            margin-top: -100px;
            background-color: white;
            box-shadow: 5px 5px 10px 5px rgba(0, 0, 0, 0.108);

        }

        label {
    
            
            color: #000F55;
            font-size: 20px;
            font-weight: bold;

        }

        input {
            height: 40px;
            width: 300px;
            border-radius: 8px;
            border-style: solid;
            border-color: black;
            border-width: 1px;
            font-family: "Raleway", sans-serif;
            margin-top: 10px;
        }
        .conteudo{
            margin-top: 150px;
            margin-left: 100px;
        }
        select {
            height: 43px;
            width: 310px;
            border-radius: 8px;
            color: rgb(128, 128, 128);
            border-color: black;
            margin-top: 10px;
        }

        button {
            height: 33px;
            border-radius: 20px;
            border-style: none;
            background-color: #000F55;
            color: white;
            margin-left: 940px;
            cursor: pointer;

        }
    </style>
</body>

</html>