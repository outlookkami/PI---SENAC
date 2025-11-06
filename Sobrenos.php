<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sobre Nós | HeyEvent</title>
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

  <section class="hero-sobre container">
    <div class="texto-hero">
      <h1>Sobre a HeyEvent</h1>
      <p>Somos uma equipe apaixonada por transformar a forma como empresas organizam e vivenciam seus eventos. 
      Unimos tecnologia, design e estratégia para criar experiências corporativas eficientes e memoráveis.</p>
    </div>
    <div class="imagem-hero">
      <img src="assets\equipe.png" alt="Equipe trabalhando">
    </div>
  </section>

  <section class="missao">
    <div class="container">
      <h2>Nosso Propósito</h2>
      <div class="cards-mvv">
        <div class="card-mvv">
          <img src="assets/missao.png" alt="Missão">
          <h3>Missão</h3>
          <p>Facilitar a organização de eventos corporativos por meio de soluções digitais intuitivas e eficientes.</p>
        </div>
        <div class="card-mvv">
          <img src="assets/visao.png" alt="Visão">
          <h3>Visão</h3>
          <p>Ser referência em tecnologia para eventos empresariais, promovendo inovação e integração entre pessoas e negócios.</p>
        </div>
        <div class="card-mvv">
          <img src="assets/valores.png" alt="Valores">
          <h3>Valores</h3>
          <p>Inovação, colaboração, transparência e compromisso com a experiência do cliente.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="equipe">
    <div class="container">
      <h2>Nosso Time</h2>
      <div class="equipe-lista">
        <div class="membro">
          <img src="assets/" alt="Membro 1">
          <h4>Gabrielle</h4>
          <p>Desenvolvedora</p>
        </div>
        <div class="membro">
          <img src="assets/" alt="Membro 2">
          <h4>Kamily</h4>
          <p>Desenvolvedora</p>
        </div>
      </div>
    </div>
  </section>

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

    header {
      background-color: #fff;
      box-shadow: 0 2px 10px rgba(0,0,0,0.05);
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

    .hero-sobre {
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
      padding: 5rem 0;
    }

    .texto-hero {
      flex: 1;
      min-width: 300px;
    }

    .texto-hero h1 {
      font-size: 2.8rem;
      color: #222;
      margin-bottom: 1rem;
    }

    .texto-hero p {
      font-size: 1.1rem;
      color: #555;
      margin-bottom: 2rem;
    }

    .imagem-hero {
      flex: 1;
      display: flex;
      justify-content: center;
    }

    .imagem-hero img {
      width: 400px;
      max-width: 100%;
      border-radius: 20px;
    }

    .missao {
      text-align: center;
      padding: 4rem 0;
      background-color: #f9faff;
    }

    .missao h2 {
      font-size: 2rem;
      color: #050065;
      margin-bottom: 2rem;
    }

    .cards-mvv {
      display: flex;
      flex-wrap: wrap;
      gap: 2rem;
      justify-content: center;
    }

    .card-mvv {
      background-color: #fff;
      border-radius: 15px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.05);
      padding: 2rem;
      max-width: 320px;
      transition: transform 0.3s;
    }

    .card-mvv:hover {
      transform: translateY(-8px);
    }

    .card-mvv img {
      width: 60px;
      margin-bottom: 1rem;
    }

    .card-mvv h3 {
      color: #4F46E5;
      margin-bottom: 0.5rem;
    }

    .equipe {
      padding: 4rem 0;
      text-align: center;
    }

    .equipe h2 {
      font-size: 2rem;
      color: #050065;
      margin-bottom: 2rem;
    }

    .equipe-lista {
      display: flex;
      flex-wrap: wrap;
      gap: 2rem;
      justify-content: center;
    }

    .membro {
      background-color: #fff;
      border-radius: 15px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.05);
      padding: 2rem;
      max-width: 250px;
    }

    .membro img {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 1rem;
    }

    .membro h4 {
      color: #333;
      font-weight: 600;
    }

    .membro p {
      font-size: 0.9rem;
      color: #777;
    }

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

    @media (max-width: 768px) {
      .hero-sobre {
        flex-direction: column;
        text-align: center;
      }

      .imagem-hero img {
        margin-top: 2rem;
      }
    }

  </style>
</body>
</html>
