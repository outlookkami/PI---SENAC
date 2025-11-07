<?php
include("conexao.php");
$sql = "SELECT ID, nome_empresa FROM empresas";

$resultempresa = $connection->query($sql);
if (!$resultempresa) {
   die("Erro na consulta: " . $connection->error);
}

$sql = "SELECT ID, nivel FROM acessos";
$result = $connection->query($sql);

if (!$result) {
   die("Erro na consulta de acessos: " . $connection->error);
}
if ($_POST) {
   $nome = $_POST['nome_user'];
   $email = $_POST['email_user'];
   $senha = $_POST['senha_user'];
   $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
   $empresa = $_POST['nome_empresa'];
   $nivel = $_POST['nivel'];


   $sql = "INSERT INTO usuarios (nome_user, email_user, senha_user, ID_empresa, ID_acesso ) VALUES ('$nome', '$email', '$senhaHash', '$empresa','$nivel')";


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
   <title>Cadastro | HeyEvent</title>
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
      <p class="HE">HeyEvent</p>
      <ul class="imagens">
         <li>
            <img src="assets/event.png" class="event" alt="Ícone de evento">
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
         <select name="nivel" class="acessos" required>
            <option value="" disabled selected>Selecione seu Nivel de Acesso</option>
            <?php while ($row = $result->fetch_assoc()) { ?>
               <option value="<?php echo $row['ID']; ?>">
                  <?php echo $row['nivel']; ?>
               </option>
            <?php } ?>
         </select>
         <button type="submit">Cadastrar</button>
         <p><a class="possuicnt" href="login.php">Já possui uma conta? Faça o Login aqui</a></p>
         <p><a class="nencempresa" href="criar_empresa.php">Não Encontra sua empresa? Cadastre ela aqui</a></p>
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
         margin-top: -20px;
         padding: 20px;
      }

      .bvp {
         color: white;
         font-family: "Quicksand", sans-serif;
         font-size: 50px;
         margin-top: -100px;


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

      ul {
         font-size: 20px;

      }


      .imagens img {
         width: 50px;
         height: auto;
      }

      .event {
         width: 100px;
         height: auto;

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
         margin-top: -800px;
      }

      form {
         border-radius: 5px;
         width: 450px;
         height: 650px;
         text-align: center;
         margin-left: 250px;
         box-shadow: 5px 5px 10px 5px rgba(0, 0, 0, 0.108);
         transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        form:hover {
            transform: translateY(-5px);
            box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.25);
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

      
            select {
               height: 43px;
               width: 310px;
               border-radius: 8px;
               margin-top: 30px;
               color: rgb(128, 128, 128);
               border-color: black;
               font-family: "Raleway", sans-serif;
                transition: transform 0.3s ease, box-shadow 0.3s ease;
                
            }
            select:focus{
                       outline: none;
            border-color: #6C0034;
            box-shadow: 0 0 5px #6C0034;  
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



      .email {
         margin-top: 30px;
      }

      .senha {
         margin-top: 30px;
      }

      .logob {
         width: 190px;
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
         margin-top: 20px;
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