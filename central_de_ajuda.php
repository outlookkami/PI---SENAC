<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Central de Ajuda | HeyEvent</title>
  <link rel="shortcut icon" href="assets/Icone.png">

  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600&family=Raleway:wght@400;600&display=swap" rel="stylesheet">
</head>

<body>
  <header>
    <img src="assets/Logo HeyEvent Ofc.png" alt="Logo HeyEvent" class="logo-site">
    <p class="nome-site">HeyEvent</p>
  </header>

  <h1 class="titulo-central">Central de Ajuda</h1>

  <section class="container-ajuda">

    <div class="pergunta">
      <div class="titulo-pergunta">
        <span>Como posso criar uma conta na HeyEvent?</span>
        <span class="icone-pergunta">+</span>
      </div>
      <div class="conteudo-resposta">
        <p>Para criar uma conta, acesse a página inicial da HeyEvent e clique em “Cadastrar-se”. Em seguida, preencha seus dados e confirme seu e-mail. Após isso, você poderá acessar todos os recursos da plataforma.</p>
      </div>
    </div>

    <div class="pergunta">
      <div class="titulo-pergunta">
        <span>Esqueci minha senha. O que fazer?</span>
        <span class="icone-pergunta">+</span>
      </div>
      <div class="conteudo-resposta">
        <p>Clique em “Esqueci minha senha” na tela de login e informe seu e-mail. Você receberá um link para redefinir sua senha de forma rápida e segura.</p>
      </div>
    </div>

    <div class="pergunta">
      <div class="titulo-pergunta">
        <span>Como confirmar presença em um evento?</span>
        <span class="icone-pergunta">+</span>
      </div>
      <div class="conteudo-resposta">
        <p>Ao acessar o evento desejado, clique no botão “Confirmar Presença”. Sua confirmação será registrada automaticamente e o organizador será notificado.</p>
      </div>
    </div>

    <div class="pergunta">
      <div class="titulo-pergunta">
        <span>Sou administrador. Como posso cadastrar um novo evento?</span>
        <span class="icone-pergunta">+</span>
      </div>
      <div class="conteudo-resposta">
        <p>No painel do administrador, clique em “Criar Evento”. Insira as informações solicitadas, como título, data, local e descrição. Após salvar, o evento ficará visível para todos os colaboradores.</p>
      </div>
    </div>

    <div class="pergunta">
      <div class="titulo-pergunta">
        <span>Como entrar em contato com o suporte da HeyEvent?</span>
        <span class="icone-pergunta">+</span>
      </div>
      <div class="conteudo-resposta">
        <p>Você pode entrar em contato conosco através do e-mail <strong>contato@heyevent.com</strong> ou pela página de “Fale Conosco” disponível no site.</p>
      </div>
    </div>

  </section>

  <footer>
    <p>Todos os direitos reservados.</p>
    <p>© 2025 HeyEvent.</p>
  </footer>
  <style>
    body {
      margin: 0;
      font-family: "Raleway", sans-serif;
      background-color: #f9f9fb;
      color: #222;
      line-height: 1.6;
    }

    header {
        text-align: center;
        background: linear-gradient(90deg, #000F55, #6C0034);
        color: white;
        padding: 40px 20px;
        border-bottom-left-radius: 50% 100px;
        border-bottom-right-radius: 50% 100px;
    }

    .logo-site {
      width: 120px;
      display: block;
      margin: 0 auto 10px auto;
    }

    .nome-site {
      font-family: "Quicksand", sans-serif;
      font-size: 50px;
      margin: 0;
    }

    .titulo-central {
      text-align: center;
      font-family: "Montserrat", sans-serif;
      font-size: 28px;
      color: #000F55;
      margin-top: 60px;
    }

    .container-ajuda {
      max-width: 900px;
      margin: 40px auto;
      background: white;
      border-radius: 16px;
      box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
      padding: 40px 50px;
    }

    .pergunta {
      background-color: #f1f3f9;
      border-radius: 10px;
      margin-bottom: 15px;
      overflow: hidden;
      transition: 0.3s;
    }

    .titulo-pergunta {
      cursor: pointer;
      padding: 18px 20px;
      font-weight: 600;
      display: flex;
      justify-content: space-between;
      align-items: center;
      color: #000F55;
      background-color: #eef1f8;
      transition: background-color 0.3s;
    }

    .titulo-pergunta:hover {
      background-color: #e0e3f0;
    }

    .icone-pergunta {
      font-size: 22px;
      transition: transform 0.3s ease;
    }

    .conteudo-resposta {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.4s ease;
      background-color: white;
      padding: 0 20px;
      color: #333;
    }

    .conteudo-resposta p {
      padding: 15px 0;
      font-size: 17px;
    }

    .pergunta.ativa .conteudo-resposta {
      max-height: 400px;
    }

    .pergunta.ativa .icone-pergunta {
      transform: rotate(45deg);
    }

    footer {
      text-align: center;
      background-color: #000F55;
      color: white;
      padding: 25px;
      margin-top: 40px;
      font-size: 15px;
      border-top-left-radius: 50% 30px;
      border-top-right-radius: 50% 30px;
    }

    @media (max-width: 768px) {
      .container-ajuda {
        padding: 30px 25px;
      }

      .titulo-central {
        font-size: 24px;
      }
    }
  </style>

  <script>
    const perguntas = document.querySelectorAll('.pergunta');

    perguntas.forEach(pergunta => {
      pergunta.addEventListener('click', () => {
        pergunta.classList.toggle('ativa');
      });
    });
  </script>
</body>
</html>
