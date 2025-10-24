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
    <link rel="shortcut icon" href="assets\Icone.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
    href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;1,500&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz@12..96&display=swap" rel="stylesheet">
</head>

<body>

   <header>
        <div class="logo-container">
            <img class="menu" src="assets/menu.png" alt="menu" id="menu">
            
        </div>

        <nav class="menunav">
            <a href="<?php
                if ($usuario['ID_acesso'] == 1) {
                echo 'admPortal.php';
                } elseif ($usuario['ID_acesso'] == 2) {
                echo 'ColabPortal copy.php';
                } else {
                echo 'HeyEvent.php';
                }
                ?>"><img src="assets\confetti.png" alt="inicio" width="28px">Inicio</a>
        </nav>
        <div class="opcoesUsuario">
            <a href="Perfil.php"><img class="user" src="assets\user.png" alt="Perfil" width="28px"></a>
        </div>
    </header>
<nav class="menubarra" id="menubarra">
    <ul class="ulmenu">
        <img src="assets\Logo HeyEvent Ofc.png" width="90px" alt="">
        <p class="hemenu">HeyEvent</p>
        <div class="lihover">
            <li><img src="assets\menuuser.png" alt=""><a class="amenu" href="Perfil.php">Seu Perfil</a></li>
        </div>
        <div class="lihover">
            <li><img src="assets\menuseguranca.png" alt=""><a class="amenu" href="#">Privacidade e segurança</a></li>
        </div>
        <div class="lihover">
            <li><img src="assets\menuinfo.png" alt=""><a class="amenu" href="#">Central de ajuda</a></li>
        </div>
        <div class="lihover">
            <li><img src="assets\menucadeado.png" alt=""><a class="amenu" href="">Termos de uso e política de privacidade</a></li>
        </div>
        <div class="lihover">
        <li><img src="assets\menucontato.png" alt=""><a class="amenu" href="Contato.php">Contato</a></li>
        </div>
         <div class="lihover">
            <li><img src="assets\menuheimg.png" alt=""><a class="amenu" href="Sobrenos.php">Sobre nós</a></li>
        </div>
        <div class="lihover">
            <li><img src="assets\menusair.png" alt="" width=""><a class="amenu" href="logout.php">Sair</a></li>
        </div>
    </ul>
    <p class="footermenu">Todos os direitos reservados. <br>© 2024 HeyEvent.</p>
</nav>

    <main id="main">

        <h2 class="olanome">Olá <?php echo $primeiroNome; ?>!</h2> 

        
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
                <button class="btn" type="submit" id="confirmBtn" class="confirmBtn">Confirmar</button>
            </div>
        </form>
    </main>

    <script>

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

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }



        /* menu */
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

        .lihover img{
        width: 30px;
        margin-left: 47px;
        }

        
        .ulmenu {
            list-style: none;

        }

        .lihover {
            transition: transform 0.3s ease;
        }
 .lihover:hover {
            transform: scale(1.05);

        }

        .ulmenu li {
            display: flex;
            align-items: center;
            margin-top: 40px;

        }

        .amenu {
            text-decoration: none;
            color: #000F55;
        }
        
        .footermenu {
            text-align: center;
            margin-top: 50px;
            color: #000000ff;

        }
         .amenu {
            text-decoration: none;
            color: #000000ff;
            padding: 10px;
        }
                .lihover {
        transition: transform 0.3s ease;
        font-family: Quicksand;
        font-size: 18px;
        }




        


        
        main {
            transition: margin-left 0.3s;
        }

       

         header {
            background-image: linear-gradient(to bottom, #000F55, #6C0034);
            background-repeat: no-repeat;
            width: 100%;
            min-height: 60px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
            padding: 0.75rem 1.5rem;
        }
        .menunav{
        font-family: "Montserrat", sans-serif;
        font-optical-sizing: auto;
        font-weight: 500;
        font-style: normal;
        }
        .hemenu{

         color: #000000ff;
        font-family: Quicksand;
        font-size: 35px;
        margin-left: 15px;
        } 
        .opcoesUsuario {
            display: flex;
            gap: 1rem;
            justify-content: space-between;
            align-items: center;
        }
                a:hover {
            color: #D90368;
        }
                a {
            display: flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
            color: white;
            transition: color 0.3s;
        }
                .logo-container {
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .logo {
            font-size: 1.5rem;
            background-color: transparent;
            color: white;
            border: none;
            cursor: pointer;
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









        body {
            margin: 0;
            padding: 0;
                        background-color: #ffffffff;
            font-family: 'Raleway', sans-serif;
        }



        .Logo {
            width: 30px;
        }
                .menu {
            width: 20px;
            vertical-align: middle;
            cursor: pointer;
        }

/*         
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





 
             */

                .perfiluser {
            border-radius: 200px;
            background-color: white;
        }
        .olanome {
            color: #000000ff; 
            font-size: 30px;
            margin-top: 20px;
            padding: 20px;
            font-family: Quicksand;
        }

        
       .perfiluser {
            width: 150px;
            margin-left: 880px;
            margin-top: -50px;

        }


        .lihover {
            margin-left: -37px;
            transition: transform 0.3s ease; 
        }

        .lihover:hover {
            transform: scale(1.05);         
            
        }
        .confirmBtn {
            display: none;
            margin-top: 70px;
            margin-left: 300px;
            font-family: "Raleway", sans-serif;
            border-radius: 10px;
        }
        form {
            border-radius: 5px;
            width: 450px;
            height: 450px;
            padding: 10px;
            text-align: left;
            margin-left: 700px;
            margin-top: 100px;
            background-color: white;
            box-shadow: 5px 5px 10px 5px rgba(0, 0, 0, 0.108);

        } 




        .user {
            width: 40px;
        } 


        label {


            color: #000F55;
            font-size: 20px;
            font-weight: bold;

        }

         input {
            height: 40px;
            width: 310px;
            border-radius: 8px;
            border-style: solid;
            border-color: black;
            border-width: 1px;
            font-family: "Raleway", sans-serif;
            margin-top: 10px;
        }

        .conteudo {
            margin-top: 60px;
            margin-left: 60px;
        }

        select {
            height: 43px;
            width: 310px;
            border-radius: 8px;
            color: rgb(128, 128, 128);
            border-color: black;
            margin-top: 10px;
        }
                .btn {
                    display: none;
            height: 40px;
            width: 300px;
            border-radius: 8px;
            border-style: none;
            background-color: #000F55;
            color: white;
            margin-top: 30px;
        }

        .btn1 {
            height: 33px;
            width: 30px;
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