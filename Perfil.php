<?php

include("conexao.php");
session_start();
if (isset($_SESSION['foto_perfil'])) {
    echo '<img src="'. $_SESSION['foto_perfil'] .'" alt="Foto de perfil" width="150">';
}
if (!isset($_SESSION['ID_USER'])) {
    header("Location: login.php");
    exit;
}
$idUser = $_SESSION['ID_USER'];
$sql = "SELECT u.*, e.nome_empresa, a.nivel 
        FROM usuarios u
        JOIN empresas e ON u.ID_empresa = e.ID
        JOIN acessos a ON u.ID_acesso = a.ID
        WHERE u.ID = ?";

$stmt = $connection->prepare($sql);
$stmt->bind_param("i", $idUser);
$stmt->execute();

$result = $stmt->get_result();
$usuario = $result->fetch_assoc();
$primeiroNome = strtok($usuario['nome_user'], " ");

if ($usuario['ID_acesso'] == 1) {
    $inicio = 'admPortal.php';
} elseif ($usuario['ID_acesso'] == 2) {
    $inicio = 'ColabPortal copy.php';
}
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
        <img class="menu" src="assets/menu.png" alt="menu" id="menu">
        <a href="Sobrenos.php"><img class="Logo" src="assets/Logo HeyEvent Ofc.png" alt="logo">Sobre Nós</a>
        <a href="Calendario.php"><img class="calendario" src="assets/Calendario.png" alt="">Calendário</a>
        <a href="Perfil.php"><img class="user" src="assets/user.png" alt="perfil">Seu Perfil</a>
        <a href="logout.php"><img src="assets/sair.png" class="sair" alt="sair">Sair</a>
    </header>
    <nav class="menubarra" id="menubarra">
        <img class="MLogo" src="assets\Logo HeyEvent Ofc.png" alt=""> <br>
        <p class="MHE">HeyEvent</p>
        <ul>
        <div class="lihover">
        <li><img src="assets\home.png" alt=""><a href="<?php
        if ($usuario['ID_acesso'] == 1) {
            echo 'admPortal.php';
        } elseif ($usuario['ID_acesso'] == 2) {
            echo 'ColabPortal copy.php';
        } else {
            echo 'HeyEvent.php'; 
        }
        ?>">Início</a>
        </li>
        </div>
        <div class="lihover">
        <li><img src="assets\info a.png" alt=""><a href="Sobrenos.php">Sobre nós</a></li>
        </div>
        <div class="lihover">
        <li><img src="assets\prox.png" alt=""></i><a href="<?php
        if ($usuario['ID_acesso'] == 1) {
            echo 'admPortal.php';
        } elseif ($usuario['ID_acesso'] == 2) {
            echo 'ColabPortal copy.php';
        } else {
            echo 'HeyEvent.php'; 
        }
        ?>">Próximos eventos</a></li>
        </div>
            <div class="lihover">
                <li><img src="assets\contato.png" alt=""><a href="Contato.php">Contato</a></li>
            </div>
        </ul>
        <p class="footermenu">
            Todos os direitos reservados. <br>
            © 2024 HeyEvent.
        </p>
    </nav>

    <main id="main">

        <p class="HE"> Olá <?php echo $primeiroNome; ?>!</p>

        <img src="" class="perfiluser" id="preview" alt="" width="150" height="150">
        <button type="file" onclick="document.getElementById('fotoInput').click()"><img src="assets\editar.png" alt=""></button>
        <br>
        <form action="" method="$_GET">
            <div class="conteudo">
                <input type="file" id="fotoInput" accept="image/*" style="display: none;">
                <label for="nome">Nome</label> <br>
                <input type="text" value=" <?php echo $usuario['nome_user']; ?>" readonly> <br>
                <label for="email">E-mail</label> <br>
                <input type="text" value="<?php echo $usuario['email_user'];  ?>" readonly> <br>
                <label for="text">Sua Empresa</label> <br>
                <select name="nome_empresa" id="empresa">
                    <option value="<?php echo $usuario['ID_empresa']; ?>" selected>
                        <?php echo htmlspecialchars($usuario['nome_empresa']); ?>
                    </option>
                </select> <br>
                <label for="text">Tipo de Conta</label> <br>
                <select name="nivel" id="niveis">
                    <option value="<?php echo $usuario['ID_acesso']; ?>">
                        <?php echo htmlspecialchars($usuario['nivel']); ?>
                    </option>
                </select>
                <br>
                <button type="submit" id="confirmBtn" class="confirmBtn">Confirmar</button>
            </div>
        </form>
    </main>

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

        });
        const menu = document.getElementById('menu');
        const menubarra = document.getElementById('menubarra');
        const main = document.getElementById('main');

        menu.addEventListener('click', () => {
            if (menubarra.style.left === "0px") {
                menubarra.style.left = "-250px";
                main.style.marginLeft = "0";
            } else {
                menubarra.style.left = "0px";
                main.style.marginLeft = "250px";
            }
        });
        main.addEventListener('click', () => {
            if (menubarra.style.left === "0px") {
                menubarra.style.left = "-250px";
                main.style.marginLeft = "0";
            }
        });
    </script>
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        header {
            display: flex;
            align-items: center;
            height: 100px;
            gap: 8px;
            background: none;
            border: none;
            color: white;
            font-family: "Quicksand", sans-serif;
            background-image: linear-gradient(to bottom, #000F55, #6C0034);
            vertical-align: middle;

        }

        header a {
            text-decoration: none;
            color: white;

        }

        .menubarra {
            position: fixed;
            top: 0;
            left: -250px;
            width: 250px;
            height: 100%;
            background-color: #ffffffff;
            box-shadow: 5px 5px 10px 5px rgba(0, 0, 0, 0.108);
            padding-top: 60px;
            transition: 0.3s;
            z-index: 2;
            font-family: "Quicksand", sans-serif;

        }

        .MLogo {
            width: 100px;
            display: block;
            margin: 0 auto;
            max-width: 100%;
            height: auto;
        }

        .MHE {
            color: #000F55;
            font-family: Quicksand;
            font-weight: 1000px;
            font-size: 40px;
            margin: 0 auto;
            text-align: center;
            font-weight: lighter;

        }

        li img {
            width: 40px;
        }


        ul {
            list-style: none;

        }

        ul li {
            display: flex;
            align-items: center;
            margin-top: 40px;

        }

        a {
            text-decoration: none;
            color: #000F55;
        }

        .footermenu {
            text-align: center;
            margin-top: 300px;
            color: #000F55;
        }

        main {
            transition: margin-left 0.3s;
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
            margin-left: 100px;
            vertical-align: middle;


        }

        .lihover {
            margin-left: -37px;
            transition: transform 0.3s ease; 
        }

        .lihover:hover {
            transform: scale(1.05);         
            
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

        .menu {
            width: 20px;
            vertical-align: middle;
            cursor: pointer;
        }

        .Logo {
            width: 30px;
            margin-left: 300px;
            vertical-align: middle;
        }

        .calendario {
            width: 60px;
            margin-left: 400px;
            vertical-align: middle;
        }



        .user {
            width: 40px;
            margin-left: 600px;
            vertical-align: middle;
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

        .conteudo {
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