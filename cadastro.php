<?php
include("conexao.php");
$sql = "SELECT ID, nome_empresa FROM empresas";

$resultempresa = $connection->query($sql);
if (!$resultempresa) {
   die("Erro na consulta: " . $connection->error);
}
$sql = "SELECT ID_nivel, niveis FROM acessos";
$result = $connection->query($sql);

if (!$result) {
   die("Erro na consulta de acessos: " . $connection->error);
}
if ($_POST) {
   $nome = $_POST['nome_user'];
   $email = $_POST['email_user'];
   $senha = $_POST['senha_user'];
   $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
   // $ID = $_POST['nome_empresa'];
   $ID_nivel = $_POST['niveis'];
   // $conta = $_POST['nivel'];
   

   $sql = "INSERT INTO usuarios (nome_user, email_user, senha_user,  niveis) VALUES ('$nome', '$email', '$senhaHash', $ID_nivel)";


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
   <title>Cadastre-se</title>
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
   <aside>
      <img class="Logo" src="assets/Logo HeyEvent Ofc.png" alt="" width="150px">
      <div class="HE">
         <p>HeyEvent</p>
      </div>
      <div class="pe1">
         <img src="assets\Evento.png" alt="">
         <p>Facilite a organização, comunicação e execução de eventos corporativos</p>
      </div>
      <div class="pe2">
         <img src="assets\Calendario.png" alt="">
         <p>Vizualize eventos futuros</p>
      </div>
      <div class="pe3">
         <img src="assets\Confirmar.png" alt="">
         <p>Confirme sua presença rapidamente</p>
      </div>
   </aside>
   <main>
      <div class="topo">
         <img class="logob" src="assets\Cadastro.png" alt="">
         <h2>
            <p>Cadastre-se</p>
         </h2>
      </div>
      <form id="FormCad" action="" method="post">
         <div class="bdv">
            <h3>Bem-Vindo a HeyEvent</h3>
         </div>
         <p class="p1">Preencha suas credênciais para criar sua conta</p>
         <input class="nome" type="text" name="nome_user" placeholder="Nome Completo" required>
         <input class="email" type="email" name="email_user" placeholder="Email" required>
         <input class="senha" id="senha" type="password" name="senha_user" placeholder="Senha" required> <img id="senhaimg" onclick="mudarimagem()" style="cursor: pointer;" class="senhaimg" src="assets\senhaesconder.png" alt=""> <br>
         <select class="empresa" name="nome_empresa">
            <option value="" disabled selected>Selecione sua Empresa</option>
            <?php while ($row = $resultempresa->fetch_assoc()) { ?>
               <option value="<?php echo $row['ID']; ?>">
                  <?php echo $row['nome_empresa']; ?>
               </option>
            <?php } ?>
         </select>
         <select name="niveis" class="acessos" required>
            <option value="" disabled selected>Selecione seu Nivel de Acesso</option>
            <?php while ($row = $result->fetch_assoc()) { ?>
               <option value="<?php echo $row['ID_nivel']; ?>">
                  <?php echo $row['niveis']; ?>
               </option>
            <?php } ?>
         </select>
         <button type="submit">Cadastrar</button>
         <p><a class="possuicnt" href="login.php">Já possui uma conta? Faça o Login aqui</a></p>
         <p><a class="nencempresa" href="CriarEmpresa.php">Não Encontra sua empresa? Cadastre ela aqui</a></p>
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

      .senhaimg {
         display: flex;
         margin-left: 340px;
         margin-top: -35px;
      }

      .Logo {
         margin-top: 200px;
      }

      .HE {
         color: white;
         font-family: "Quicksand", sans-serif;
         font-size: 90px;
         margin-top: -110px;
         padding: 20px;
      }

      .bvp {
         color: white;
         font-family: "Quicksand", sans-serif;
         font-size: 50px;
         margin-top: -100px;


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
         gap: 20px;
         display: flex;

      }

      aside {
         color: rgb(255, 255, 255);
         padding: 10px;
      }

      .asidep {
         font-size: 40px;
      }

      main {
         margin-left: 955px;
         margin-top: -850px;
      }

      form {
         border-radius: 5px;
         width: 450px;
         height: 650px;
         text-align: center;
         margin-left: 250px;
         box-shadow: 5px 5px 10px 5px rgba(0, 0, 0, 0.108);

      }

      .possuicnt {
         color: black;
      }

      .nencempresa {
         color: black;
      }

      .topo {
         margin-top: 10px;
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
         border-color: black;
         border-width: 1px;
      }

      .email {
         margin-top: 30px;
      }

      .senha {
         margin-top: 30px;
      }

      .logob {
         width: 190px;
      }

      button {
         margin-top: 20px;
      }

      select {
         height: 43px;
         width: 310px;
         border-radius: 8px;
         margin-top: 30px;
         color: rgb(128, 128, 128);
         border-color: black;
      }

      a {
         text-decoration: none;
         color: white;
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
</body>
</html>