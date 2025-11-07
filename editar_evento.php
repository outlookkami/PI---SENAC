<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "hey_event";

$connection = new mysqli($host, $username, $password, $database);

if ($connection->connect_error) {
    die("Erro de conexão: " . $connection->connect_error);
}

if (isset($_POST['id_evento'])) {
    $id_evento = intval($_POST['id_evento']);
    $nome_evento = $_POST['nome_evento'];
    $data_evento = $_POST['data_evento'];
    $local_evento = $_POST['local_evento'];
    $descricao = $_POST['descricao'];

    $sql = "UPDATE tabela_de_eventos 
            SET titulo_evento = ?, data_evento = ?, local_evento = ?, descricao_evento = ? 
            WHERE id_evento = ?";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("ssssi", $nome_evento, $data_evento, $local_evento, $descricao, $id_evento);

    if ($stmt->execute()) {
        header("Location: administrador.php?msg=evento_editado");
        exit;
    } else {
        echo "Erro ao editar evento: " . $connection->error;
    }

    $stmt->close();
} elseif (isset($_GET['id_evento'])) {
    $id_evento = intval($_GET['id_evento']);
    $sql = "SELECT * FROM tabela_de_eventos WHERE id_evento = ?";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("i", $id_evento);
    $stmt->execute();
    $result = $stmt->get_result();
    $evento = $result->fetch_assoc();
    $stmt->close();
} else {
    die("Evento não especificado.");
}

$connection->close();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Administrativo</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets\Icone.png">
</head>
<body>

<form action="editar_evento.php" method="POST">
    <h2>Editar Evento</h2>

    <input type="hidden" name="id_evento" value="<?php echo $evento['id_evento']; ?>">

    <label><b>Nome do Evento</b></label>
    <input type="text" name="nome_evento" value="<?php echo htmlspecialchars($evento['titulo_evento']); ?>" required>

    <label><b>Data</b></label>
    <input type="date" name="data_evento" value="<?php echo htmlspecialchars($evento['data_evento']); ?>" required>

    <label><b>Local</b></label>
    <input type="text" name="local_evento" value="<?php echo htmlspecialchars($evento['local_evento']); ?>" required>

    <label><b>Descrição</b></label>
    <textarea name="descricao" rows="4" required><?php echo htmlspecialchars($evento['descricao_evento']); ?></textarea>

    <button type="submit">Salvar Alterações</button>
</form>
    <style>
        body {
            font-family: "Poppins", sans-serif;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        form {
            background-color: #fff;
            padding: 30px;
            border-radius: 16px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            width: 400px;
        }
        input, textarea, button {
            width: 100%;
            margin-bottom: 15px;
            padding: 10px;
            font-size: 14px;
            border-radius: 8px;
            border: 1px solid #ccc;
        }
        button {
            background-color: #2b7cff;
            color: white;
            border: none;
            font-weight: 600;
            cursor: pointer;
        }
        button:hover {
            background-color: #1a5edc;
        }
    </style>

</body>
</html>
