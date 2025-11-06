
<?php
// Conexão com o banco de dados
$host = "localhost";
$username = "root";
$password = "";
$database = "hey_event";
session_start();

$connection = new mysqli($host, $username, $password, $database);

if ($connection -> connect_error){
    die("Erro de conexão" . $connection -> connect_error);}

$sql = "SELECT * FROM tabela_de_eventos";

$result = $connection -> query($sql);

$sql = "SELECT * FROM tabela_de_eventos ORDER BY data_evento ASC";

if(!$result){
    die("Erro ao acessar dados." . $connection -> error);
}

// $sql = "SELECT id_evento, titulo_evento, data_evento, descricao_evento, tag_evento, local_evento, horario_evento, imagem_evento FROM tabela_de_eventos ORDER BY data_evento ASC LIMIT 3";

// $result = $connection->query($sql);

$sql = "SELECT e.id_evento, e.titulo_evento, e.data_evento, e.descricao_evento, e.tag_evento, e.local_evento, e.horario_evento, e.imagem_evento,
        IF(c.ID_USER IS NULL, 0, 1) AS confirmado
        FROM tabela_de_eventos e
        LEFT JOIN clientes_eventos c 
        ON e.id_evento = c.ID_EVENTO AND c.ID_USER = ?
        where  E.DATA_EVENTO >= curdate()
        ORDER BY data_evento ASC, horario_inicio_evento ASC
        LIMIT 4";

$stmt = $connection->prepare($sql);
$stmt->bind_param("i", $_SESSION['ID_USER']);
$stmt->execute();
$result = $stmt->get_result();
// $row = $result->fetch_assoc();

// $id_evento = $row['id_evento'];
// $sql = "SELECT COUNT(id_user) AS usuarios_confirmados FROM clientes_eventos WHERE ID_EVENTO = $id_evento AND confirmado = 1";
// $resultConf = $connection->query($sql);
// $rowConf = $resultConf->fetch_assoc();
// $usuariosConfirmados = $rowConf['usuarios_confirmados'];

    // Consultas para obter os dados do dashboard

    $sql = "SELECT COUNT(id_evento) AS eventos_futuros FROM tabela_de_eventos WHERE data_evento >= CURDATE()"; 
    $resultFut = $connection -> query($sql);
    $row = $resultFut -> fetch_assoc();
    $eventosFuturos = $row['eventos_futuros'];

    $sql = "SELECT COUNT(id_evento) AS total_eventos FROM tabela_de_eventos";
    $resultTot = $connection -> query($sql);
    $row = $resultTot -> fetch_assoc();
    $totalEventos = $row['total_eventos'];


if (isset($_POST['submit'])) {
    $titulo_evento = $_POST['titulo_evento'];
    $descricao_evento = $_POST['descricao_evento'];
    $data_evento = $_POST['data_evento'];
    $horario_inicio_evento = $_POST['horario_inicio_evento'];
    $horario_fim_evento = $_POST['horario_fim_evento'];

    $horario_evento = $_POST['horario_inicio_evento'] . " - " . $_POST['horario_fim_evento'] . "";

    $horario_evento = $_POST['horario_inicio_evento'] . " - " . $_POST['horario_fim_evento'];


    $local_evento = $_POST['local_evento'];
    $tag_evento = $_POST['tag_evento'] ?? null;
    $imagem_evento = $_FILES['imagem_evento'];
     $imagem_evento = $_POST[$_FILES['imagem_evento']['name']] ?? null;

    $destino = "uploads/";

    if(!is_dir($destino)){
        mkdir($destino, 0755, true);
    }

    $caminhoArquivo = null;

    if(isset($_FILES["imagem_evento"]) && $_FILES["imagem_evento"]['error'] === 0){
    $arquivoTmp = $_FILES['imagem_evento']['tmp_name'];
    $nomeArquivo = basename($_FILES['imagem_evento']['name']);
    $extensao = pathinfo($nomeArquivo, PATHINFO_EXTENSION);
    $novoNomeArquivo = uniqid('evento_', true) . "." . $extensao;
    $caminhoArquivo = $destino . $novoNomeArquivo;

    if(!move_uploaded_file($arquivoTmp, $caminhoArquivo)){
        die("Erro ao mover o arquivo enviado.");
    }
}

    $sql = "INSERT INTO tabela_de_eventos (titulo_evento, descricao_evento, data_evento, horario_inicio_evento, horario_fim_evento, horario_evento, local_evento, tag_evento, imagem_evento) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $connection -> prepare($sql);
    $stmt -> bind_param("sssssssss", $titulo_evento, $descricao_evento, $data_evento, $horario_inicio_evento, $horario_fim_evento, $horario_evento, $local_evento, $tag_evento, $caminhoArquivo);

    if ($stmt -> execute()){
        header("Location: admPortal.php?msg=sucesso");
        exit;
    } else {
        echo "Erro ao criar evento: " . $connection -> error;
    }
}
  
$connection -> close();


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Administrativo</title>
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

            <a href="Sobrenos.php"><img class="Logo" src="assets\Logo HeyEvent Ofc.png" alt="logo"></a> 
            
        </div>

        <nav class="menunav">
            <a href="Sobrenos.php"><img src="assets\info.png" alt="inicio" width="28px">Sobre nós</a>
        </nav>
        <div class="opcoesUsuario">
            <a href="Perfil.php"><img class="user" src="assets\user.png" alt="Perfil" width="28px"></a>
        </div>
    </header>
<nav class="menubarra" id="menubarra">
    <ul class="ulmenu">
        <img src="assets\Logo HeyEvent Ofc.png" width="90px" alt="">
        <p class="hemenu">HeyEvent</p>
        <div class="lihover">
            <li><img src="assets\menuuser.png" alt=""><a class="amenu" href="Perfil.php">Seu Perfil</a></li>
        </div>
        <div class="lihover">
            <li><img src="assets\menuseguranca.png" alt=""><a class="amenu" href="privacidade_seguranca.php">Privacidade e segurança</a></li>
        </div>
        <div class="lihover">
            <li><img src="assets\menuinfo.png" alt=""><a class="amenu" href="central_de_ajuda.php">Central de ajuda</a></li>
        </div>
        <div class="lihover">
            <li><img src="assets\menucadeado.png" alt=""><a class="amenu" href="termos_privacidade.php">Termos de uso e política de privacidade</a></li>
        </div>
        <div class="lihover">
        <li><img src="assets\menucontato.png" alt=""><a class="amenu" href="Contato.php">Contato</a></li>
        </div>
         <div class="lihover">
            <li><img src="assets\menuheimg.png" alt=""><a class="amenu" href="Sobrenos.php">Sobre nós</a></li>
        </div>
        <div class="lihover">
            <li><img src="assets\menusair.png" alt="" width=""><a class="amenu" href="logout.php">Sair</a></li>
        </div>
        <p class="footermenu">Todos os direitos reservados. <br>© 2024 HeyEvent.</p>
    </ul>
</nav>


<div id="conteudomain">
    <main>
        <h2 class="TituloDashboard">Dashboard</h2>
        <div class="Dashboard">
            <br>
            <div>
                <table class ="TableDashboard Eventos">
                    <tr>
                        <td rowspan="2"><img class="IconesDashboard" src="assets/calendarioAzul.png" alt="calendário"></td>
                        <td class="titulosdash">Eventos Futuros</td>
                    </tr>
                    <tr>
                        <td class="valor"><b><?php echo $eventosFuturos;?></b></td>
                    </tr>
                </table>
            </div>

            <div> <!-- Total de Eventos -->
                <table class="TableDashboard Total">
                    <tr>
                        <td rowspan="2"><img class="IconesDashboard" src="assets/eventos.png " alt="calendário"></td>
                        <td class="titulosdash">Total de Eventos</td>
                    </tr>
                    <tr>
                        <td class="valor"><b><?php echo $totalEventos;?></b></td>
                    </tr>
                </table>
            </div>

        </div>

        <br><br><br><br>

         <button class="criarEvento" type="button" onclick="mostraForm()">&#43 Criar evento</button>
       

        <br><br><br>

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

                            <!-- <tr>
                                <td>
                                   <img class="IconesEventos" src="assets/mapa.png" alt="ícone mapa"> <?php echo $usuariosConfirmados?> 
                                </td>
                            </tr> -->
                           
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
    </main>
<br><br><br>
<footer>
<p>© 2024 HeyEvent. Todos os direitos reservados.</p>
</footer>
<br><br><br>
         
</div>
    
    <!-- Formulário de criação de eventos -->

    <!-- <div class="CriarEventoForm" id="formCriarEvento" style="display: none;">
        <form method="post" action="admPortal.php" enctype="multipart/form-data" class="CriarEventoForm"> -->

    <div class="CriarEventoForm" id="formCriarEvento" style="display: none;">
        <form method="post" action="admPortal.php" enctype="multipart/form-data" class="CriarEventoForm">

            <h2 class="CNE">Criar Novo Evento</h2><br>
            <label for="titulo_evento"><b>Título do evento</b></label><br>
            <input class="inpt1" type="text" name="titulo_evento" id="titulo_evento" placeholder="Digite o título do seu evento">
            <br><br>
            <label for="descricao_evento"><b>Descrição</b></label><br>
            <input class="inpt1" type="text" name="descricao_evento" id="descricao_evento" placeholder="Descreva o evento">
            <br><br>
            <label for="data_evento"><b>Data</b></label><br>
            <input class="inpt1" type="date" name="data_evento" id="data_evento" >
            <br><br>
            <label><b>Horário</b></label><br>
            <div class="horarios">
                <div>
                    <label for="horario_inicio_evento"><b>Início</b></label><br>
                    <input class="inpt1" type="time" name="horario_inicio_evento" id="horario_inicio_evento" placeholder="Ex: 14:00">
                </div>
                <div>
                    <label for="horario_fim_evento"><b>Fim</b></label><br>
                    <input class="inpt1" type="time" name="horario_fim_evento" id="horario_fim_evento" placeholder="Ex: 16:00"></div>
            </div>

            <br><br>
            <label for="local_evento"><b>Local</b></label><br>
            <input class="inpt1" type="text" name="local_evento" id="local_evento" placeholder="Digite o local do evento">
            <br><br>
            <label for="tag_evento"><b>Categoria</b></label><br>
                <select name="tag_evento" id="tag_evento">
                    <option value="seleção" disabled selected>Selecione uma opção</option>
                    <option value="Reunião">Reunião</option>
                    <option value="Workshop">Workshop</option>
                    <option value="Festa">Festa</option>
                    <option value="Palestra">Palestra</option>
                    <option value="Outros">Outros</option>
                </select>
            <br><br>
            
            <label for="imagem_evento"><b>Arquivo de imagem (opcional)</b></label><br>
            <input class="file" type="file" id="imagem_evento" name="imagem_evento" accept="image/*">
            <label for="imagem_evento" class="estiloFile">Escolher arquivo</label>
            <br><br>

            <div class="botoes">
            <button class="botaoCancelar" type="button" onclick="escondeForm()">Cancelar</button><br>
            <button class="botaoCriar" type="submit" name="submit" onclick="escondeForm(); limparFormulario()">Criar Evento</button>
            </div>

    </form>
    <!-- </div>
            <button class="botaoCancelar" type="button" onclick="escondeForm()">Cancelar</button>

            <button class="botaoCriar" type="submit" name="submit" onclick="escondeForm(); limparFormulario()">Criar Evento</button>

            <button class="botaoCriar" type="submit" onclick="escondeForm()">Criar Evento</button>
    </form> -->
    </div>

    <script>
        function mostraForm() {
            document.getElementById("formCriarEvento").style.display = "flex";
            // document.getElementById("conteudoPrincipal").classList.add("blur");
            document.getElementById("conteudomain").classList.add("blur");
            document.getElementsByTagName("nav")[1].style.overflow = "hidden";
        }
   
        function escondeForm() {
            document.getElementById("formCriarEvento").style.display = "none";
            document.getElementById("conteudomain").classList.remove("blur");
        }
        const menu = document.getElementById('menu');
        const menubarra = document.getElementById('menubarra');
        const conteudomain = document.getElementById('conteudomain');

        menu.addEventListener('click', () => {
            if (menubarra.style.left === "0px") {
                menubarra.style.left = "-250px";
                conteudomain.style.marginLeft = "0";
            } else {
                menubarra.style.left = "0px";
                conteudomain.style.marginLeft = "250px";
            }
        });
        conteudomain.addEventListener('click', () => {
            if (menubarra.style.left === "0px") {
                menubarra.style.left = "-250px";
                conteudomain.style.marginLeft = "0";
            }
        });
    </script>
    <style>
        /* Paleta de cores: azul #4E598C / rosa escuro #D90368 / verde #77A0A9 / rosa claro #FFEAEE */
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body{
            background-color: #ffffffff;
            font-family: quicksand;
        }

        /* HEADER */
        header{
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
                .relogio {

            width: 18px;
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

        }
                .lihover {
        transition: transform 0.3s ease;
        font-family: Quicksand;
        font-size: 18px;
        }
        
        .lihover img{
        width: 30px;
        margin-left: 10px;
        }


        .lihover:hover {
            transform: scale(1.05);

        }

        .titulosdash{
        font-family: "Montserrat", sans-serif;
        font-optical-sizing: auto;
        font-weight: 500;
        font-style: normal;           

        }
        .menu{
            cursor: pointer;
        }
          .tituloProxEven {
            margin-left: 20px;
            color: black;
            color: #000000ff;
            font-family: Quicksand;
        }
        .tituloCalen{
            margin-left: 20px;
            color: black;
            color: #000000ff;
            font-family: Quicksand;  
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
            width: 300px;
            height: 250px;
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
        .menunav {
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




        .ulmenu {
            list-style: none;
        }

        .hemenu{
        color: #000000;
        font-family: Quicksand;
        font-size: 35px;
        margin-left: 20px;
        font-weight: 400;
        }



        .ulmenu li {
            display: flex;
            align-items: center;
            margin-top: 40px;

        }
        .amenu {
            text-decoration: none;
            color: #000000;
            padding: 10px;
        }

        .footermenu {
            text-align: center;
            margin-top: 50px;
            color: #000000;

        }

#conteudomain {
    transition: margin-left 0.3s ease;
}

        /* menu */
        /* .menunav {
        font-family: "Montserrat", sans-serif;
        font-optical-sizing: auto;
        font-weight: 500;
        font-style: normal;
        display: flex;
        justify-content: center;
        gap: 1.5rem;
        }  */
        .menunav {
        font-family: "Montserrat", sans-serif;
        font-optical-sizing: auto;
        font-weight: 500;
        font-style: normal;
        } 

        .menunav {
            display: flex;
            justify-content: center;
            gap: 1.5rem;
        }

        nav {
            display: flex;
            justify-content: center;
            gap: 1.5rem; 
        }

        /* .opcoesUsuario {} */

        .logo-container{
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .logo{
            font-size: 1.5rem;
            background-color: transparent;
            color: white;
            border: none;
            cursor: pointer;
        }

        nav {
            display: flex;
            justify-content: center;
            gap: 1.5rem;  
        }

        a{
            display: flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
            color: white;
            transition: color 0.3s;
        }

        a:hover {
            color: #D90368;
        }

        .logo-container {
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }
        

        /* @media (max-width: 768px) {
            nav{
                display: flex;
                flex-direction: row;
                position: relative;
                top: 100%;
                width: 100%;
                gap: 1rem; 
            }

            .logo-container{
                display: flex;
                margin-right: 1rem;
                justify-content: flex-start;
            }

            header{
                display: flex;
                flex-direction: row;
                position: relative;
                justify-content: space-between;  
                align-content: center;    
                gap: 1rem;
            }

            nav img, .user{
                display: none;
            }

        } */

        .TituloTabela{
            margin: 20px;
            color: white;
        }

        table{
            background-color: white;
            border-radius: 20px;
            padding: 10px;
            margin-left: 20px;
            width: 800px;
            height: 80px;
        }

        main{
            transition: margin-left 0.3s;
        }

        /* DASHBOARD */
        .TituloDashboard{
            margin-left: 20px;
            color: black;
            color: #000000;
            font-family: Quicksand;
        
        }

        /* Grupo das Tabelas */
        .Dashboard{
            display: flex;
            gap: 40px;
            margin: 20px;
            justify-content: center;
            flex-wrap: wrap;
            align-items: center;
        }

        /* Elementos tabelas */
        .TableDashboard{
            width: 360px;
            height: 100px;
            background-color: white;
            border-radius: 20px;
            border: 1px solid #838691;
        }

        /* Borders específicas (esquerda) */
        .Eventos{
            border-left: 4px solid #4e598c;
        }

        .Total{
            border-left: 4px solid #77A0A9;
        }

        /* ícones */
        .IconesDashboard{
            margin-left: 20px;
            width: 50px;
        }

        /* Tamanhos de fonte */
        .valor {
            font-size: 25px;
        }

        /* Botão Criar Evento */

        button{
            background-color: transparent;
            color: white;
            border: none;
            place-content: space-between;
            font-family: "Raleway", sans-serif;
        }

        button:hover{
            color:#D90368;
            background-color: #000F55;
            cursor: pointer;
        }

        .criarEvento{
            background-color: #000F55;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 8px;
            width: 120px;
            text-align: center;
            cursor: pointer;
            margin: 20px;
        }

        .criarEvento:hover{
            background-color: #000F55;
            color: #D90368;
        }

        .blur{
            filter: blur(5px);
            transition: filter 0.3s ease
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

        .botaoCriar{
            background-color: #4e598c;
            color: white;
            border-radius: 6px;
            padding: 6px;
            width: 120px;
            border: 1px solid #4e598c;
            font-size: 14px;
        }

        .botaoCancelar{
            background-color: transparent;
            border: 1px solid #838691;
            color: black;
            border-radius: 6px;
            padding: 6px;
            width: 120px;
            font-size: 14px;
        }

        .menu{
            width: 20px;
            cursor: pointer;
        }

        .Logo{
            width: 30px;
        }

        .notificaçoes{
            width: 30px;
        }

        .user{
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
        }

        .CriarEventoForm{
            display: flex;
            background-color: #ffffffff;
            box-shadow: 5px 5px 10px 5px rgba(0, 0, 0, 0.108);
            border-radius: 40px;
            align-items: center;
            flex-direction: column;
            position: absolute;  
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);  
            margin: 40px;
            padding: 40px;        
        }

        /* Eventos */
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
            width: 400px;
            height: 250px;
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
        }

        .horarios{
            display: flex;
            gap: 40px;
        }

        .horarios label{
            font-size: 13px;
        }

        .horarios input{
            display: flex;
            flex-direction: row;
            width: 130px;
        }

        select{
            height: 40px;
            width: 300px;
            border-radius: 8px;
            border-style: solid;
            border-color: black;
            border-width: 1px;
            font-family: "Raleway", sans-serif;
            font-size: 14px;
        }
 
        .file{
            display: none;
        } 

        .estiloFile{
            background-color: #4e598c;
            color: white;
            border-radius: 6px;
            text-align: center;
            cursor: pointer;
            margin-top: 4px;
            padding: 6px;
            font-size: 12px;
        }

        .estiloFile:hover{
            background-color: #000F55;
            color:#D90368;
        }

        ::placeholder {
            font-family: "Raleway", sans-serif;
        }

        .botoes{
            display:flex;
            gap: 20px;
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

        /* @media screen and (max-width: 480px) {
            .horarios {
                flex-direction: column;
                align-items: center;
                gap: 10px;
            }

            .horarios div {
                width: 100%;
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            #CriarEventoForm{
                width: 100%;
                padding: 10px;
            }
        } */

    </style>
    
</body>

</html>

<?php 
$connection -> close();
?>