<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Privacidade e Segurança | HeyEvent</title>
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
      Coletamos apenas os dados necessários para oferecer uma experiência completa e personalizada em nossa plataforma. Todas as informações são utilizadas exclusivamente para finalidades legítimas, como:
    </p>
    <ul class="info_ul">
      <li>Facilitar o acesso e a participação em eventos;</li>
      <li>Melhorar nossos serviços e comunicações;</li>
      <li>Cumprir obrigações legais e de segurança.</li>
    </ul>

    <h2 class="titulo-secao">2. Proteção dos Dados</h2>
    <p class="texto-principal">
      Adotamos rigorosas medidas de segurança digital e administrativa para proteger suas informações contra acessos não autorizados, alterações indevidas, vazamentos ou destruição.
      Entre as práticas adotadas estão:
    </p>
    <ul class="info_ul">
      <li>Criptografia de dados sensíveis;</li>
      <li>Servidores protegidos e monitorados;</li>
      <li>Controle de acesso restrito aos colaboradores;</li>
      <li>Atualizações constantes de sistemas e políticas de segurança.</li>
    </ul>
    <p class="texto-principal">
      Essas medidas garantem que suas informações estejam sempre protegidas enquanto você navega, se cadastra ou interage com nossos serviços.
    </p>

    <h2 class="titulo-secao">3. Transparência e Controle</h2>
    <p class="texto-principal">
      Você tem o direito de saber quais dados coletamos e como são utilizados. Pode, a qualquer momento:
    </p>
    <ul class="info_ul">
      <li>Solicitar a atualização ou exclusão de suas informações;</li>
      <li>Revogar o consentimento para comunicações;</li>
      <li>Solicitar esclarecimentos sobre o tratamento dos seus dados.</li>
    </ul>
    <p class="texto-principal">
      Nosso time está disponível para atender essas solicitações com agilidade e respeito à Lei Geral de Proteção de Dados (LGPD – Lei nº 13.709/2018).
    </p>

    <h2 class="titulo-secao">4. Uso Responsável das Informações</h2>
    <p class="texto-principal">
      Todos os dados são utilizados de forma responsável e ética. Caso seja necessário compartilhar informações com parceiros ou prestadores de serviço, isso será feito apenas para finalidades específicas, seguindo padrões de segurança e confidencialidade equivalentes aos nossos.
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
