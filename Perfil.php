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
    <div class="sairb"><a href="logout.php"><img src="assets\sair.png" class="sair" alt="" ></a></div>
    <p class="HE"> Olá <?php echo $primeiroNome; ?> !</p>
    <img src="assets\perfiluser.png" class="perfiluser" alt="">
    <form action="" method="$_POST">
        <label for="nome">Nome</label> <br>
        <input type="text" value=" <?php echo $usuario['nome_user']; ?>" readonly> <br>
        <label for="email">E-mail</label> <br>
        <input type="text" value="<?php echo $usuario['email_user'];  ?>" readonly> <br>
        <label for="telefone">Telefone</label> <br>
        <input type="text"> <br>
        <label for="perfil">Perfil</label> <br>
        <select name="niveis" id="niveis">

        </select>


    </form>

    <style>
        body {
            margin: 0;
            padding: 0;
            height: 102vh;
            font-family: "Raleway", sans-serif;
            background-image: linear-gradient(to bottom, #000F55, #6C0034);
            background-repeat: no-repeat;
        }


        .HE {
            color: white;
            font-family: "Quicksand", sans-serif;
            font-size: 90px;
            margin-top: -20px;
            padding: 20px;
        }

        .perfiluser {
            width: 150px;
            margin-left: 880px;
            margin-top: -50px;

        }
        .sair{
            width: 30px;
        
        }
        .sairb{
            text-align: right;
        }

        form {
            border-radius: 5px;
            width: 1400px;
            height: 600px;
            padding: 10px;
            text-align: left;
            margin-left: 250px;
            margin-top: -50px;
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
        }


        select {
            height: 43px;
            width: 310px;
            border-radius: 8px;
            color: rgb(128, 128, 128);
            border-color: black;
        }
    </style>
</body>

</html>