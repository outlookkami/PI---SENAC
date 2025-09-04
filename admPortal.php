<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Administrativo</title>
    <link rel="stylesheet" href="AdmPortal.css">
    <link rel="shortcut icon" href="assets\Icone.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <!-- https://replit.com/@kamillyt/TeamConnect -->
</head>

<body>
    <header>
        <button><img class="menu" src="assets\menu.png" alt="barrinhas de menu"></button>
        <button><img class="Logo" src="assets\Logo HeyEvent Ofc.png" alt="logo">Sobre Nós</button>
        <button><img class="calendario" src="assets\Calendario.png" alt="">Calendário</button>
        <button><img class="notificaçoes" src="assets\notificacoes.png" alt="notificações">Notificações</button>
        <button><img class="user" src="assets\user.png" alt="perfil"></button>
    </header>

    <main>
        <div class="conteudoPrincipal" id="conteudoPrincipal">
            <h2 class="TituloDashboard">Dashboard</h2>
            <div class="Dashboard">
                <br>

                <div> <!-- Eventos Confirmados -->
                    <table class="TableDashboard Eventos">

                        <tr>
                            <td rowspan="2"><img class="IconesDashboard" src="assets/img/calendar (1).png" alt="calendário"></td>
                            <td>Eventos Confirmados</td>
                        </tr>
                        <tr>
                            <td class="valor"><b>0</b></td>
                        </tr>
                    </table>
                </div>

                <div> <!-- Presença Total -->
                    <table class="TableDashboard Presença">
                        <tr>
                            <td rowspan="2"><img class="IconesDashboard iconeTeam" src="assets/img/team.png" alt="pessoas"></td>
                            <td>Presença Total</td>
                        </tr>
                        <tr>
                            <td class="valor"><b>0%</b></td>
                        </tr>
                    </table>
                </div>

                <div> <!-- Prêmios Disponíveis -->
                    <table class="TableDashboard Prêmios">
                        <tr>
                            <td rowspan="2"><img class="IconesDashboard" src="assets/img/gift.png" alt="presente"></td>
                            <td>Prêmios Disponíveis</td>
                        </tr>
                        <tr>
                            <td class="valor"><b>4</b></td>
                        </tr>
                    </table>
                </div>

                <div> <!-- Pontos Acumulados -->
                    <table class="TableDashboard Pontos">
                        <tr>
                            <td rowspan="2"><img class="IconesDashboard" src="assets/img/star.png" alt="estrela"></td>
                            <td>Pontos Acumulados</td>
                        </tr>
                        <tr>
                            <td class="valor"><b>2.450</b></td>
                        </tr>
                    </table>
                </div>
            </div>

            <button class="criarEvento" onclick="mostraForm()">&#43 Criar evento</button>
    </main>
    </div>
    <!-- Formulário de criação de eventos -->
    <div class="CriarEventoForm" id="formCriarEvento">
        <form method="post" class="CriarEventoForm"></form>
        <h2 class="CNE">Criar Novo Evento</h2>
        <label for="titulo_evento"><b>Título do evento</b></label><br>
        <input class="inpt1" type="text" name="titulo_evento" placeholder="Digite o título do seu evento">
        <br><br>
        <label for="descricao_evento"><b>Descrição</b></label><br>
        <input class="inpt1" type="text" name="descricao_evento" placeholder="Descreva o evento">
        <br><br>
        <label for="data_evento"><b>Data</b></label><br>
        <input class="inpt1" type="date" name="descricao_evento" id="ApiCalendario" >
        <br><br>
        <label for="horario_evento"><b>Horário</b></label><br>
        <input class="inpt1" type="text" name="horario_evento" placeholder="Ex: 14:00 - 16:00">
        <br><br>
        <label for="local_evento"><b>Local</b></label><br>
        <input class="inpt1" type="text" name="local_evento" placeholder="Digite o local do evento">
        <br><br>
        <label for="categoria_evento"><b>Categoria</b></label><br>
        <input class="inpt1" type="text" name="categoria_evento" placeholder="Selecione uma categoria">
        <br><br>
        <label for="imagem_evento"><b>Arquivo de imagem (opcional)</b></label><br>
        <input class="file" type="file"><br><br>
        <button class="botaoCancelar" onclick="escondeForm()">Cancelar</button>
        <button class="botaoCriar" type="submit" onclick="escondeForm()">Criar Evento</button>
    </div>

    <script>
        function mostraForm() {
            document.getElementById("formCriarEvento").style.display = "block";
            document.getElementById("conteudoPrincipal").classList.add("blur");
        }
    </script>

    <script>
        function escondeForm() {
            document.getElementById("formCriarEvento").style.display = "none";
        }




    </script>
    <style>
        /* Paleta de cores: azul #4E598C / rosa escuro #D90368 / verde #77A0A9 / rosa claro #FFEAEE */
        * {
            margin: 0;
            padding: 0;
        }

        body {
            background-color: #ffffffff;
        }

        /* HEADER */
        header {
            display: flex;

            background-image: linear-gradient(to bottom, #000F55, #6C0034);
            background-repeat: no-repeat;
            width: 100vw;
            height: 40px;
            justify-content: space-between;
        }

        .inícioHeader {
            padding-left: 20px;
            margin-top: 10px;
            gap: 40px;
        }

        .meioHeader {
            margin-top: 10px;

        }

        .fimHeader {
            padding-right: 20px;
            margin-top: 10px;
        }

        button {
            background-color: transparent;
            color: white;
            border: none;
            place-content: space-between;

            font-family: "Raleway", sans-serif;
        }

        button:hover {
            color: #D90368;
            cursor: pointer;

        }

        .TituloTabela {
            margin: 20px;
            color: white;
        }

        table {
            background-color: white;
            border-radius: 20px;
            padding: 10px;
            margin-left: 20px;
            width: 800px;
            height: 80px;
        }

        /* DASHBOARD */
        .TituloDashboard {
            margin: 20px;
            color: black;
        }

        /* Grupo das Tabelas */
        .Dashboard {
            display: flex;
            gap: 40px;
            justify-content: center;
        }

        /* Elementos tabelas */
        .TableDashboard {
            width: 360px;
            height: 100px;
            background-color: white;
            border-radius: 20px;
            border: 1px solid #838691;
        }

        /* Borders específicas (esquerda) */
        .Eventos {
            border-left: 4px solid #4e598c;
        }

        .Presença {
            border-left: 4px solid #77A0A9;
        }

        .Prêmios {
            border-left: 4px solid #D90368;
        }

        .Pontos {
            border-left: 4px solid #4e598c;
        }

        /* ícones */
        .IconesDashboard {
            margin-left: 20px;
            width: 50px;
        }

        .iconeTeam {
            width: 60px;
        }

        /* Tamanhos de fonte */
        .valor {
            font-size: 25px;
        }

        /* Botão Cirar Evento */
        .criarEvento {
            background-color: #4e598c;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 8px;
            width: 120px;
            text-align: center;
            cursor: pointer;
        }

        /* .CriarEventoForm {
            display: flex;
            background-color: #FFEAEE;
            border-radius: 40px;
            display: none;
            align-items: center;
            flex-direction: column;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;

        } */



        .botaoCriar {
            background-color: #000F55;
            color: white;
            border-radius: 6px;
            padding: 6px;
            width: 90px;
            border: 1px solid #000F55;
        }

        .botaoCancelar {
            background-color: transparent;
            border: 1px solid #838691;
            color: black;
            border-radius: 6px;
            padding: 6px;
            width: 90px;
        }

        .menu {
            width: 20px;
        }

        .Logo {
            width: 30px;
        }

        .calendario {
            width: 60px;
        }

        .notificaçoes {
            width: 30px;
        }

        .user {
            width: 40px;
        }

        body {
            font-family: "Raleway", sans-serif;
        }

        .CriarEventoForm {
            display: flex;
            background-color: #ffffffff;
            box-shadow: 5px 5px 10px 5px rgba(0, 0, 0, 0.108);
            border-radius: 40px;
            display: none;
            align-items: center;
            flex-direction: column;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;

        }

        ::placeholder {
            font-family: "Raleway", sans-serif;
        }

        .inpt1 {
            height: 40px;
            width: 300px;
            border-radius: 8px;
            border-style: solid;
            border-color: black;
            border-width: 1px;
        }

        .CNE {

            color: #000F55;
        }
    </style>
</body>

</html>