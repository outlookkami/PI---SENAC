<!-- PHP - Conexão banco de dados e seleção dos dados por data -->

<?php

// $host = "localhost";
// $username = "root";
// $password = "";
// $database = "eventos";

// $connection = new mysqli($host, $username, $password, $database);

// $result = $connection -> query($sql);

// if ($connection -> connect_error){
//     die("Erro de conexão: " . $connection -> connect_error);
// }

// $sql = "SELECT * FROM tabela_eventos ORDER BY data_evento ASC";



?>


<!-- HTML - Portal do Colaborador -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal do Colaborador</title>
    <!-- <link rel="stylesheet" href="colabPortal.css"> -->
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
        <nav>
            <div class="inícioHeader">
                <ul>
                    <li class="paginas"><button class="paginas"><img class="menu" src="assets\menu.png" alt="barrinhas de menu"></button></li>
                    <li><button class="paginas"><img class="Logo" src="assets\Logo HeyEvent Ofc.png" alt="logo"></button></li>
                </ul>
            </div>
            <div class="meioHeader">
                <ul>
                    <li class="paginas"><a href="">Dashboard</a></li>
                    <li><a href="">Eventos</a></li>
                    <li><a href=""><img class="calendario" src="assets\Calendario.png" alt=""> Calendário</a></li>
                    <li><a href="">Prêmios</a></li>
                </ul>
            </div>
            <div class="fimHeader">
                <ul>
                    <li><a href="Perfil.php"><img class="user" src="assets\user.png" alt="perfil">Perfil</a></li>
                    <li><a href=""><img class="sair" src="assets\sair.png" alt="">Sair</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <h2 class="TituloDashboard">Dashboard</h2>
        <div class="Dashboard">
            <br>
            <div> <!-- Eventos Confirmados -->
                <table class="TableDashboard Eventos">

                    <tr>
                        <td rowspan="2"><img class="IconesDashboard" src="assets/calendarioAzul.png" alt="calendário"></td>
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
                        <td rowspan="2"><img class="IconesDashboard iconeTeam" src="assets/team.png" alt="pessoas"></td>
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
                        <td rowspan="2"><img class="IconesDashboard" src="assets/gift.png" alt="presente"></td>
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
                        <td rowspan="2"><img class="IconesDashboard" src="assets/star.png" alt="estrela"></td>
                        <td>Pontos Acumulados</td>
                    </tr>
                    <tr>
                        <td class="valor"><b>2.450</b></td>
                    </tr>
                </table>
            </div>
        </div>

        <br><br><br><br><br>

        <h2 class="tituloProxEven">Próximos Eventos</h2>
        <br><br>
        <div class="ProximosEventos">
            <table class="TableEventos">
                <tr>
                    <td><img class="imagensIlustrativasEventos" id="imagemEvento" src="assets/reunião estratégica-pexels.jpg" width="420" alt="Imagem da reunião"></td>
                </tr>
                <tr class="tituloTag">
                    <td>
                        <h4 id="tituloEvento">Reunião Estratégica Q4</h4>
                    </td>
                    <td class="tag" id="tagEvento">Reunião</td>
                </tr>
                <tr>
                    <td>
                        <p id="descricaoEvento">Planejamento e revisão de metas para o último trimestre do ano.</p>
                    </td>
                </tr>
                <tr>
                    <td id="dataEvento"><img class="calendariop" src="assets/calendariop.png" alt="ícone calendário">15 de Dezembro, 2025</td>
                </tr>
                <tr>
                    <td id="horario_evento"><img class="relogio" src="assets/relogio.png" alt="ícone relógio"> 09:00 - 17:00</td>
                </tr>
                <tr>
                    <td><img class="IconesEventos" src="assets/mapa.png" alt="ícone mapa">Sala de conferência A</td>
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
                    <td><img class="imagensIlustrativasEventos" src="assets/workshop de inovação - pexels.jpg" width="400" alt="Workshop de inovação"></td>
                </tr>
                <tr class="tituloTag">
                    <td>
                        <h4>Workshop de inovação</h4>
                    </td>
                    <td class="tag" id="tagEvento">Workshop</td>
                </tr>
                <tr>
                    <td>
                        <p>Metodologias ágeis e design thinking para projetos inovadores.</p>
                    </td>
                </tr>
                <tr>
                    <td class="IconesEventos"><img class="calendariop" src="assets/calendariop.png" alt="ícone calendário">18 de Dezembro, 2025</td>
                </tr>
                <tr>
                    <td><img class="relogio" src="assets/relogio.png" alt="ícone relógio"> 14:00 - 16:00</td>
                </tr>
                <tr>
                    <td><img class="IconesEventos" src="assets/mapa.png" alt="ícone mapa">Auditório Principal</td>
                </tr>
                <tr>
                    <td> +12 confirmados</td>
                </tr>
                <tr>
                    <td><button class="ConfirmarPresença">Confirmar Presença</button></td>
                </tr>
            </table>

            <table class="TableEventos" id="TableEventos">
                <tr>
                    <td><img class="imagensIlustrativasEventos" src="assets/festa de fim de ano-pexels.jpg" alt="Festa de Fim de Ano"></td>
                </tr>
                <tr class="tituloTag">
                    <td>
                        <h4>Festa de fim de ano</h4>
                    </td>
                    <td class="tag">Social</td>
                </tr>
                <tr>
                    <td>
                        <p>Celebração anual com toda a equipe, premiações, e confraternização.</p>
                    </td>
                </tr>
                <tr>
                    <td><img class="calendariop" src="assets/calendariop.png" alt="ícone calendário">22 de Dezembro, 2025</td>
                </tr>
                <tr>
                    <td><img class="relogio" src="assets/relogio.png" alt="ícone relógio"> 18:00 - 22:00</td>
                </tr>
                <tr>
                    <td><img class="IconesEventos" src="assets/mapa.png" alt="ícone mapa">Salão de Eventos</td>
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

        <h2>Calendário de Eventos</h2>
        <br><br>
        <!-- Inserir calendário de eventos com a API -->
        


    </main>

    <footer>
        <p>© 2024 HeyEvent. Todos os direitos reservados.</p>
    </footer>

<!-- CSS -->
    <style>
        /* Paleta de cores: azul #4E598C / rosa escuro #D90368 / verde #77A0A9 / rosa claro #FFEAEE */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #ffffffff;
            font-family: 'Raleway', sans-serif;
        }

        /* HEADER */
        header {
            display: flex;
            background-image: linear-gradient(to bottom, #000F55, #6C0034);
            background-repeat: no-repeat;
            width: 100vw;
            height: 5%;
            padding: 15px;
            align-items: center;
           
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
        }

        ul{
            display: flex;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        li{
            margin-left: 20px;

        }

        a{
            text-decoration: none;
            color: white;
        }

        @media (max-width: 768px) {
            nav ul {
                display: flex;
                flex-direction: column;
                position: relative;
                top: 20px; 
                justify-content: space-between;
                align-items: flex-start;
            }

            nav ul li {
                margin-left: 0;
                margin-bottom: 10px;
            }
        }

        .inícioHeader {
            gap: 40px;
        }

        /* .meioHeader {
            
        }

        .fimHeader {
            
        } */

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
        .tituloProxEven{
            margin-left: 20px;
        }

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
            border-spacing: 15px;
            box-shadow: 5px 5px 10px 5px rgba(0, 0, 0, 0.108);
            display: block;
        }

        .imagensIlustrativasEventos {
            width: fit-content;
            height: 300px;
            border-radius: 12px;
        }

        /* ícones */
        .IconesEventos {
            width: 20px;
        }

        .tituloTag{
            display:flex;
            justify-content: space-between;
            align-items: center;
        }

        .tag{
            background-color:#000F55;
            color: white;
            border-radius: 16px;
            padding: 7px 11px;
            font-size: 14px;
            text-align: center;
        }

        /* Botões Eventos */
        .ConfirmarPresença {
            background-color: #D90368;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 8px;
            width: 100%;
            text-align: center;
            cursor: pointer;
        }

        .PresençaConfirmada {
            background-color: #77A0A9;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 8px;
            width: 100%;
            text-align: center;
            cursor: pointer;
        }

        body {
            font-family: "Raleway", sans-serif;
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

        .sair {
            width: 30px;
        }

        .notificaçoes {
            width: 30px;
        }

        .user {
            width: 40px;
        }
        .relogio{
        
            width: 18px;
        }
        .calendariop{
            width: 25px;
        }
    </style>

<!-- JavaScript
    <script>
        function postarEvento(){
            imagem = document.getElementById('imagemEvento').innerHTML;
            titulo = document.getElementById('tituloEvento').innerHTML;
            tag = document.getElementById('tagEvento').innerHTML;
            descricao = document.getElementById('descricaoEvento').innerHTML;
            data_inicio = document.getElementById('dataEvento').innerHTML;
            horario = document.getElementById('horarioEvento').innerHTML;
            local = document.getElementById('localEvento').innerHTML;
            categoria = document.getElementById('categoria_evento').innerHTML;
            

            var tabela = document.getElementById('TableEventos');
        }
    </script> -->
</body>

</html>
<!-- PHP - Encerramento -->




<!-- 
<table class="TableEventos">
                <tr>
                    <td><img id="imagem_evento" class="imagensIlustrativasEventos" src="" width="400" alt=""></td>
                </tr>
                <tr class="tituloTag">
                    <td>
                        <h4 id="titulo_evento">Workshop de inovação</h4>
                    </td>
                    <td class="tag" id="tag_evento">Workshop</td>
                </tr>
                <tr>
                    <td>
                        <p id="descricao_evento">Metodologias ágeis e design thinking para projetos inovadores.</p>
                    </td>
                </tr>
                <tr>
                    <td class="IconesEventos" id="data_evento"><img class="calendariop" src="assets/calendariop.png" alt="ícone calendário">18 de Dezembro, 2025</td>
                </tr>
                <tr>
                    <td id="horario_evento"><img class="relogio" src="assets/relogio.png" alt="ícone relógio"> 14:00 - 16:00</td>
                </tr>
                <tr>
                    <td id="local_evento"><img class="IconesEventos" src="assets/mapa.png" alt="ícone mapa">Auditório Principal</td>
                </tr>
                <tr>
                    <td> +12 confirmados</td>
                </tr>
                <tr>
                    <td><button class="ConfirmarPresença">Confirmar Presença</button></td>
                </tr>
            </table>
 -->