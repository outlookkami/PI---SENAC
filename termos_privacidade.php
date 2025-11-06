<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Termos de Uso e Privacidade | HeyEvent</title>
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

  <main class="container termos">
    <h1>Termos de Uso e Política de Privacidade</h1>

    <section>
      <h2>1. Introdução</h2>
      <p>
        Bem-vindo(a) à HeyEvent! Ao acessar e utilizar este site, você concorda com os presentes Termos de Uso e com a nossa Política de Privacidade.
        Recomendamos que leia atentamente todas as informações antes de utilizar nossos serviços.
      </p>
    </section>

    <section>
      <h2>2. Uso do Site</h2>
      <p>
        O conteúdo disponibilizado neste site tem como objetivo oferecer informações sobre nossos serviços, eventos e funcionalidades da plataforma.
        É proibido utilizar o site para:
      </p>
      <ul>
        <li>Praticar atos ilícitos ou que violem direitos de terceiros;</li>
        <li>Inserir informações falsas ou enganosas;</li>
        <li>Tentar obter acesso não autorizado a partes restritas do sistema.</li>
      </ul>
    </section>

    <section>
      <h2>3. Cadastro e Conta do Usuário</h2>
      <p>
        Para acessar determinadas áreas ou funcionalidades, pode ser necessário criar uma conta.
        O usuário se compromete a fornecer informações verdadeiras, manter seus dados atualizados e não compartilhar sua senha com terceiros.
        A HeyEvent não se responsabiliza por danos decorrentes do uso indevido de credenciais.
      </p>
    </section>

    <section>
      <h2>4. Coleta e Uso de Dados Pessoais</h2>
      <p>Ao utilizar nossos serviços, podemos coletar informações como:</p>
      <ul>
        <li>Nome e e-mail;</li>
        <li>Dados fornecidos durante o cadastro ou participação em eventos;</li>
        <li>Informações de navegação (cookies, endereço IP, tipo de dispositivo, etc.).</li>
      </ul>
      <p>Esses dados são utilizados para:</p>
      <ul>
        <li>Melhorar sua experiência na plataforma;</li>
        <li>Personalizar o conteúdo exibido;</li>
        <li>Enviar comunicações sobre eventos, atualizações ou ofertas;</li>
        <li>Cumprir obrigações legais e de segurança.</li>
      </ul>
    </section>

    <section>
      <h2>5. Proteção de Dados</h2>
      <p>
        A HeyEvent adota medidas técnicas e administrativas para proteger os dados pessoais contra acesso, alteração, divulgação ou destruição não autorizada.
        Os dados são armazenados de forma segura e utilizados apenas para as finalidades descritas nesta política.
      </p>
    </section>

    <section>
      <h2>6. Compartilhamento de Informações</h2>
      <p>Seus dados não serão vendidos ou compartilhados com terceiros, exceto:</p>
      <ul>
        <li>Quando necessário para o funcionamento do serviço (como processadores de pagamento ou serviços de e-mail);</li>
        <li>Quando houver exigência legal ou ordem judicial.</li>
      </ul>
    </section>

    <section>
      <h2>7. Contato</h2>
      <p>Em caso de dúvidas, sugestões ou solicitações relacionadas à privacidade, entre em contato conosco:</p>
      <ul class="lista-contato">
        <li>📧 contato@heyevent.com</li>
        <li>🌐 www.heyevent.com</li>
      </ul>
    </section>

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
      line-height: 1.7;
    }

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

    main.termos {
      padding: 5rem 0;
    }

    .termos h1 {
      font-size: 2.2rem;
      color: #050065;
      margin-bottom: 2rem;
      text-align: center;
    }

    .termos section {
      margin-bottom: 2.5rem;
    }

    .termos h2 {
      color: #050065;
      font-size: 1.4rem;
      margin-bottom: 0.5rem;
      border-left: 4px solid #6C63FF;
      padding-left: 10px;
    }

    .termos p, .termos ul {
      color: #555;
      font-size: 1rem;
      margin-bottom: 1rem;
    }

    ul {
      padding-left: 2rem;
      list-style-type: disc;
    }

    .lista-contato {
      list-style-type: none;
      padding: 0;
    }

    /* FOOTER */
    footer {
      background-color: #111;
      color: #fff;
      padding: 2rem 0;
      text-align: center;
      margin-top: 4rem;
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
      .termos h1 {
        font-size: 1.8rem;
      }

      main.termos {
        padding: 2rem 1rem;
      }
    }
  </style>


</body>
</html>
