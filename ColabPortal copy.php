<!-- PHP - Conexão banco de dados e seleção dos dados por data -->

<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "teste_eventos";

$connection = new mysqli($host, $username, $password, $database);

if ($connection -> connect_error){
    die("Erro de conexão: " . $connection -> connect_error);
}

$sql = "SELECT titulo_evento, data_evento, descricao_evento, tag_evento, local_evento, horario_evento, imagem_evento FROM tabela_de_eventos ORDER BY data_evento ASC LIMIT 3";


$result = $connection -> query($sql);

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
    <nav class="menubarra" id="menubarra">
        <ul>
            <li><a href="<?php
                            if ($usuario['ID_acesso'] == 1) {
                                echo 'admPortal.php';
                            } elseif ($usuario['ID_acesso'] == 2) {
                                echo 'ColabPortal.php';
                            } else {
                                echo 'HeyEvent.php';
                            }
                            ?>">Início</a>
            </li>
            <li><a href="#">Sobre</a></li>
            <li><a href="#">Serviços</a></li>
            <li><a href="#">Contato</a></li>
        </ul>

    </nav>


    <main id="main">
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

            <?php if ($result->num_rows > 0): ?>
                <?php while ($row = $result->fetch_assoc()): ?>
                <div class="ProximosEventos">
                    <table class="TableEventos">
                        <tr>
                            <td id="imagem_evento"><img src="<?php echo $row['imagem_evento'] ?>" alt="Imagem do evento" class="imagensIlustrativasEventos"></td>
                        </tr>
                        <tr class="tituloTag">
                            <td id="tituloEvento">
                                <h4><?php echo $row["titulo_evento"] ?></h4>
                            </td>
                            <td id="tagEvento" class="tagEvento"><?php echo $row["tag_evento"] ?></td>
                        </tr>
                        <tr>
                            <td colspan="2" id="descricao_evento">
                                <p class="descricaoEvento"><?php echo $row["descricao_evento"] ?></p>
                            </td>
                        </tr>
                        <tr>
                            <td class="IconesEventos" id="data_evento"><img class="calendariop" src="assets/calendariop.png" alt="ícone calendário"><?php echo date("d/m/y", strtotime($row["data_evento"])) ?></td>
                        </tr>
                        <tr>
                            <td colspan="2" id="horario_evento"><img class="relogio" src="assets/relogio.png" alt="ícone relógio"><?php echo $row["horario_evento"] ?></td>
                        </tr>
                        <tr>
                            <td id="local_evento" colspan="2"><img class="IconesEventos" src="assets/mapa.png" alt="ícone mapa"><?php echo $row["local_evento"] ?></td>
                        </tr>
                        <tr>
                            <td colspan="2"><button class="ConfirmarPresença">Confirmar Presença</button></td>
                        </tr>
                    </table>
                </div>  
                <?php endwhile; ?>
            <?php else: ?>
                <p>Nenhum evento encontrado.</p>
            <?php endif; ?>
        </div>

        <br><br>

        <h2>Calendário de Eventos</h2>
        <br><br>
        <!-- Inserir calendário de eventos com a API -->

    </main>

    <footer>
        <p>© 2024 HeyEvent. Todos os direitos reservados.</p>
    </footer>
    <script>
        const menu = document.getElementById('menu');
        const menubarra = document.getElementById('menubarra');
        const main = document.getElementById('main');

        menu.addEventListener('click', () => {
            if (menubarra.style.left === "0px") {
                menubarra.style.left = "-250px";
                main.style.marginLeft = "0";
            } else {
                menubarra.style.left = "0px";
                main.style.marginLeft = "250px";
            }
        });
        main.addEventListener('click', () => {
            if (menubarra.style.left === "0px") {
                menubarra.style.left = "-250px";
                main.style.marginLeft = "0";
            }
        });
    </script>
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

        .menubarra {
            position: fixed;
            top: 0;
            left: -250px;
            width: 250px;
            height: 100%;
            background-color: #ffffffff;
            box-shadow: 5px 5px 10px 5px rgba(0, 0, 0, 0.108);
            padding-top: 60px;
            transition: 0.3s;
            z-index: 2;
            font-family: "Quicksand", sans-serif;
        }

        main {
            transition: margin-left 0.3s;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
        }


        ul {
            list-style: none;

            display: flex;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        li{
            margin-left: 20px;

        }

        a {
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
        .tituloProxEven {
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
            width: fit-content;
            height: fit-content; 
            /* display: flex; */
            /* flex-direction: row;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;   */
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

        .tituloTag {
            display: flex;
            justify-content:space-between;
            align-items: center;
        }

        .tagEvento {
            display: flex;
            background-color: #000F55;
            color: white;
            border-radius: 16px;
            padding: 7px 11px;
            font-size: 14px;
            align-items: end;
            justify-content:end;
        }

        /* Botões Eventos */
        .ConfirmarPresença {
            display: flex;
            background-color: #D90368;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 8px;
            width: 100%;
            text-align: center;
            align-items: center;
            cursor: pointer;
            justify-content: center;
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

        .relogio {

            width: 18px;
        }

        .calendariop {
            width: 25px;
        }

        footer{
            text-align:center;
            margin: 40px;
            display: block;
        }
    </style>

</body>

</html>
<!-- PHP - Encerramento -->

<?php
$connection->close();
?>

