<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal do Colaborador</title>
    <link rel="stylesheet" href="colabPortal.css">

    <!-- https://replit.com/@kamillyt/TeamConnect -->
</head>

<body>
    <header>
        <div class="inícioHeader">
            <button class="paginas"><img src="" alt="barrinhas de menu"></button>
            <button class="paginas"><img src="" alt="logo"></button>
        </div>
        <div class="meioHeader">
            <button class="paginas">Dashboard</button>
            <button class="paginas">Eventos</button>
            <button class="paginas">Calendário</button>
            <button class="paginas">Prêmios</button>
        </div>
        <div class="fimHeader">
            <button class="paginas"><img src="" alt="notificações"></button>
            <button class="paginas"><img src="" alt="perfil"></button>
            <button class="paginas">Sair</button>
        </div>
    </header>

    <main>
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

        <br><br><br><br><br>

        <h3>Próximos Eventos</h3>
        <br><br>
        <div class="ProximosEventos">
            <table class="TableEventos">
                <tr>
                    <td><img class="imagensIlustrativasEventos" src="assets/img/reunião estratégica-pexels.jpg" width="420" alt="Imagem da reunião"></td>
                </tr>
                <tr>
                    <td>
                        <h4>Reunião Estratégica Q4</h4>
                    </td>
                    <td><!-- Tag indicando que é uma Reunião --></td>
                </tr>
                <tr>
                    <td>
                        <p>Planejamento e revisão de metas para o último trimestre do ano.</p>
                    </td>
                </tr>
                <tr>
                    <td><img class="IconesEventos" src="assets/img/calendar (2).png" alt="ícone calendário"> 15 de Dezembro, 2025</td>
                </tr>
                <tr>
                    <td><img class="IconesEventos" src="assets/img/time.png" alt="ícone relógio"> 09:00 - 17:00</td>
                </tr>
                <tr>
                    <td><img class="IconesEventos" src="assets/img/pin.png" alt="ícone mapa">Auditório Principal</td>
                </tr>
                <tr>
                    <td> 25 confirmados</td>
                </tr>
                <tr>
                    <td><button class="ConfirmarPresença">Confirmar Presença</button></td>
                </tr>
            </table>

            <table class="TableEventos">
                <tr>
                    <td><img class="imagensIlustrativasEventos" src="assets/img/workshop de inovação - pexels.jpg" width="400" alt="Workshop de inovação"></td>
                </tr>
                <tr>
                    <td>
                        <h4>Workshop de inovação</h4>
                    </td>
                    <td><!-- Tag indicando que é um treinamento--></td>
                </tr>
                <tr>
                    <td>
                        <p>Metodologias ágeis e design thinking para projetos inovadores.</p>
                    </td>
                </tr>
                <tr>
                    <td class="IconesEventos"><img class="IconesEventos" src="assets/img/calendar (2).png" alt="ícone calendário">18 de Dezembro, 2025</td>
                </tr>
                <tr>
                    <td><img class="IconesEventos" src="assets/img/time.png" alt="ícone relógio">14:00 - 16:00</td>
                </tr>
                <tr>
                    <td><img class="IconesEventos" src="assets/img/pin.png" alt="ícone mapa">Sala de conferência A</td>
                </tr>
                <tr>
                    <td> +12 confirmados</td>
                </tr>
                <tr>
                    <td><button class="ConfirmarPresença">Confirmar Presença</button></td>
                </tr>
            </table>

            <table class="TableEventos">
                <tr>
                    <td><img class="imagensIlustrativasEventos" src="assets/img/festa de fim de ano-pexels.jpg" alt="Festa de Fim de Ano"></td>
                </tr>
                <tr>
                    <td>
                        <h4>Festa de fim de ano</h4>
                    </td>
                    <td><!-- Tag indicando que é um evento Social--></td>
                </tr>
                <tr>
                    <td>
                        <p>Celebração anual com toda a equipe, premiações, e confraternização.</p>
                    </td>
                </tr>
                <tr>
                    <td><img class="IconesEventos" src="assets/img/calendar (2).png" alt="ícone calendário">22 de Dezembro, 2025</td>
                </tr>
                <tr>
                    <td><img class="IconesEventos" src="assets/img/time.png" alt="ícone relógio">18:00 - 22:00</td>
                </tr>
                <tr>
                    <td><img class="IconesEventos" src="assets/img/pin.png" alt="ícone mapa">Salão de Eventos</td>
                </tr>
                <tr>
                    <td> 87 confirmados</td>
                </tr>
                <tr>
                    <td><button class="PresençaConfirmada">Presença Confirmada</button></td>
                </tr>
            </table>
        </div>

        <br><br>

        <h3>Calendário de Eventos</h3>
        <br><br>
        <!-- Inserir calendário de eventos com a API -->
    </main>
    <style>
        /* Paleta de cores: azul #4E598C / rosa escuro #D90368 / verde #77A0A9 / rosa claro #FFEAEE */

        * {
            margin: 0;
            padding: 0;
        }

        body {
            background-color: #FFEAEE;
            /* background: linear-gradient (to bottom, #000f55, #6c0034); */
        }

        /* HEADER */
        header {
            display: flex;
            background-color: #4e598c;
            width: 100vw;
            height: 50px;
            padding: 15px;
            justify-content: space-between;
            justify-content: center;
        }

        .inícioHeader {
            display: flex;
            justify-content: center;
            gap: 40px;
        }

        .meioHeader {
            display: flex;
            justify-content: center;
        }

        .fimHeader {
            display: flex;
            justify-content: center;
        }

        .paginas {
            background-color: transparent;
            color: white;
            border: none;
            place-content: space-between;
        }

        .paginas:hover {
            color: #D90368;
            cursor: pointer;
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

        /* PRÓXIMOS EVENTOS:  */
        /* Grupo das tabelas */
        .ProximosEventos {
            display: flex;
            gap: 40px;
            justify-content: center;
        }

        /* Elementos das tabelas */
        .TableEventos {
            background-color: white;
            border-radius: 20px;
            padding: 20px;
            width: 480px;
            height: 100px;
            border-spacing: 15px;
        }

        .imagensIlustrativasEventos {
            width: 480px;
            height: 300px;
            border-radius: 12px;
        }

        /* ícones */
        .IconesEventos {
            width: 20px;
        }

        /* Botões Eventos */
        .ConfirmarPresença {
            background-color: #D90368;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 8px;
            width: 420px;
            text-align: center;
            cursor: pointer;
        }

        .PresençaConfirmada {
            background-color: #77A0A9;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 8px;
            width: 420px;
            cursor: pointer;
        }

        .TableFormat {
            background-color: white;
            border-radius: 20px;
            padding: 10px;
            margin-left: 20px;
            width: 800px;
            height: 80px;
        }
    </style>
</body>

</html>