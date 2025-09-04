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
      <form action="" method="post">
         <div class="bdv">
            <h3>Bem-Vindo a HeyEvent</h3>
         </div>
         <p class="p1">Preencha suas credênciais para criar sua conta</p>
         <input class="nome" type="text" name="nome" placeholder="Nome Completo">
         <input class="email" type="email" name="email" placeholder="Email">
         <input class="senha" type="text" name="senha" placeholder="Senha"> <br>
         <select class="empresa" name="empresa">
            <option value="" disabled selected>Selecione sua Empresa</option> <br>
         </select>
         <select class="tipoconta" name="tipoconta">
            <option value="" disabled selected>Selecione o Tipo de Conta</option>
         </select> <br>
         <button type="submit">Cadastrar</button>
         <p><a class="possuicnt" href="login.php">Já possui uma conta? Faça o Login aqui</a></p>
      </form>
      <?php


      ?>
   </main>
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
         color: black;
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