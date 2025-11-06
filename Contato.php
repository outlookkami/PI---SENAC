<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contato | HeyEvent</title>
  <link rel="shortcut icon" href="assets/Icone.png">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&family=Quicksand:wght@500;700&display=swap" rel="stylesheet">
</head>

<body>
  <header>
    <div class="container header-container">
      <div class="logo-container">
        <img src="assets/Logo HeyEvent Ofc.png" alt="Logo HeyEvent">
        <h1 class="logo">HeyEvent</h1>
      </div>
      <nav>
        <a href="pagina_inicial.php">Início</a>
        <a href="Sobrenos.php">Sobre</a>
        <a href="contato.php">Contato</a>
        <a href="Login.php"><button>Entrar</button></a>
      </nav>
    </div>
  </header>

  <main class="container contato">
    <h1>Entre em Contato</h1>
    <p class="descricao">Estamos prontos para ajudar! Fale conosco por telefone ou e-mail e tire suas dúvidas.</p>

    <div class="contato-cards">
      <div class="card-contato">
        <img src="assets/telefone.png" alt="Telefone">
        <h3>Kamilly</h3>
        <p>(99) 99999-9999</p>
      </div>

      <div class="card-contato">
        <img src="assets/telefone.png" alt="Telefone">
        <h3>Gabrielle</h3>
        <p>(99) 99999-9999</p>
      </div>

      <div class="card-contato">
        <img src="assets/email.png" alt="E-mail">
        <h3>E-mail</h3>
        <p>contato@heyevent.com</p>
      </div>
    </div>
  </main>

  <footer>
    <div class="container">
      <p>© 2025 HeyEvent. Todos os direitos reservados.</p>
      <div class="links-footer">
        <a href="#">Privacidade</a>
        <a href="#">Termos de Uso</a>
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
      background-color: #fff;
      color: #333;
      line-height: 1.6;
    }

    /* HEADER */
    header {
      background-color: #fff;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
      position: sticky;
      top: 0;
      z-index: 100;
    }

    .container {
      width: 90%;
      max-width: 1200px;
      margin: 0 auto;
    }

    .header-container {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 1rem 0;
    }

    .logo-container {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .logo-container img {
      width: 45px;
    }

    .logo {
      font-family: 'Quicksand', sans-serif;
      color: #050065;
      font-weight: 700;
      font-size: 1.5rem;
    }

    nav a {
      text-decoration: none;
      color: #333;
      margin: 0 1rem;
      transition: color 0.3s;
    }

    nav a:hover {
      color: #6C63FF;
    }

    button {
      background-color: #050065;
      color: #fff;
      border: none;
      padding: 0.6rem 1.4rem;
      border-radius: 25px;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    button:hover {
      transform: scale(1.05);
    }

    /* CONTEÚDO PRINCIPAL */
    .contato {
      text-align: center;
      padding: 5rem 0;
    }

    .contato h1 {
      font-size: 2.5rem;
      color: #050065;
      margin-bottom: 1rem;
    }

    .descricao {
      font-size: 1.1rem;
      color: #555;
      margin-bottom: 3rem;
    }

    .contato-cards {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 2rem;
    }

    .card-contato {
      background-color: #fff;
      border-radius: 15px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
      padding: 2rem;
      max-width: 280px;
      transition: transform 0.3s;
    }

    .card-contato:hover {
      transform: translateY(-8px);
    }

    .card-contato img {
      width: 60px;
      margin-bottom: 1rem;
    }

    .card-contato h3 {
      color: #050065;
      margin-bottom: 0.5rem;
    }

    .card-contato p {
      color: #444;
      font-size: 1rem;
    }

    /* FOOTER */
    footer {
      
      color: #000000ff;
      padding: 2rem 0;
      text-align: center;
      margin-top: 4rem;
    }

    .links-footer a {
      color: #252525ff;
      margin: 0 10px;
      text-decoration: none;
    }

    .links-footer a:hover {
      color: #00003eff;
    }

    @media (max-width: 768px) {
      .contato-cards {
        flex-direction: column;
        align-items: center;
      }

      .card-contato {
        width: 90%;
      }
    }
  </style>
</body>
</html>
