<!-- PHP - Conexão banco de dados e seleção dos dados por data -->

<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "teste_eventos";
session_start();
$connection = new mysqli($host, $username, $password, $database);

if ($connection->connect_error) {
    die("Erro de conexão: " . $connection->connect_error);
}

$sql = "SELECT id_evento, titulo_evento, data_evento, descricao_evento, tag_evento, local_evento, horario_evento, imagem_evento FROM tabela_de_eventos ORDER BY data_evento ASC LIMIT 3";

$result = $connection->query($sql);

// $sql = "SELECT e.id_evento, e.titulo_evento, e.data_evento, e.descricao_evento, e.tag_evento, e.local_evento, e.horario_evento, e.imagem_evento,
//         IF(c.ID_USER IS NULL, 0, 1) AS confirmado
//         FROM tabela_de_eventos e
//         LEFT JOIN clientes_eventos c 
//         ON e.id_evento = c.ID_EVENTO AND c.ID_USER = ?
//         where  E.DATA_EVENTO >= curdate()
//         ORDER BY e.data_evento ASC
//         LIMIT 3";

// $stmt = $connection->prepare($sql);
// $stmt->bind_param("i", $_SESSION['ID_USER']);
// $stmt->execute();
// $result = $stmt->get_result();


    // Consultas para obter os dados do dashboard

    $sql = "SELECT COUNT(id_evento) AS eventos_futuros FROM tabela_de_eventos WHERE data_evento >= CURDATE()"; 
    $resultFut = $connection -> query($sql);
    $row = $resultFut -> fetch_assoc();
    $eventosFuturos = $row['eventos_futuros'];

    $sql = "SELECT COUNT(id_evento) AS total_eventos FROM tabela_de_eventos";
    $resultTot = $connection -> query($sql);
    $row = $resultTot -> fetch_assoc();
    $totalEventos = $row['total_eventos'];

?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal do Colaborador</title>
    <link rel="shortcut icon" href="assets\Icone.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
    href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;1,500&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz@12..96&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="logo-container">
            <img class="menu" src="assets/menu.png" alt="menu" id="menu">  
        </div>

        <nav class="menunav">
            <a href="#ProximosEventos"><img src="assets\confetti.png" alt="Eventos" width="28px">Eventos</a>
        </nav>
        <div class="opcoesUsuario">
            <a href="Perfil.php"><img class="user" src="assets\user.png" alt="Perfil" width="28px"></a>
            <!-- <a href="logout.php"><img class="sair" src="assets\sair.png" alt="Sair" width="28px">Sair</a> -->
        </div>
    </header>
<nav class="menubarra" id="menubarra">
    <ul class="ulmenu">
        <img src="assets\Logo HeyEvent Ofc.png" width="100px" alt="">
        <p class="hemenu">HeyEvent</p>
        <div class="lihover">
            <li><img src="assets\usermenu.png" alt=""><a class="amenu" href="Perfil.php">Seu Perfil</a></li>
        </div>
        <div class="lihover">
            <li><img src="assets\seguranca.png" alt=""><a class="amenu" href="#">Privacidade e segurança</a></li>
        </div>
        <div class="lihover">
            <li><img src="assets\infomenu.png" alt=""><a class="amenu" href="#">Central de ajuda</a></li>
        </div>
        <div class="lihover">
            <li><img src="assets\cadeado.png" alt=""><a class="amenu" href="">Termos de uso e política de privacidade</a></li>
        </div>
        <div class="lihover">
        <li><img src="assets\contato.png" alt=""><a class="amenu" href="Contato.php">Contato</a></li>
        </div>
         <div class="lihover">
            <li><img src="assets\heimg.png" alt=""><a class="amenu" href="Sobrenos.php">Sobre nós</a></li>
        </div>
        <div class="lihover">
            <li><img src="assets\sairmenu.png" alt="" width=""><a class="amenu" href="logout.php">Sair</a></li>
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
                        <td class="titulosdash">Eventos Futuros</td>
                    </tr>
                    <tr>
                        <td class="valor"><b><?php echo $eventosFuturos;?></b></td>
                    </tr>
                </table>
            </div>

            <div> <!-- Presença Total -->
                <table class="TableDashboard Presença">
                    <tr>
                        <td rowspan="2"><img class="IconesDashboard iconeTeam" src="assets/team.png" alt="pessoas"></td>
                        <td class="titulosdash">Total de Eventos</td>
                    </tr>
                    <tr>
                        <td class="valor"><b><?php echo $totalEventos;?></b></td>
                    </tr>
                </table>
            </div>
        </div>

        <br><br><br><br><br>

        <h2 class="tituloProxEven">Próximos Eventos</h2>
        <br><br>
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
                <p class="nenhumevento">Nenhum evento encontrado.</p>
            <?php endif; ?>
        </div>


        <br><br>

        <h2 class="tituloCalen">Calendário de Eventos</h2>
        <br><br>

        <div class="Calendario">
        <!-- Inserir calendário de eventos com a API -->
            <iframe src="https://calendar.google.com/calendar/embed?src=84b6f105d11e6c38135d03de39db4d40e6278ca06aa4ace7ec555ce313545b02%40group.calendar.google.com&ctz=America%2FSao_Paulo" style="border: 0" frameborder="0" scrolling="no"></iframe>
        </div>
<footer>
<p>© 2024 HeyEvent. Todos os direitos reservados.</p>
</footer>
    </main>



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


  font-family: "Montserrat", sans-serif;
  font-optical-sizing: auto;
  font-weight: 500;
  font-style: normal;         
        }

        .titulosdash{
        font-family: "Montserrat", sans-serif;
        font-optical-sizing: auto;
        font-weight: 500;
        font-style: normal;           
        }

        .MLogo {
            width: 100px;
            display: block;
            margin: 0 auto;
            max-width: 100%;
            height: auto;
        }
        .nenhumevento{
            text-align: center;
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
        .hemenu{
        font-family: "Bricolage Grotesque", sans-serif;
        font-optical-sizing: auto;
        font-weight: 400;
        font-style: normal;
        font-variation-settings:
        "width" 100;
        font-size: 35px;
        margin-left: 15px;
        }

        .lihover {
            transition: transform 0.3s ease;
        }
        
        .lihover img{
        width: 30px;
        margin-left: 10px;
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
            color: #000000ff;
            padding: 10px;
        }

        .footermenu {
            text-align: center;
            margin-top: 50px;
            color: #000000ff;

        }
         main {
            transition: margin-left 0.3s;
        }



        /* menu */



        .menunav {
        font-family: "Montserrat", sans-serif;
        font-optical-sizing: auto;
        font-weight: 500;
        font-style: normal;
        display: flex;
        justify-content: center;
        gap: 1.5rem;
        } 

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

        nav {
            display: flex;
            justify-content: center;
            gap: 1.5rem; 
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
        .tituloCalen{
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
            cursor: pointer;
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

        .Calendario {
            display:flex;
            justify-content: center;
        }

        iframe {
            width: 90%;
            height: 600px;
        }

        footer {
            text-align: center;
            margin: 40px;
            display: block;
        }

        @media screen and (max-width: 839px) {
           nav {
            align-items: flex-start;
           }

            nav ul {
                flex-direction: column;
                align-items: flex-start;
                width: 100%;
            }

            nav li {
                margin: 10px 0;
            }

            .Dashboard {
                flex-direction: column;
                align-items: center;
                justify-content:center;
            }

            #CriarEventoForm{
                width: 90%;
                padding: 20px;
            }

        #CriarEventoForm input, #CriarEventoForm select, #CriarEventoForm button {
        font-size: 14px;
        padding: 8px;
    }
        
    </style>

</body>

</html>
<!-- PHP - Encerramento -->
<?php
$connection->close();
?>