<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacidade e Segurança | HeyEvent</title>
    <link rel="shortcut icon" href="assets/Icone.png">
    
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&family=Montserrat:wght@400;600&family=Raleway:wght@400;600&display=swap" rel="stylesheet">
    
</head>

<body>
    <header>
        <img src="assets/Logo HeyEvent Ofc.png" alt="Logo HeyEvent" class="logo-site">
        <p class="nome-site">HeyEvent</p>
    </header>

    <main>
        <h2 class="titulo-secao">1. Compromisso com a Privacidade</h2>
        <p class="texto-principal">
           Coletamos apenas os dados necessários para oferecer uma experiência completa e personalizada em nossa plataforma. Todas as informações são utilizadas exclusivamente para finalidades legítimas, como:
        </p>
        <ul class="lista-informacoes">
            <li>Facilitar o acesso e a participação em eventos;</li>
            <li>Melhorar nossos serviços e comunicações;</li>
            <li>Cumprir obrigações legais e de segurança.</li>
        </ul>

        <h2 class="titulo-secao">2. Proteção dos Dados</h2>
        <p class="texto-principal">
        Adotamos rigorosas medidas de segurança digital e administrativa para proteger suas informações contra acessos não autorizados, alterações indevidas, vazamentos ou destruição.
        Entre as práticas adotadas estão:
        </p>
        <ul class="lista-informacoes">
            <li>Criptografia de dados sensíveis;</li>
            <li>Servidores protegidos e monitorados;</li>
            <li>Controle de acesso restrito aos colaboradores;</li>
            <li>Atualizações constantes de sistemas e políticas de segurança.</li>
        </ul>
        <p class="texto-principal">Essas medidas garantem que suas informações estejam sempre protegidas enquanto você navega, se cadastra ou interage com nossos serviços.</p>

        <h2 class="titulo-secao">3. Transparência e Controle</h2>
        <p class="texto-principal">
            Você tem o direito de saber quais dados coletamos e como são utilizados. Pode, a qualquer momento:
        </p>
        <ul class="lista-informacoes">
            <li>Solicitar a atualização ou exclusão de suas informações;</li>
            <li>Revogar o consentimento para comunicações;</li>
            <li>Solicitar esclarecimentos sobre o tratamento dos seus dados.</li>
        </ul>
        <p class="texto-principal">
           Nosso time está disponível para atender essas solicitações com agilidade e respeito à Lei Geral de Proteção de Dados (LGPD – Lei nº 13.709/2018).
        </p>

        <h2 class="titulo-secao">4. Uso Responsável das Informações</h2>
        <p class="texto-principal">Todos os dados são utilizados de forma responsável e ética. Caso seja necessário compartilhar informações com parceiros ou prestadores de serviço, isso será feito apenas para finalidades específicas, seguindo padrões de segurança e confidencialidade equivalentes aos nossos.</p>
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
        <p>Todos os direitos reservados.</p>
        <p>© 2025 HeyEvent.</p>
    </footer>

    <button id="botao-topo" title="Voltar ao topo">↑</button>
   <style>
        body {
            font-family: "Raleway", sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fc;
            color: #222;
            line-height: 1.7;
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
            width: 150px;
            display: block;
            margin: 0 auto 10px auto;
        }

        .nome-site {
            font-family: "Quicksand", sans-serif;
            font-size: 48px;
            font-weight: 500;
            letter-spacing: 1px;
        }

        main {
            max-width: 900px;
            margin: 40px auto;
            background: white;
            padding: 40px 60px;
            border-radius: 16px;
            box-shadow: 0 4px 16px rgba(0,0,0,0.1);
        }

        .titulo-secao {
            font-family: "Montserrat", sans-serif;
            color: #000F55;
            font-size: 26px;
            margin-top: 40px;
            margin-bottom: 10px;
            border-left: 5px solid #6C0034;
            padding-left: 12px;
        }

        .texto-principal {
            text-align: justify;
            font-size: 17px;
            color: #333;
            margin-bottom: 20px;
        }

        ul.lista-informacoes {
            list-style-type: disc;
            padding-left: 40px;
            color: #444;
            font-size: 16px;
        }

        ul.lista-contato {
            list-style-type: none;
            padding-left: 0;
            font-size: 16px;
            color: #333;
        }

        ul.lista-contato li {
            margin-bottom: 8px;
        }

        footer {
            text-align: center;
            background-color: #000F55;
            color: white;
            padding: 20px;
            margin-top: 40px;
            font-size: 15px;
            border-top-right-radius: 50% 50px;
            border-top-left-radius: 50% 50px;
        }

        #botao-topo {
            position: fixed;
            bottom: 25px;
            right: 25px;
            background-color: #6C0034;
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
            background-color: #000F55;
        }

        @media (max-width: 768px) {
            main {
                padding: 25px 20px;
            }

            .titulo-secao {
                font-size: 22px;
            }

            .nome-site {
                font-size: 38px;
            }
        }
</style>
    <script>
        const botaoTopo = document.getElementById("botao-topo");

        window.addEventListener("scroll", () => {
            if (window.scrollY > 300) {
                botaoTopo.style.display = "block";
            } else {
                botaoTopo.style.display = "none";
            }
        });

        botaoTopo.addEventListener("click", () => {
            window.scrollTo({ top: 0, behavior: "smooth" });
        });
    </script>
</body>
</html>
