<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato | HeyEvent</title>
    <link rel="shortcut icon" href="assets/Icone.png">

    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&family=Raleway:wght@400;600&display=swap" rel="stylesheet">

</head>

<body>
    <header>
        <img src="assets/Logo HeyEvent Ofc.png" alt="Logo HeyEvent" class="logo-site">
        <p class="nome-site">HeyEvent</p>
    </header>

    <main>
        <h1 class="titulo-contato">Entre em Contato</h1>

        <div class="bloco-contato">
            <p class="texto-contato">📞 Kamilly: (99) 99999-9999</p>
        </div>

        <div class="bloco-contato">
            <p class="texto-contato">📞 Gabrielle: (99) 99999-9999</p>
        </div>

        <div class="bloco-contato">
            <p class="texto-contato">📧 E-mail: contato@heyevent.com</p>
        </div>
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
            width: 130px;
            display: block;
            margin: 0 auto 10px auto;
        }

        .nome-site {
            font-family: "Quicksand", sans-serif;
            font-size: 58px;
            font-weight: 500;
            margin: 0;
        }

        main {
            max-width: 600px;
            margin: 60px auto;
            background-color: white;
            border-radius: 16px;
            padding: 40px 50px;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .titulo-contato {
            font-size: 28px;
            font-weight: 600;
            margin-bottom: 30px;
            color: #000F55;
        }

        .bloco-contato {
            margin-bottom: 20px;
            padding: 15px 20px;
            background-color: #f1f3f9;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            transition: 0.3s;
        }

        .bloco-contato:hover {
            background-color: #e0e3f0;
            transform: translateY(-2px);
        }

        .texto-contato {
            font-size: 18px;
            color: #333;
        }

        footer {
            text-align: center;
            background: linear-gradient(90deg, #000F55, #6C0034);
            color: white;
            padding: 25px;
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

            .titulo-contato {
                font-size: 24px;
            }

            .texto-contato {
                font-size: 17px;
            }
        }
    </style>
</body>
</html>
