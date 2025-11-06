<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nós | HeyEvent</title>
    <link rel="shortcut icon" href="assets/Icone.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&family=Raleway:wght@400;600&display=swap"
        rel="stylesheet">

</head>

<body>
    <header>
        <img src="assets/Logo HeyEvent Ofc.png" alt="Logo HeyEvent" class="logo-site">
        <p class="nome-site">HeyEvent</p>
    </header>

    <main>
        <p class="texto-sobre">
            A HeyEvent nasceu com o propósito de transformar a forma como as empresas organizam seus eventos internos.
            Nosso objetivo é oferecer uma solução simples, eficiente e especializada, que facilite a comunicação, a
            organização e a execução de eventos corporativos, garantindo mais engajamento e praticidade para todos os
            colaboradores.
            <br><br>
            Com a HeyEvent, os funcionários podem visualizar eventos em um calendário integrado, confirmar presença,
            acompanhar descrições, datas e locais, além de acessar banners e imagens que tornam a experiência mais
            dinâmica. Já os administradores têm total controle para cadastrar, editar e gerenciar eventos de forma
            rápida e organizada.
            <br><br>
            A HeyEvent é conduzida por Gabrielle e Kamilly, que acreditam que a tecnologia pode ser uma grande aliada na
            criação de experiências corporativas mais conectadas, organizadas e memoráveis.
        </p>
    </main>
    <footer>
        <p>Todos os direitos reservados.</p>
        <p>© 2025 HeyEvent.</p>
    </footer>
        <style>
        body {
            margin: 0;
            font-family: "Raleway", sans-serif;
            font-size: 18px;
            line-height: 1.7;
            background-color: #f8f9fc;
            color: #222;
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
            margin: 60px auto;
            background-color: white;
            border-radius: 16px;
            padding: 40px 50px;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
        }

        .texto-sobre {
            text-align: justify;
            color: #333;
            font-family: "Raleway", sans-serif;
            font-size: 18px;
        }

        footer {
            text-align: center;
            background-color: #000F55;
            color: white;
            padding: 20px;
            font-size: 15px;
            border-top-left-radius: 50% 30px;
            border-top-right-radius: 50% 30px;
        }

        @media (max-width: 768px) {
            .nome-site {
                font-size: 40px;
            }

            main {
                padding: 30px 25px;
            }

            .texto-sobre {
                font-size: 17px;
            }
        }
    </style>
</body>

</html>
