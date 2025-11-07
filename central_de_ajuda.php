<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Central De Ajuda | HeyEvent</title>
  <link rel="shortcut icon" href="assets/Icone.png">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
</head>

<body>
  <header>
    <div class="container">
      <div class="logoheader">
        <img src="assets/Logo HeyEvent Ofc.png" alt="Logo HeyEvent">
        <h1 class="logo">HeyEvent</h1>
      </div>
      <nav class="menu">
        <a href="pagina_inicial.php">Início</a>
        <a href="Sobrenos.php">Sobre</a>
        <a href="contato.php">Contato</a>
        <a class="entrar" href="Login.php"><button>Entrar</button></a>
      </nav>
    </div>
  </header>

  <main class="conteudo-principal">
    <h2 class="titulo-secao">1. Compromisso com a Privacidade</h2>
    <p class="texto-principal">
      Para criar uma conta, acesse a página inicial da HeyEvent e clique em “Cadastrar-se”. Em seguida, preencha seus dados e confirme seu e-mail. Após isso, você poderá acessar todos os recursos da plataforma.
    </p>
    <h2 class="titulo-secao">2. Esqueci minha senha. O que fazer?</h2>
    <p class="texto-principal">Clique em “Esqueci minha senha” na tela de login e informe seu e-mail. Você receberá um link para redefinir sua senha de forma rápida e segura.
    </p>

    <h2 class="titulo-secao">3. Como confirmar presença em um evento?</h2>
    <p class="texto-principal">
      Ao acessar o evento desejado, clique no botão “Confirmar Presença”. Sua confirmação será registrada automaticamente e o organizador será notificado.
    </p>
    <h2 class="titulo-secao">4. Sou administrador. Como posso cadastrar um novo evento?</h2>
    <p class="texto-principal">
      No painel do administrador, clique em “Criar Evento”. Insira as informações solicitadas, como título, data, local e descrição. Após salvar, o evento ficará visível para todos os colaboradores.
    </p>

    <h2 class="titulo-secao">5. Contato e Suporte</h2>
    <p class="texto-principal">
      Se tiver dúvidas ou quiser saber mais sobre nossas práticas de privacidade e segurança, entre em contato conosco:
    </p>
    <ul class="lista-contato">
      <li>📧 contato@heyevent.com</li>
      <li>🌐 www.heyevent.com</li>
    </ul>
  </main>

  <footer>
    <div class="container">
      <p>© 2025 HeyEvent. Todos os direitos reservados.</p>
      <div class="links-footer">
        <a href="privacidade_seguranca.php">Privacidade</a>
        <a href="termos_privacidade.php">Termos de Uso</a>
      </div>
    </div>
  </footer>



  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      background-color: #ffffff;
      color: #333;
      line-height: 1.6;
    }

    .container {
      width: 90%;
      max-width: 1200px;
      margin: 0 auto;
    }

    header {
      background-color: #fff;
      box-shadow: 0 2px 10px rgba(0,0,0,0.05);
      position: sticky;
      top: 0;
      z-index: 100;
    }

    header .container {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 1rem 0;
    }

    .logoheader {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .logoheader img {
      width: 45px;
      height: auto;
    }

    .logo {
      font-family: "Quicksand", sans-serif;
      color: #050065ff;
      font-weight: 700;
      font-size: 1.5rem;
    }

    .menu a {
      text-decoration: none;
      color: #333;
      margin: 0 1rem;
      transition: color 0.3s;
    }

    .menu a:hover {
      color: #6C63FF;
    }

    button {
      background: linear-gradient(90deg, rgba(6, 0, 113, 1));
      color: #fff;
      border: none;
      padding: 0.6rem 1.4rem;
      border-radius: 25px;
      cursor: pointer;
      transition: transform 0.3s ease;
    }

    button:hover {
      transform: scale(1.05);
    }

    /* ======= CONTEÚDO ======= */
    main.conteudo-principal {
      max-width: 900px;
      margin: 60px auto;
      background: #fff;
      padding: 40px 60px;
      border-radius: 16px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.05);
    }

    .titulo-secao {
      font-family: "Quicksand", sans-serif;
      color: #050065ff;
      font-size: 1.6rem;
      margin-top: 40px;
      margin-bottom: 10px;
      border-left: 5px solid #6C63FF;
      padding-left: 12px;
    }

    .texto-principal {
      text-align: justify;
      font-size: 1rem;
      color: #444;
      margin-bottom: 20px;
    }

    ul.info_ul {
      list-style-type: disc;
      padding-left: 40px;
      color: #444;
      font-size: 0.95rem;
      margin-bottom: 20px;
    }

    ul.lista-contato {
      list-style-type: none;
      padding-left: 0;
      font-size: 1rem;
      color: #333;
    }

    ul.lista-contato li {
      margin-bottom: 8px;
    }

    /* ======= FOOTER ======= */
    footer {
      background-color: #111;
      color: #fff;
      padding: 2rem 0;
      text-align: center;
    }

    .links-footer a {
      color: #bbb;
      margin: 0 10px;
      text-decoration: none;
    }

    .links-footer a:hover {
      color: #fff;
    }

    /* ======= BOTÃO VOLTAR AO TOPO ======= */
    #botao-topo {
      position: fixed;
      bottom: 25px;
      right: 25px;
      background-color: #6C63FF;
      color: white;
      border: none;
      border-radius: 50%;
      width: 50px;
      height: 50px;
      font-size: 22px;
      cursor: pointer;
      box-shadow: 0 4px 10px rgba(0,0,0,0.2);
      transition: background-color 0.3s ease;
      display: none;
    }

    #botao-topo:hover {
      background-color: #050065;
    }

    @media (max-width: 768px) {
      main.conteudo-principal {
        padding: 25px 20px;
      }

      .titulo-secao {
        font-size: 1.3rem;
      }

      .menu a {
        margin: 0 0.5rem;
      }
    }
  </style>

</body>
</html>
