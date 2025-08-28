<!DOCTYPE html>
<html lang="pt">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>HeyEvent</title>
   <link rel="stylesheet" href="cadastro.css">
   <script src="https://kit.fontawesome.com/715a89f136.js" crossorigin="anonymous"></script>
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link
      href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet">
</head>

<body>
   <aside>
      <img class="Logo" src="assets/Logo HeyEvent Ofc.png" alt="" width="150px">
      <p class="HE">HeyEvent</p>
      <p class="asidep">Bem-Vindo ao nosso portal!</p>
      <p>Facilite a organização, comunicação e execução de eventos corporativos</p>
      <p>Vizualize eventos futuros</p>
      <p>Confirme sua presença rapidamente</p>
      <p>Participe dos eventos e concorra a prêmios</p>
   </aside>
   <main>
      <div class="topo">
         <img class="logob" src="assets/Cadastrar.png" alt="">
         <h2>
            <p>Cadastre-se</p>
         </h2>
      </div>
      <form action="" method="post">
         <div class="bdv">
            <h3>Bem-Vindo a HeyEvent</h3>
         </div>
         <p class="p1">Preencha suas credênciais para acessar sua conta</p>
         <input class="nome" type="text" name="nome" placeholder="Nome Completo">
         <input class="email" type="email" name="email" placeholder="Email">
         <input class="senha" type="text" name="senha" placeholder="Senha"> <br>
         <select class="empresa" name="empresa">
            <option value="" disabled selected>Selecione sua Empresa</option> <br>
         </select>
         <select class="tipoconta" name="tipoconta">
            <option value="" disabled selected>Selecione o Tipo de Conta</option>
         </select> <br>
         <button type="submit">Entrar</button>
         <p><a class="possuicnt" href="login.html">Já possui uma conta? Faça o Login aqui</a></p>
         <p><a href="empresa.html">É Empresa? Faça seu Cadastro aqui</a></p>
      </form>

   </main>
</body>

</html>