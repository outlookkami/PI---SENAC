<!-- PHP - Conexão banco de dados e seleção dos dados por data -->

<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "hey_event";
session_start();
$connection = new mysqli($host, $username, $password, $database);

if ($connection->connect_error) {
    die("Erro de conexão: " . $connection->connect_error);
}

// $sql = "SELECT id_evento, titulo_evento, data_evento, descricao_evento, tag_evento, local_evento, horario_evento, imagem_evento FROM tabela_de_eventos ORDER BY data_evento ASC LIMIT 3";

// $result = $connection->query($sql);

$sql = "SELECT e.id_evento, e.titulo_evento, e.data_evento, e.descricao_evento, e.tag_evento, e.local_evento, e.horario_evento, e.imagem_evento,
        IF(c.ID_USER IS NULL, 0, 1) AS confirmado
        FROM tabela_de_eventos e
        LEFT JOIN clientes_eventos c 
        ON e.id_evento = c.ID_EVENTO AND c.ID_USER = ?
        where  E.DATA_EVENTO >= curdate()
        ORDER BY e.data_evento ASC
        LIMIT 3";

$stmt = $connection->prepare($sql);
$stmt->bind_param("i", $_SESSION['ID_USER']);
$stmt->execute();
$result = $stmt->get_result();

?>


<!-- HTML - Portal do Colaborador -->
<!DOCTYPE html>
<html lang="pt">

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
        <div class="logo-container">
            <a href="Sobrenos.php"><button class="logo"><img class="Logo" src="assets\Logo HeyEvent Ofc.png" alt="logo"></button></a>
            <img class="menu" src="assets/menu.png" alt="menu" id="menu">
        </div>

        <nav class="menunav">
            <!-- <a href="#Dashboard"><img src="assets\dashboards.png" alt="Dashboard" width="28px">Dashboard</a> -->
            <a href="#ProximosEventos"><img src="assets\confetti.png" alt="Eventos" width="28px">Eventos</a>
            <!-- <a href="#Calendario"><img class="calendario" src="assets\calendar (3).png" alt="Calendário" width="28px">Calendário</a> -->
        </nav>
        <div class="opcoesUsuario">
            <a href="Perfil.php"><img class="user" src="assets\user.png" alt="Perfil" width="28px">Perfil</a>
            <a href="logout.php"><img class="sair" src="assets\sair.png" alt="Sair" width="28px">Sair</a>
        </div>
    </header>
<nav class="menubarra" id="menubarra">
    <img class="MLogo" src="assets\Logo HeyEvent Ofc.png" alt=""> <br>
    <p class="MHE">HeyEvent</p>
    <ul class="ulmenu">
        <div class="lihover">
            <li><img src="assets\home.png" alt=""><a class="amenu" href="<?php
                if ($usuario['ID_acesso'] == 1) {
                echo 'admPortal.php';
                } elseif ($usuario['ID_acesso'] == 2) {
                echo 'ColabPortal copy.php';
                } else {
                echo 'HeyEvent.php';
                }
                ?>">Início</a>
            </li>
        </div>
        <div class="lihover">
        <li><img src="assets\info a.png" alt=""><a class="amenu" href="Sobrenos.php">Sobre nós</a></li>
        </div>
        <div class="lihover">
            <li>
                <img src="assets\prox.png" alt=""></i><a class="amenu" href="<?php
                if ($usuario['ID_acesso'] == 1) {
                echo 'admPortal.php';
                } elseif ($usuario['ID_acesso'] == 2) {
                echo 'ColabPortal copy.php';
                } else {
                echo 'HeyEvent.php';
                }
                ?>">Próximos eventos</a>
            </li>
        </div>
        <div class="lihover">
        <li><img src="assets\contato.png" alt=""><a class="amenu" href="Contato.php">Contato</a></li>
        </div>
    </ul>
    <p class="footermenu">Todos os direitos reservados. <br>© 2024 HeyEvent.</p>
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

            <!-- <div> Prêmios Disponíveis -->
            <!-- <table class="TableDashboard Prêmios">
                    <tr>
                        <td rowspan="2"><img class="IconesDashboard" src="assets/gift.png" alt="presente"></td>
                        <td>Prêmios Disponíveis</td>
                    </tr>
                    <tr>
                        <td class="valor"><b>4</b></td>
                    </tr>
                </table> -->
            <!-- </div> -->

            <!-- <div> Pontos Acumulados -->
            <!-- <table class="TableDashboard Pontos">
                    <tr>
                        <td rowspan="2"><img class="IconesDashboard" src="assets/star.png" alt="estrela"></td>
                        <td>Pontos Acumulados</td>
                    </tr>
                    <tr>
                        <td class="valor"><b>2.450</b></td>
                    </tr>
                </table> -->
            <!-- </div>  -->
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
                                <td class="tdInfo" class="IconesEventos" id="data_evento"><img class="calendariop" src="assets/calendariop.png" alt="ícone calendário"><?php echo date("d/m/y", strtotime($row["data_evento"])) ?></td>
                            </tr>
                            <tr>
                                <td class="tdInfo" colspan="2" id="horario_evento"><img class="relogio" src="assets/relogio.png" alt="ícone relógio"><?php echo $row["horario_evento"] ?></td>
                            </tr>
                            <tr>
                                <td class="tdInfo" id="local_evento" colspan="2"><img class="IconesEventos" src="assets/mapa.png" alt="ícone mapa"><?php echo $row["local_evento"] ?></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <button
                                        class="ConfirmarPresença <?php echo ($row['confirmado'] ? 'clicado' : ''); ?>"
                                        data-evento="<?php echo $row['id_evento']; ?>"
                                        data-usuario="<?php echo $_SESSION['ID_USER']; ?>"
                                        onclick="confPresenca(this)">
                                        <?php echo ($row['confirmado'] ? 'Confirmado' : 'Confirmar Presença'); ?>
                                    </button>
                                </td>
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


        function confPresenca(botao) {
            const idEvento = botao.getAttribute('data-evento');
            const acao = botao.classList.contains('clicado') ? "desconfirmar" : "confirmar";

            if (!confirm(`Deseja realmente ${acao} sua presença neste evento?`)) {
                return;
            }

            fetch('confirmar.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    },
                    body: `id_evento=${idEvento}`
                })
                .then(res => res.json())
                .then(data => {
                    if (data.status === 'ok') {
                        if (data.confirmado) {
                            botao.classList.add('clicado');
                            botao.textContent = 'Confirmado';
                        } else {
                            botao.classList.remove('clicado');
                            botao.textContent = 'Confirmar Presença';
                        }
                    } else {
                        alert(data.msg);
                    }
                })
                .catch(err => console.error(err));
        }
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

/* menu */
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

        .MLogo {
            width: 100px;
            display: block;
            margin: 0 auto;
            max-width: 100%;
            height: auto;
        }

        .MHE {
            color: #000F55;
            font-family: Quicksand;
            font-weight: 1000px;
            font-size: 40px;
            margin: 0 auto;
            text-align: center;
            font-weight: lighter;

        }
                li img {
            width: 40px;
        }

        
        .ulmenu {
            list-style: none;

        }

        .lihover {
            transition: transform 0.3s ease;
        }
        



        .lihover:hover {
            transform: scale(1.05);

        }

        .ulmenu li {
            display: flex;
            align-items: center;
            margin-top: 40px;

        }

        .amenu {
            text-decoration: none;
            color: #000F55;
        }

        .footermenu {
            text-align: center;
            margin-top: 300px;
            color: #000F55;
        }
                main {
            transition: margin-left 0.3s;
        }


        /* menu */


/* 
        menunav {
            display: flex;
            justify-content: center;
            gap: 1.5rem;
        } */

/* header */
        header {
            background-image: linear-gradient(to bottom, #000F55, #6C0034);
            background-repeat: no-repeat;
            width: 100%;
            min-height: 60px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
            padding: 0.75rem 1.5rem;
        }
        .opcoesUsuario {
            display: flex;
            gap: 1rem;
            justify-content: space-between;
            align-items: center;
        }
                a:hover {
            color: #D90368;
        }
                a {
            display: flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
            color: white;
            transition: color 0.3s;
        }
                .logo-container {
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .logo {
            font-size: 1.5rem;
            background-color: transparent;
            color: white;
            border: none;
            cursor: pointer;
        }
/* header */



        /* main {
            transition: margin-left 0.3s;
        } */

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
            flex-wrap: wrap;
            align-items: center;
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
            align-items: flex-start;
            flex-wrap: wrap;
            min-width: 400px;
        }

        /* Elementos das tabelas */
        .TableEventos {
            background-color: white;
            border-radius: 20px;
            padding: 20px;
            border-spacing: 15px;
            box-shadow: 5px 5px 10px 5px rgba(0, 0, 0, 0.108);
            width: 100%;
            max-width: 500px;
            box-sizing: border-box;
        }

        .imagensIlustrativasEventos {
            display: block;
            width: 100%;
            object-fit: cover;
            max-height: 800px;
            border-radius: 8px;
        }

        .tdInfo {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        /* ícones */
        .IconesEventos {
            width: 20px;
        }

        .tituloTag {
            display: flex;
            justify-content: space-between;
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
            justify-content: end;
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


        .clicado {
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

        .user {
            width: 40px;
        }

        .relogio {

            width: 18px;
        }

        .calendariop {
            width: 25px;
        }

        footer {
            text-align: center;
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